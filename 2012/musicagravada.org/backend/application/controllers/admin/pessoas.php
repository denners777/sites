<?php

class Pessoas extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('admin');
    }

    public function cadastrar($tipo = NULL) {
        if ($tipo == 'autor') {

            $Nome = $this->input->get('dados');
            if (is_string($Nome)) {
                $Dados[Pessoa::NOME] = $Nome;
                $Dados[Pessoa::USU] = $this->user_info[Usuario::ID];
                $this->pessoa->Save($Dados);

                $Lista = $this->pessoa->GetLista(TRUE);

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

}