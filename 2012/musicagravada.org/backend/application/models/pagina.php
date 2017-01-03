<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pagina
 *
 * @author Conecte_Estudio
 */
class Pagina extends CI_Model {

    private $TABELA = 'paginas';
    private $Dados = NULL;

    const ID = 'p_ID';
    const SLUG = 'p_SLUG';
    const DADOS = 'p_DADOS';
	const TITULO = 'p_TITULO';

    public function __construct() {
        parent::__construct();
    }

    ///Pega Registro no Banco de Dados
    public function Get($Criterio = NULL) {
        $this->Dados = NULL;
        switch ($Criterio) {
            //Se for numero pega pelo ID
            case is_numeric($Criterio):
                $this->GetByID($Criterio);
                break;
            //se for array pega por criterio
            case is_array($Criterio):
                $this->GetByCriterio($Criterio);
                break;
            case is_string($Criterio):
                $this->GetBySLUG($Criterio);
                break;
        }
        return $this->Dados;
    }

    public function GetAll($Page = 0, $PerPage = 25) {
        $PaginaAtual = $Page * $PerPage;
        $Query = $this->db->get($this->TABELA, $PerPage, $PaginaAtual);
        return $Query->result_array();
    }

    public function Save($Dados = NULL, $Criterio = NULL) {
        $Retorno = FALSE;
        //Se dados são válidos
        if (is_array($Dados)) {

            if (is_null($Criterio)) {
                $this->Cadastrar($Dados);
                $Retorno = TRUE;
            } else if (is_numeric($Criterio)) {
                $this->Atualiza($Dados, $Criterio);
                $Retorno = TRUE;
            }
        }
        return $Retorno;
    }

   

    private function GetByID($Criterio) {
        //Pega por ID
        $this->db->where(self::ID, $Criterio);
        //Executa Consulta
        $Query = $this->db->get($this->TABELA);
        //Seta dados
        $this->Dados = $Query->result_array();
        //apaga $Query
        unset($Query);
    }

    private function GetBySLUG($Criterio) {
        //Pega por ID
        $this->db->where(self::SLUG, $Criterio);
        //Executa Consulta
        $Query = $this->db->get($this->TABELA);
        //Seta dados
        $this->Dados = $Query->result_array();
        //apaga $Query
        unset($Query);
    }

    private function GetByCriterio($Criterio) {
        $this->db->where($Criterio);
        $Query = $this->db->get($this->TABELA);
        $this->Dados = $Query->result_array();
        unset($Query);
    }

    private function Cadastrar($Dados) {
        $this->db->insert($this->TABELA, $Dados);
    }

    private function Atualiza($Dados, $Criterio) {
        $Acao = FALSE;
        //Atualiza por ID
        if (is_numeric($Criterio)) {
            $this->db->where(self::ID, $Criterio);
            $Acao = TRUE;
            //Atualiza por Criterio
        } else if (is_array($Criterio)) {
            $this->db->where($Criterio);
            $Acao = TRUE;
        }

        if ($Acao) {
            $this->db->update($this->TABELA, $Dados);
        }
    }

}

?>
