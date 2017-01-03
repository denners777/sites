<?php

class Evento extends MY_Model {

    const TABELA = 'eventos';
    const ID = 'e_ID';
    const Data = 'e_Data';
    const Slug = 'e_Vinculo';
    const Destaque = 'e_Destaque';
    const MetaDados = 'e_Dados';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
        return $this->GetBySlug($Criterio);
    }

    public function GetAll($Page = 0) {
        $R = parent::GetAll($Page);
        if (!is_array($R)) {
            $R = array();
        }
        return $R;
    }

    public function Busca($Termo = NULL, $Filtro = 'madrid') {
        #Termo
        $Termo = json_encode($Termo);
        $Termo = str_replace('{','',$Termo);
        $Termo = str_replace('}','',$Termo);
        $Termo = str_replace('"','',$Termo);
        ######
    
        $Campo = self::MetaDados;
        $Tabela = self::TABELA;
        $cpData = self::Data;
        $cpFiltro = self::Slug;
        $SQL = NULL;
        $SQL .= "SELECT * FROM `{$Tabela}` WHERE `{$Campo}` REGEXP ";
        $SQL .= '\'([^"]*)';
        $SQL .= $Termo;
        $SQL .= '([^"]*)\'';
        $SQL .= " AND `{$cpFiltro}` = '{$Filtro}' ";
        $SQL .= "ORDER BY  `{$Tabela}`.`{$cpData}` DESC ";
        //echo $SQL;
        //echo $SQL;
        #Consulta
        $Query = $this->db->query($SQL);
        $R = $Query->result_array();
        if (is_array($R)) {
            $Dados = array();
            foreach ($R as $Reg) {
                $Dados[$Reg[self::ID]] = $Reg;
                $Dados[$Reg[self::ID]][self::MetaDados] = json_decode($Dados[$Reg[self::ID]][self::MetaDados], TRUE);
                $Dados[$Reg[self::ID]][self::Data] = (empty($Dados[$Reg[self::ID]][self::Data])) ? NULL : $this->MakeData($Dados[$Reg[self::ID]][self::Data], TRUE);
            }
            $R = $Dados;
        } else {
            $R = array();
        }

        ###
        return $R;
    }

    public function GetList() {
        $this->db->select(self::ID . ',' . self::Data);
        $Query = $this->db->get(self::TABELA);
        $this->Dados = array();
        foreach ($Query->result_array() as $VAR) {
            $this->Dados[$VAR[self::ID]] = $VAR[self::Data];
        }

        return $this->Dados;
    }

    public function Get($Criterio = NULL) {
        $R = parent::Get($Criterio);
        if (is_array($R)) {
            $Dados = array();
            foreach ($R as $Reg) {
                $Dados[$Reg[self::ID]] = $Reg;
                $Dados[$Reg[self::ID]][self::MetaDados] = json_decode($Dados[$Reg[self::ID]][self::MetaDados], TRUE);
                $Dados[$Reg[self::ID]][self::Data] = (empty($Dados[$Reg[self::ID]][self::Data])) ? NULL : $this->MakeData($Dados[$Reg[self::ID]][self::Data], TRUE);
            }
            $R = $Dados;
        } else {
            $R = array();
        }


        return $R;
    }

    public function Salva($Dados = array(), $Criterio = NULL) {

        #Trata Dados
        if ($Dados[self::MetaDados]) {
            $Dados[self::MetaDados] = json_encode($Dados[self::MetaDados]);
        }

        if ($Dados[self::Data]) {
            $Dados[self::Data] = $this->MakeData($Dados[self::Data]);
        }
        $R = parent::Salva($Dados, $Criterio);

        if (is_null($Criterio)) {
            unset($R);
            $R = $this->Get($Dados);
            $R = end($R);
        }
        return $R;
    }

    public function GetMes($Ano, $Mes, $Vinculo = NULL, $Idioma = 'ES') {
        $Tabela = self::TABELA;
        $Campo = self::Data;
        $campo_vinculo = self::Slug;
        $SQL = "SELECT * FROM {$Tabela} WHERE  YEAR({$Campo}) = {$Ano} AND MONTH({$Campo}) = {$Mes} AND {$campo_vinculo} = '{$Vinculo}'";
        $Query = $this->db->query($SQL);
        $R = $Query->result_array();
        $Dados = array();
        $Pre = array();
        if (!empty($R) && is_array($R)) {
            foreach ($R as $Registro) {
                $Registro[self::MetaDados] = json_decode($Registro[self::MetaDados], TRUE);
                $Registro[self::Data] = $this->MakeData($Registro[self::Data], TRUE);
                $Pre[] = $Registro;
            }
            unset($Registro);
            foreach ($Pre as $Registro) {
                $Dia = explode("/", $Registro[self::Data]);
                $Dia = ($Dia[0][0] == '0') ? $Dia[0][1] : $Dia[0];
                
                if(strlen($Registro[self::MetaDados]['INICIO']['M'])==1){
                    $Min_i = $Registro[self::MetaDados]['INICIO']['M'].'0';
                }else{
                    $Min_i = $Registro[self::MetaDados]['INICIO']['M'];
                }
                
                if(strlen($Registro[self::MetaDados]['FIM']['M'])==1){
                    $Min_f = $Registro[self::MetaDados]['FIM']['M'].'0';
                }else{
                    $Min_f = $Registro[self::MetaDados]['FIM']['M'];
                }
                
                $Dados[] = array(
                    'data' => $Registro[self::Data],
                    'dia' => $Dia,
                    'title' => $Registro[self::MetaDados]['TITLE'],
                    'h_i' => $Registro[self::MetaDados]['INICIO']['H'] . '.' . $Min_i,
                    'h_f' => $Registro[self::MetaDados]['FIM']['H'] . '.' . $Min_f,
                    'foto_1' => (empty($Registro[self::MetaDados]['FOTO'][0])) ? NULL : img(PublicDomain . $Registro[self::MetaDados]['FOTO'][0]),
                    'foto_2' => (empty($Registro[self::MetaDados]['FOTO'][1])) ? NULL : img(PublicDomain . $Registro[self::MetaDados]['FOTO'][1]),
                    'desc' => $Registro[self::MetaDados]['DESC'][$Idioma],
                );
            }
        }
        return $Dados;
    }

    public function GetDestaques($Vinculo = NULL) {
        $Criterio = array();
        $Criterio[self::Destaque] = 'S';
        if (is_string($Vinculo)) {
            $Criterio[self::Slug] = $Vinculo;
        }
        return $this->Get($Criterio);
    }

    //GetBySlug
    private function GetBySlug($Slug) {
        $this->db->where(self::Slug, $Slug);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}