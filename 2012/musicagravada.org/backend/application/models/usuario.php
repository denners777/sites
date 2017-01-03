<?php

/**
 * Description of newPHPClass
 *
 * @author denner2
 */
class Usuario extends CI_Model {

    const TABELA = 'usuarios';
    const ID = 'usu_id';
    const NOME = 'usu_nome';
    const EMAIL = 'usu_email';
    const SENHA = 'usu_senha';
    const ACESSO = 'usu_ult_acesso';
    const IP = 'usu_ult_ip';
    const TOKEN = 'usu_token';
    private $Dados = NULL;

    public function Get($Criterio = NULL) {
        switch ($Criterio) {
            case is_numeric($Criterio):
                $this->GetByID($Criterio);
                break;

            case filter_var($Criterio, FILTER_VALIDATE_EMAIL):
                $this->GetByEMAIL($EMAIL);
                break;

            case is_string($Criterio):
                $this->GetByTOKEN($Criterio);
                break;

            case is_array($Criterio):
                $this->GetByCriterio($Criterio);
                break;
        }
       return $this->Dados;
    }

    public function setToken($ID = NULL) {
        if (is_numeric($ID)) {
            $this->db->where(self::ID, $ID);
            $TOKEN[self::TOKEN] = md5(mktime() . $ID);
            $this->db->update(self::TABELA, $TOKEN);
        }
        return $TOKEN[self::TOKEN];
    }

    private function GetByID($ID) {
        $this->db->where(self::ID, $ID);
        $Query = $this->db->get(self::TABELA);
        $this->Dados =  $Query->result_array();
    }

    private function GetByTOKEN($TOKEN) {
        $this->db->where(self::TOKEN, $TOKEN);
        $Query = $this->db->get(self::TABELA);
        $this->Dados =  $Query->result_array();
    }

    private function GetByEMAIL($EMAIL) {
        $this->db->where(self::EMAIL, $EMAIL);
        $Query = $this->db->get(self::TABELA);
        $this->Dados =  $Query->result_array();
    }

    private function GetByCriterio($Criterio) {
        $this->db->where($Criterio);
        $Query = $this->db->get(self::TABELA);
        $this->Dados =  $Query->result_array();
    }

}

?>
