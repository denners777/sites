<?php

class Hotel extends MY_Model {

    const TABELA = 'hoteis';
    const ID = 'h_ID';
    const Cidade = 'h_Cidade';
    const Nome = 'h_Nome';
    const Slug = 'h_Slug';
    const MetaDados = 'h_MetaDados';
    const Status = 'h_Status';

    //protected $TABELA, $ID, $Slug, $MetaDados, $Nome, $Cidade;
    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
        return $this->GetBySlug($Criterio);
    }

    public function GetLista($Criterio = NULL) {
        $Lista = array();
        $Cidades = parent::Get($Criterio);
        if (is_array($Cidades)) {
            foreach ($Cidades as $Dados) {
                $Lista[$Dados[self::Slug]] = $Dados;
                $Lista[$Dados[self::Slug]][self::MetaDados] = json_decode($Lista[$Dados[self::Slug]][self::MetaDados],TRUE);
            }
        }
        return $Lista;
    }

    //GetByMD5
    private function GetBySlug($Criterio) {
        $this->db->where(self::Slug, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

}