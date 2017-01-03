<?php

class Cidade extends MY_Model {

    const TABELA = 'cidades';
    const ID = 'c_ID';
    const Nome = 'c_Nome';
    const Slug = 'c_Slug';
    const MetaDados = 'c_MetaDados';
    const Status = 'c_Status';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
        return $this->GetBySlug($Criterio);
    }

    public function GetList() {
        $this->db->select(self::ID . ',' . self::Nome);
        $Query = $this->db->get(self::TABELA);
        $this->Dados = array();
        foreach ($Query->result_array() as $VAR) {
            $this->Dados[$VAR[self::ID]] = $VAR[self::Nome];
        }

        return $this->Dados;
    }

    //GetBySlug
    private function GetBySlug($Slug) {
        $this->db->where(self::Slug, $Slug);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}