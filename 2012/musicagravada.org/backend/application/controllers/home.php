<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    private $EmailContato = 'contato@musicagravada.org';

    function __construct() {
        parent::__construct();
        $this->ViewHeader('site/commom/header');
        $this->ViewFooter('site/commom/footer');

        $this->VAR['URI'] = $this->uri->segment(1);
        $this->VAR['Titulo'] = 'Projeto Musica Gravada';

        if ($this->session->userdata('Lingua') == 'EN') {
            $this->lang->load('site', 'english');
        } else {
            $this->lang->load('site', 'portugues');
        }
    }

    public function index() {
        $this->_GetIdioma('home');
        $this->ViewLoad('site/projeto');
    }

    public function atividades() {
		$this->_GetIdioma('atividades');
        $this->VAR['Titulo'] = 'Atividades - Projeto Musica Gravada';
        $this->ViewLoad('site/atividades');
    }

    public function contato() {
        $this->load->helper('form');
        $this->VAR['Titulo'] = 'Contato - Projeto Musica Gravada';


        $POST = $this->input->post(NULL, TRUE);

        if ($POST) {
            if (!empty($POST['nome']) && filter_var(@$POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->load->library('email');

                $config['protocol'] = 'mail';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';

                $this->email->initialize($config);

                $this->email->from('site@musicagravada.org', 'Contato');
                $this->email->to($this->EmailContato);
                $this->email->subject('Assunto: ' . $POST['assunto']);

                $MSG = NULL;
                $MSG.='<strong>Nome</strong>: ' . $POST['nome'] . '<br>';
                $MSG.='<strong>Email</strong>: ' . $POST['email'] . '<br>';
                $MSG.='<strong>Assunto</strong>: ' . $POST['assunto'] . '<br>';
                $MSG.='<strong>Mensagem</strong>:<br> ' . nl2br($POST['msg']) . '<hr>';
                $MSG.=date('d/m/Y H:i:s');

                $this->email->message($MSG);
                $this->email->send();
                $this->session->set_flashdata('OK', '<strong>Mensagem enviada com sucesso!</strong>');
            } else {
                $this->session->set_flashdata('ERRO', '<b>Preencha corretamente o formulario!</b>');
            }
            redirect('contato');
        } else {
            $this->ViewLoad('site/contato');
        }
    }

    public function discografia($ITEM = NULL) {
        if (is_numeric($ITEM)) {
            $this->load->helper('ajudantes');
            $this->VAR['Musicas'] = $this->musica->get(array(Musica::INTERPRETE => $ITEM));
            $this->VAR['Titulo'] = 'Discografia - Projeto Musica Gravada';
            $this->ViewLoad('site/discografia_item');
        } else {
            $this->VAR['ListaInterpretes'] = $this->pessoa->GetInterpretes();
            $this->VAR['Titulo'] = 'Discografia - Projeto Musica Gravada';
            $this->ViewLoad('site/discografia');
        }
    }

    public function equipe() {
		$this->_GetIdioma('equipe');
        $this->VAR['Titulo'] = 'Equipe - Projeto Musica Gravada';
        $this->ViewLoad('site/equipe');
    }

    public function resumo() {
		$this->_GetIdioma('resumo');
        $this->VAR['Titulo'] = 'Resumo - Projeto Musica Gravada';
        $this->ViewLoad('site/resumo');
    }

    public function login() {
        $VAR = $this->VAR;
        $VAR['HEADER'] = $this->load->view('admin/commom/header_login', $this->VAR, TRUE);
        $VAR['FOOTER'] = $this->load->view('admin/commom/footer', $this->VAR, TRUE);

        $POST = $this->input->post(NULL, TRUE);

        if ($POST) {
            if (filter_var($POST['login'], FILTER_VALIDATE_EMAIL) && !empty($POST['senha'])) {

                $Criterio = array(Usuario::EMAIL => $POST['login'], Usuario::SENHA => md5($POST['senha']));
                $usuario = $this->usuario->Get($Criterio);

                if (empty($usuario)) {
                    $this->session->set_flashdata('ERRO', '<b>Digite seu Login e Senha</b>');
                    redirect('login');
                } else {
                    $token = $this->usuario->setToken($usuario[0][Usuario::ID]);
                    $this->session->set_userdata(parent::session_usu, $token);
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('ERRO', '<b>Digite seu Login e Senha</b>');
                redirect('login');
            }
        } else {
            $this->load->view('admin/login', $VAR);
        }
    }

    public function logoff() {
        $this->session->sess_destroy();
        redirect();
    }

    public function idioma($Idioma = 'PTBR', $RET = NULL) {
        $this->session->set_userdata('Lingua', $Idioma);
        redirect($RET);
    }

    public function getmusica($Musica = NULL) {
        if (is_numeric($Musica)) {
            $getMusica = $this->musica->get($Musica);
            if (count($getMusica) == 1) {
                $this->load->helper('ajudantes');
                $this->VAR['Musica'] = $getMusica[0];
                $this->ViewLoad('site/musicamodal');
            }
        }
    }

    private function _GetIdioma($SLUG) {
        $DadosPagina = $this->pagina->Get($SLUG);
        $DadosPagina = $DadosPagina[0];
        $DadosPagina['IDIOMAS'] = json_decode($DadosPagina[Pagina::DADOS], TRUE);

        if ($this->session->userdata('Lingua') == 'EN') {
            $TESTO = (isset($DadosPagina['IDIOMAS']['ENUS'])) ? $DadosPagina['IDIOMAS']['ENUS'] : NULL;
        } else {
            $TESTO = (isset($DadosPagina['IDIOMAS']['PTBR'])) ? $DadosPagina['IDIOMAS']['PTBR'] : NULL;
        }
        
        $this->VAR['TESTO'] = $TESTO;
        unset($DadosPagina,$TESTO);
    }

}