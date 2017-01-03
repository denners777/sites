<?php

class Faq extends MY_Model {

    const TABELA = 'faq';
    const ID = 'f_ID';
    const Pergunta = 'f_Pergunta';
    const Resposta = 'f_Resposta';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetList() {
        $Lista = $this->db->get(self::TABELA);
        $this->Dados = array();
        foreach ($Lista->result_array() as $Dados) {
            $this->Dados[$Dados[self::ID]] = $Dados;
            $this->Dados[$Dados[self::ID]][self::Pergunta] = json_decode($Dados[self::Pergunta], TRUE);
            $this->Dados[$Dados[self::ID]][self::Resposta] = json_decode($Dados[self::Resposta], TRUE);
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