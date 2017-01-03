<?php

class Pessoa extends CI_Model {

    private $TABELA = 'pessoas';
    private $Dados = NULL;

    const ID = 'pes_id';
    const NOME = 'pes_nome';
    const DESC = 'pes_desc';
    const FOTO = 'pes_foto';
    const USU = 'pes_usu';

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
        }
        return $this->Dados;
    }

    public function GetLista($JSON = FALSE) {
        $ID = self::ID;
        $Nome = self::NOME;
        $this->db->select("{$ID},{$Nome}");
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
                $Retorno[$Val[self::ID]] = $Val[self::NOME];
            }
        }
       // print_r($Retorno);
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

    public function Apagar($Criterio = NULL) {
        $Acao = FALSE;
        //Deleta por ID
        if (is_numeric($Criterio)) {
            $this->db->where(self::ID, $Criterio);
            $Acao = TRUE;
            //Deleta por Criterio
        } else if (is_array($Criterio)) {
            $this->db->where($Criterio);
            $Acao = TRUE;
        }

        if ($Acao) {
            $this->db->delete($this->TABELA);
        }
        return $Acao;
    }
    
    public function GetInterpretes(){
        $SQL = 'SELECT * FROM pessoas, musica where pes_id = mus_interprete GROUP BY `mus_interprete`';
        $Query = $this->db->query($SQL);
        return $Query->result_array();
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