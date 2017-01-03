<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public $VAR = array();
    public $link = array();
    private $EmailContato = 'denners777@hotmail.com';

    public function __construct() {
        parent::__construct();
        $this->link[] = array('#', 'Legislação de Imigração');
        $this->link[] = array('#', 'Pesquisa CPF');
        $this->link[] = array('#', 'Diário Oficial da União');
        $this->link[] = array('#', 'Pesquisa CBO');
        $this->link[] = array('#', 'GRU Estrangeiro');
        $this->link[] = array('#', 'GRU Brasileiro');
        $this->link[] = array('#', 'Consulados & Embaixadas');
        $this->link[] = array('#', 'Consulta de Processo Junto ao M.T.E');
        $this->link[] = array('#', 'Consulta de Processo Junto ao MJ');
        $this->link[] = array('#', 'Quadro Geral de Regime de Vistos para a Entrada de Estrangeiro no Brasil');

        $this->VAR['URI'] = $this->uri->segment(1);
        $this->VAR['Titulo'] = 'Rio Visas';
        $this->VAR['LINKS'] = $this->link;


        if ($this->session->userdata('Lingua') == 'EN') {
            $this->lang->load('site', 'english');
        } else {
            $this->lang->load('site', 'portugues');
        }
    }

    public function index() {
        $this->load->view('home', $this->VAR);
    }

    public function empresa() {
        $this->VAR['Titulo'] = 'Rio Visas - Empresa';
        $this->load->view('page-empresa', $this->VAR);
    }

    public function servicos() {
        $this->VAR['Titulo'] = 'Rio Visas - Serviços';
        $this->load->view('page-servicos', $this->VAR);
    }

    public function contato() {
        $this->load->helper('form');
        $this->VAR['Titulo'] = 'Rio Visas - Contato';

        $POST = $this->input->post(NULL, TRUE);

        if ($POST) {
            if (!empty($POST['nome']) && !empty($POST['telefone'])) {
                $this->load->library('email');
                /////
                $config['protocol'] = 'mail';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';

                $this->email->initialize($config);
                ////
                $this->email->from('site@conecteestudiodesign.com.br', 'Contato');
                $this->email->to($this->EmailContato);
                $this->email->subject('Contato: ' . $POST['nome']);

                $MSG = NULL;
                $MSG.='<strong>Nome</strong>: ' . $POST['nome'] . '<br>';
                $MSG.='<strong>Telefone</strong>: ' . $POST['telefone'] . '<br>';
                $MSG.='<strong>Como nos achou</strong>: ' . $POST['achou'] . '<br>';
                $MSG.='<strong>Mensagem</strong>:<br> ' . nl2br($POST['msg']) . '<hr>';
                $MSG.=date('d/m/Y H:i:s');

                $this->email->message($MSG);
                $this->email->send();
                $this->session->set_flashdata('OK', '<strong>Mensagem enviada com sucesso!</strong>');
            } else {
                $this->session->set_flashdata('ERRO', '<b>Preença todo o formulario!</b>');
            }
            redirect('contato');
        } else {
            $this->load->view('page-contato', $this->VAR);
        }
    }

    public function idioma($Idioma = 'PTBR', $RET = NULL) {
        $this->session->set_userdata('Lingua', $Idioma);
        redirect($RET);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */