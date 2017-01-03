<?php

/**
 * Description of MY_Model
 *
 * @author Conecte_Estudio
 */
class MY_Model extends CI_Model {

    private $Class = NULL;
    protected $Dados = NULL;

    public function __construct() {
        parent::__construct();
        $this->GetClass();
    }

    //Verifica Tipo de Váriavel
    public function GetTipo($VAR = NULL) {
        $R = NULL;
        //Se váriavel é do Tipo Numerica
        if (is_numeric($VAR)) {
            $R = 'integer';
            //Se não Encontre
        } else {
           $R = gettype($VAR);
        }
        return $R;
    }

    public function Get($Criterio = NULL) {
        $Retorno = FALSE;
        switch ($this->GetTipo($Criterio)) {
            //Caso seja um array busca via criterio
            case 'array':
                $this->Dados = $this->GetByCriterio($Criterio);
                break;
            //Caso seja um numero pega pelo ID
            case 'integer':
                $this->Dados = $this->GetByID($Criterio);
                break;
            case 'string':
                $this->Dados = $this->GetByString($Criterio);
                break;
            case 'NULL':
                $this->Dados = $this->GetAll(TRUE);
                break;
        }
        //Se n'ao estiverem vazios
        if (!empty($this->Dados)) {
            $Retorno = $this->Dados;
            unset($this->Dados);
        }

        return $Retorno;
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $R = FALSE;
        if (is_array($Dados) && !empty($Dados)) {
            if (!is_null($Criterio) && !empty($Criterio)) {
                $R = $this->Atualiza($Dados, $Criterio);
            } else {
                $this->db->insert($Class::TABELA, $Dados);
                $R = TRUE;
            }
        }
        return $R;
    }

    public function GetAll($Page = 0) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $Retorno = NULL;
        if ($Page == TRUE) {
            $Query = $this->db->get($Class::TABELA);
            $Retorno = $Query->result_array();
        }
        return $Retorno;
    }

    //GetByCriterio
    private function GetByCriterio($Criterio = NULL) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $this->db->where($Criterio);
        $Query = $this->db->get($Class::TABELA);
        return $Query->result_array();
    }

    //GetByID
    private function GetByID($ID) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $this->db->where($Class::ID, $ID);
        $Query = $this->db->get($Class::TABELA);
        return $Query->result_array();
    }

    //Atualiza
    private function Atualiza($Dados = array(), $Criterio = NULL) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $ERRO = FALSE;
        //Determina Filtro
        switch ($this->GetTipo($Criterio)) {
            case 'integer':
                $this->db->where($Class::ID, $Criterio);
                break;
            case 'array':
                $this->db->where($Criterio);
                break;
            case 'string':
                $this->db->where($Class::Slug, $Criterio);
                break;
            default :
                $ERRO = TRUE;
                break;
        }
        //Valida ERRO
        if (!$ERRO) {
            $this->db->update($Class::TABELA, $Dados);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function DELETAR_REGISTRO($Criterio = NULL) {
        //PEGA CLASSE ATUAL
        $Class = $this->GetClass();
        //----
        $ERRO = FALSE;
        //Determina Filtro
        switch ($this->GetTipo($Criterio)) {
            case 'integer':
                $this->db->where($Class::ID, $Criterio);
                break;
            case 'array':
                $this->db->where($Criterio);
                break;
            case 'string':
                $this->db->where($Class::Slug, $Criterio);
                break;
            default :
                $ERRO = TRUE;
                break;
        }
        //Valida ERRO
        if (!$ERRO) {
            $this->db->delete($Class::TABELA, $Dados);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function GetClass() {
        if (is_null($this->Class)) {
            $this->Class = get_class($this);
        }
        return $this->Class;
    }

    public function MakeData($Data = NULL, $Invert = FALSE) {
        if (is_string($Data)) {
            if ($Invert) {
                $Data = implode("/", array_reverse(explode("-", $Data)));
            } else {
                $Data = implode("-", array_reverse(explode("/", $Data)));
            }
        }
        return $Data;
    }

}

