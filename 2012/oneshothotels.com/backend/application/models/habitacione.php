<?php

class Habitacione extends MY_Model {

    const TABELA = 'habitaciones';
    const ID = 'h_ID';
    const Tipo = 'h_Tipo';
    const Slug = 'h_Slug';
    const Ativo = 'h_Ativo';
    const MetaDados = 'h_Dados';
    //Patio / Shot / Balcony / Terrace / Top
    public $TipoDeAbitaciones = array('patio','shot', 'balcony', 'terrace', 'top');
    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
        return $this->GetByVinculo($Criterio);
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
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
        if(is_array($R)){
            return $R;
        }else{
            return array();
        }
        
    }

    //GetBySlug
    private function GetByVinculo($Criterio) {
        $this->db->where(self::Vinculo, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}
