<?php

class Usuario extends MY_Model {

    const TABELA = 'usuarios';
    const ID = 'u_ID';
    const Nome = 'u_Nome';
    const Apelido = 'u_Apelido';
    const Email = 'u_Email';
    const Senha = 'u_Senha';
    const TOKEN = 'u_Token';
    const Online = 'c_Online';
    const IP = 'u_LastIP';
    const LastActiv = 'u_LastAction';
    const PERFIL = 'c_Perfil';
    const LastURL = 'c_LastURL';

    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function GetByString($Criterio) {
       return  $this->GetByTOKEN($Criterio);
    }

    public function Logar($UserID = NULL) {
        if (is_numeric($UserID)) {
            $Dados = array();
            $Dados[self::IP] = $this->input->ip_address();
            $Dados[self::LastActiv] = date('Y-m-d H:i:s');
            $Dados[self::LastURL] = $this->uri->ruri_string();
            $Dados[self::Online] = 'S';
            $Dados[self::TOKEN] = md5(mktime() . $UserID);
            $this->db->where(self::ID, $UserID);
            $this->db->update(self::TABELA, $Dados);
            return $Dados[self::TOKEN];
        } else {
            return FALSE;
        }
    }

    public function Logof($Criterio = NULL) {
        if (!is_null($Criterio)) {
            $this->DefineCriterio($Criterio);
            $Dados[self::Online] = 'N';
            $Dados[self::TOKEN] = NULL;
            return $this->db->update(self::TABELA, $Dados);
        } else {
            return FALSE;
        }
    }

    //GetByEmail
    private function GetByEmail($Email) {
        $this->db->where(self::Email, $Email);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

    //GetByMD5
    private function GetByTOKEN($Criterio) {
        $this->db->where(self::TOKEN, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

    private function DefineCriterio($Criterio) {
        switch ($this->GetTipo($Criterio)) {
            case 'array':
                $this->db->where($Criterio);
                break;
            case 'integer':
                $this->db->where(self::ID, $Criterio);
                break;
            case 'string':
                $this->db->where(self::TOKEN, $Criterio);
                break;
        }
    }

}