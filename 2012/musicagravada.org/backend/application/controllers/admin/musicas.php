<?php

class Musicas extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($Pagina = 1) {
        $this->load->helper('ajudantes');
        $Pagina--;
        $this->VAR['ListaMusicas'] = $this->musica->GetAll($Pagina);
        $this->ViewLoad('admin/musicas/lista');
    }

    public function cadastrar() {
        $POST = $this->input->post(NULL, TRUE);

        if (empty($POST)) {
            $this->VAR['ListaPessoas'] = $this->pessoa->GetLista();
            $this->VAR['ListaPessoas'] [0] = NULL;
            asort($this->VAR['ListaPessoas']);

            $this->VAR['ListaGenero'] = $this->variavel->GetLista(FALSE, 'genero');
            $this->VAR['ListaGenero'] [0] = NULL;
            asort($this->VAR['ListaGenero']);

            $this->VAR['ListaGravadora'] = $this->variavel->GetLista(FALSE, 'gravadora');
            $this->VAR['ListaGravadora'] [0] = NULL;
            asort($this->VAR['ListaGravadora']);

            $this->ViewLoad('admin/musicas/musica_frm_add');
        } else {
            if (!empty($POST[Musica::TITULO]) && !empty($POST[Musica::AUTOR]) && !empty($POST[Musica::INTERPRETE]) && !empty($POST[Musica::GRAVADORA]) && !empty($POST[Musica::GENERO])) {
                
                $POST[Musica::DATA] = $this->MakeData($POST[Musica::DATA]);
                
                $Campos = array(Musica::TITULO, Musica::AUTOR, Musica::OUTROAUT, Musica::DATA,  Musica::GENERO, Musica::GRAVADORA, Musica::INTERPRETE, Musica::OUTROINT, Musica::NUMERO, Musica::OBS);
                $Dados = elements($Campos, $POST);
                $Dados[Musica::USUARIO] = $this->user_info[Usuario::ID];

                $Acao = $this->musica->Save($Dados);

                if ($Acao) {
                    $this->session->set_flashdata('SUCESSO', 'Discografia cadastrada com sucesso.');
                } else {
                    $this->session->set_flashdata('ERRO', 'Discografia não cadastrada.');
                }
                $Musica = $this->musica->Get($Dados);
            if(count($Musica)==1){
                redirect('admin/musicas/atualizar/'.$Musica[0][Musica::ID]);
            }else{
                redirect('admin/musicas');
            }
            } else {
                $this->session->set_flashdata('ERRO', '<b>Preença todo o formulário!</b>');
                redirect('admin/musicas/cadastrar');
            }
        }
    }

    public function atualizar($ID = NULL) {


        $POST = $this->input->post(NULL, TRUE);

        if (!empty($POST)) {
            
            //$POST[Musica::DATA] = $this->MakeData($POST[Musica::DATA]);
            
            $Campos = array(Musica::TITULO, Musica::AUTOR, Musica::OUTROAUT, Musica::DATA,  Musica::GENERO, Musica::GRAVADORA, Musica::INTERPRETE, Musica::OUTROINT, Musica::NUMERO, Musica::OBS);
            $Dados = elements($Campos, $POST);
            $Dados[Musica::USUARIO] = $this->user_info[Usuario::ID];

            settype($POST[Musica::ID], 'integer');

            //  print_r($Dados);
            $Acao = $this->musica->Save($Dados, $POST[Musica::ID]);


            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Discografia atualizada com sucesso');
            } else {
                $this->session->set_flashdata('ERRO', 'Falha ao atualizar.');
            }
            redirect('admin/musicas/');
        } else

        if (is_numeric($ID)) {

            $this->VAR['Musica'] = $this->musica->Get($ID);
            
            $this->VAR['ListaPessoas'] = $this->pessoa->GetLista();
            $this->VAR['ListaGenero'] = $this->variavel->GetLista(FALSE, 'genero');
            $this->VAR['ListaGravadora'] = $this->variavel->GetLista(FALSE, 'gravadora');

            if (count($this->VAR['Musica']) == 1) {

                $this->VAR['Musica'] = $this->VAR['Musica'][0];
                //$this->VAR['Musica'] [Musica::DATA] = date('d/m/Y',  strtotime($this->VAR['Musica'] [Musica::DATA] ));
                $this->ViewLoad('admin/musicas/musica_frm_edit');
            } else {

                $this->session->set_flashdata('ERRO', 'Discografia não localizada');
                redirect('admin/musicas/');
            }
        } else {

            $this->session->set_flashdata('ERRO', 'Discografia inválida');
            redirect('admin/musicas/');
        }
    }

    public function excluir($ID = NULL) {
        if (is_numeric($ID)) {
            $Acao = $this->musica->Apagar($ID);

            if ($Acao) {
                $this->session->set_flashdata('SUCESSO', 'Discografia excluída com sucesso');
            } else {
                $this->session->set_flashdata('ERRO', 'Falha ao excluir.');
            }
            redirect('admin/musicas/');
        } else {
            $this->session->set_flashdata('ERRO', 'Discografia inválida.');
            redirect('admin/musicas/');
        }
    }

}
