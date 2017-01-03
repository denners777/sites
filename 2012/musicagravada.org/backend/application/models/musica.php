<?php

class Musica extends CI_Model {

    private $TABELA = 'musica';
    private $Dados = NULL;
    
    const ID 			= 'mus_id';
    const AUTOR 		= 'mus_autor';
    const TITULO 		= 'mus_titulo';
	const OUTROAUT 		= 'mus_out_autor';
    const GENERO 		= 'mus_genero';
    const INTERPRETE 	= 'mus_interprete';
	const OUTROINT 		= 'mus_out_interp';
    const GRAVADORA 	= 'mus_gravadora';
    const NUMERO 		= 'mus_numero';
    const DATA 			= 'mus_data';
    const OBS 			= 'mus_obs';
    const USUARIO 		= 'mus_usu';
    const DATA_CADASTRO = 'mus_datetime';
    const FOTO 			= 'mus_capa';
    const MP3 			= 'mus_mp3';
    const PDF 			= 'mus_pdf';

  
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

    public function GetAll($Page = 0, $PerPage = 25) {
        $PaginaAtual = $Page * $PerPage;
        $this->db->order_by(self::TITULO, "asc"); 
        $Query = $this->db->get($this->TABELA);
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

