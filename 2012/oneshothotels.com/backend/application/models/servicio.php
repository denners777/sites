<?php

class Servicio extends MY_Model {

    const TABELA = 'servicios';
    const ID = 's_ID';
    const Tipo = 's_Tipo';
    const Slug = 's_Slug';
    const Ativo = 's_Ativo';
    const MetaDados = 's_Dados';

    public $TipoDeServicios = array('snacking', 'bicicletas','transporte','living', 'beauty','lavanderia');
    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
        return $this->GetByVinculo($Criterio);
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        
        if(isset($Dados[self::MetaDados])){
            $Dados[self::MetaDados] = json_encode($Dados[self::MetaDados]);
        }
        
        //Pega Meta Data
        $Antiga = $this->Get($Criterio);
        //Ve se ela não existe
        if (empty($Antiga)) {
            return parent::Salva($Dados);
            //Se exixte cadastra
        } else {
            return parent::Salva($Dados, $Criterio);
        }
    }

    public function Deleta($ID = NULL) {
        if (is_numeric($ID)) {
            $this->db->where(self::ID, $ID);
            $this->db->delete(self::TABELA);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function GetByHotel($Hotel = NULL, $Tratar = FALSE, $Ativos = NULL) {
        $R = array();
        if (is_string($Hotel)) {
            $Criterio = array();
            $Criterio[self::Slug] = $Hotel;
            if (is_bool($Ativos)) {
                $Criterio[self::Ativo] = ($Ativos) ? 'S' : 'N';
            }
            $PRE = $this->Get($Criterio);
            if ($Tratar && is_array($PRE)) {
                foreach ($PRE as $HAB) {
                    $R[$HAB[self::Tipo]] = $HAB;
                    $R[$HAB[self::Tipo]][self::MetaDados] = json_decode($HAB[self::MetaDados], TRUE);
                }
            } else {
                $R = $PRE;
                unset($PRE);
            }
        }
        return $R;
    }

    //GetBySlug
    private function GetByVinculo($Criterio) {
        $this->db->where(self::Vinculo, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}
