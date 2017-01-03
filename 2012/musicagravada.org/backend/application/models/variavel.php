<?php

class Variavel extends CI_Model {

    private $TABELA = 'variaveis';
    private $Dados = NULL;

    const ID = 'var_id';
    const NOME = 'var_nome';
    const TIPO = 'var_tipo';

    public function Get($Criterio = NULL) {
        $this->Dados = NULL;
        switch ($Criterio) {

            case is_numeric($Criterio):
                $this->GetByID($Criterio);
                break;

            case is_array($Criterio):
                $this->GetByCriterio($Criterio);
                break;
        }
        return $this->Dados;
    }

    public function GetLista($JSON = FALSE, $gTipo = NULL) {
        $ID = self::ID;
        $Tipo = self::NOME;
        
        if (is_string($gTipo)) {
            $this->db->where(self::TIPO, $gTipo);
        }

        $this->db->select("{$ID},{$Tipo}");
        $this->db->order_by(self::NOME, 'asc');
        $Query = $this->db->get($this->TABELA);
        $Lista = $Query->result_array();
        $Retorno = array();
        if ($JSON) {
            foreach ($Lista as $Val) {
                $Retorno[] = array(
                    'ID' => $Val[self::ID],
                    'NOME' => $Val[self::NOME]
                );
            }
        } else {
            foreach ($Lista as $Val) {
                //var_dump($Val);
                $Retorno[$Val[self::ID]] = $Val[self::NOME];
            }
        }

        return $Retorno;
    }

    public function GetAll($Page = 0, $PerPage = 25) {
        $PaginaAtual = $Page * $PerPage;
		$this->db->order_by(self::NOME, "asc"); 
        $Query = $this->db->get($this->TABELA, $PerPage, $PaginaAtual);
        return $Query->result_array();
    }

    public function Save($Dados = NULL, $Criterio = NULL) {
        $Retorno = FALSE;

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

    public function Apagar($Criterio = NULL) {
        $Acao = FALSE;

        if (is_numeric($Criterio)) {
            $this->db->where(self::ID, $Criterio);
            $Acao = TRUE;
        } else if (is_array($Criterio)) {
            $this->db->where($Criterio);
            $Acao = TRUE;
        }

        if ($Acao) {
            $this->db->delete($this->TABELA);
        }
        return $Acao;
    }

    private function GetByID($Criterio) {

        $this->db->where(self::ID, $Criterio);

        $Query = $this->db->get($this->TABELA);

        $this->Dados = $Query->result_array();

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

        if (is_numeric($Criterio)) {
            $this->db->where(self::ID, $Criterio);
            $Acao = TRUE;
        } else if (is_array($Criterio)) {
            $this->db->where($Criterio);
            $Acao = TRUE;
        }

        if ($Acao) {
            $this->db->update($this->TABELA, $Dados);
        }
    }

}

