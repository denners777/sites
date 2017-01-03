<?php

class Variaveis extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->VAR['ListaGenero'] = $this->variavel->GetLista(FALSE, 'genero');
        asort($this->VAR['ListaGenero']);

        $this->VAR['ListaGravadora'] = $this->variavel->GetLista(FALSE, 'gravadora');
       
        asort($this->VAR['ListaGravadora']);
        $this->ViewLoad('admin/variaveis/lista');
    }

    public function cadastrar($tipo = NULL) {
        if ($tipo == 'genero' || $tipo == 'gravadora') {

            $Nome = $this->input->get('dados');
            if (is_string($Nome)) {
                $Dados[Variavel::NOME] = $Nome;
                $Dados[Variavel::TIPO] = $tipo;
                $this->variavel->Save($Dados);

                $Lista = $this->variavel->GetLista(TRUE, $tipo);

                echo json_encode($Lista);
            } else {
                $this->session->set_flashdata('ERRO', 'Requisição inválida.');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('ERRO', 'Requisição inválida.');
            redirect('admin');
        }
    }

    public function atualizar($ID = NULL) {

        $POST = $this->input->post('NOME', TRUE);

        if (is_string($POST) && is_numeric($ID)) {

            $Dados[Variavel::NOME] = $POST;

            settype($ID, 'integer');

            $Acao = $this->variavel->Save($Dados, $ID);
            echo $POST;

        }else{
            echo "ERROR";
        }

    }
	
	public function excluir($ID = NULL) {
        if (is_numeric($ID)) {
            $Acao = $this->variavel->Apagar($ID);

            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Ítem excluído com sucesso');
            } else {
                $this->session->set_flashdata('ERRO', 'Falha ao excluir.');
            }
            redirect('admin/variaveis/');
        } else {
            $this->session->set_flashdata('ERRO', 'Ítem inválido.');
            redirect('admin/variaveis/');
        }
    }

}