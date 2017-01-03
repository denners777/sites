<?php

class Legale extends MY_Model {

    const TABELA = 'legales';
    const ID = 'le_ID';
    const Nome = 'le_Nome';
    const Valor = 'le_Valor';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetList() {
        $Lista = $this->db->get(self::TABELA);
        $this->Dados = array();
        foreach ($Lista->result_array() as $Dados) {
            $this->Dados[$Dados[self::ID]] = $Dados;
            $this->Dados[$Dados[self::ID]][self::Nome] = json_decode($Dados[self::Nome], TRUE);
            $this->Dados[$Dados[self::ID]][self::Valor] = json_decode($Dados[self::Valor], TRUE);
        }
        return $this->Dados;
    }

    public function Deletar($ID = NULL) {
        if (is_numeric($ID)) {
            $this->db->where(self::ID, $ID);
            $this->db->delete(self::TABELA);
        }
    }

}