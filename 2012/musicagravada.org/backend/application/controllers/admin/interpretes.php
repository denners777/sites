<?php

class Interpretes extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    //Listando Interpretes
    public function index($Pagina = 1) {
        $Pagina--;
        $this->VAR['ListaInterpretes'] = $this->pessoa->GetAll($Pagina);
        $this->ViewLoad('admin/interpretes/lista');
    }

    //Cadastra Interpretes
    public function cadastrar() {
        $POST = $this->input->post(NULL, TRUE);
        //Carrega formulario de cadastro
        if (empty($POST)) {
            $this->ViewLoad('admin/interpretes/interprete_frm_add');
            //Cadastra
        } else {
             if (!empty($POST['pes_nome']) ) {
            $Campos = array(Pessoa::NOME, Pessoa::DESC, Pessoa::FOTO);
            $Dados = elements($Campos, $POST);
            $Dados[Pessoa::USU] = $this->user_info[Usuario::ID];

            $Acao = $this->pessoa->Save($Dados);

            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Interprete cadastrado com sucesso.');
            } else {
                $this->session->set_flashdata('ERRO', 'Interprete não cadastrado.');
            }
            $Interprete = $this->pessoa->Get($Dados);
            if(count($Interprete)==1){
                redirect('admin/interpretes/atualizar/'.$Interprete[0][Pessoa::ID]);
            }else{
                redirect('admin/interpretes');
            }
            
        }else{
            $this->session->set_flashdata('ERRO', '<b>Preença todo o formulario!</b>');
            redirect('admin/interpretes/cadastrar');
        }
        }
    }

    //Listando Interpretes
    public function atualizar($ID = NULL) {

        //ação de atualizar
        $POST = $this->input->post(NULL, TRUE);
        //se a requisição é post
        if (!empty($POST)) {
            //prepara campos e dados
            $Campos = array(Pessoa::NOME, Pessoa::DESC);
            $Dados = elements($Campos, $POST);
            $Dados[Pessoa::USU] = $this->user_info[Usuario::ID];
            //prepara criterio
            settype($POST[Pessoa::ID], 'integer');
            //executa ação no bd
            $Acao = $this->pessoa->Save($Dados, $POST[Pessoa::ID]);

            //verifica se a ação foi cumprida e redireciona
            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Interprete atualizado com sucesso');
            } else {
                $this->session->set_flashdata('ERRO', 'Falha ao atualizar.');
            }
            redirect('admin/interpretes/');
        }
        //ação de visualizar formulário
        //Se ID interprete  é válido
        if (is_numeric($ID)) {
            //pega interprete no bd
            $this->VAR['Interprete'] = $this->pessoa->Get($ID);
            //verifica se o registro existe
            if (count($this->VAR['Interprete']) == 1) {
                //prepara variavel e envia pra view
                $this->VAR['Interprete'] = $this->VAR['Interprete'][0];
                $this->ViewLoad('admin/interpretes/interprete_frm_edit');
            } else {
                //retorna erro e redireciona para lista
                $this->session->set_flashdata('ERRO', 'Interprete não localizado');
                redirect('admin/interpretes/');
            }
        } else {
            //retorna erro e redireciona para lista
            $this->session->set_flashdata('ERRO', 'Interprete inválido');
            redirect('admin/interpretes/');
        }
    }

    public function excluir($ID = NULL) {
        if (is_numeric($ID)) {
            $Acao = $this->pessoa->Apagar($ID);

            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Interprete excluído com sucesso');
            } else {
                $this->session->set_flashdata('ERRO', 'Falha ao excluir.');
            }
            redirect('admin/interpretes/');
        }else{
             $this->session->set_flashdata('ERRO', 'Interprete inválido.');
              redirect('admin/interpretes/');
        }
    }

}

