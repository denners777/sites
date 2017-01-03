<?php

class Galeria extends MY_Model {

    const TABELA = 'galerias';
    const ID = 'g_ID';
    const Vinculo = 'g_Vinculo';
    const Slug = 'g_Slug';
    const Habitacione = 'g_Habitaciones';
    const MetaDados = 'g_Dados';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function Get($Criterio = array(), $Prepara = FALSE, $PublicServer = NULL) {
        if (!isset($Criterio[self::Habitacione])) {
            $Criterio[self::Habitacione] = NULL;
        }
        $Galeria = parent::Get($Criterio);
        if ($Prepara && is_array($Galeria)) {
            $G = array();
            foreach ($Galeria as $Reg) {
                $G[$Reg[self::ID]] = $Reg;
                $G[$Reg[self::ID]][self::MetaDados] = json_decode($G[$Reg[self::ID]][self::MetaDados], TRUE);
                $G[$Reg[self::ID]][self::MetaDados]['IMG'] = $PublicServer . $G[$Reg[self::ID]][self::MetaDados]['IMG'];
            }
            unset($Galeria);
            return $G;
        }else if(!is_array($Galeria)){
            $Galeria = array();
        }
        return $Galeria;
    }

    public function GetByString($Criterio) {
        return $this->GetByVinculo($Criterio);
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

    //GetBySlug
    private function GetByVinculo($Criterio) {
        $this->db->where(self::Vinculo, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}
