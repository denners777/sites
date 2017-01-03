<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    const session_usu = 'Token';

    public $VAR = array();
    protected $user_info = array();
    protected $setView = array('HEADER' => 'admin/commom/header', 'FOOTER' => 'admin/commom/footer', 'PAGE' => NULL);
    protected $POST = NULL;

    public function __construct() {
        parent::__construct();
        $this->VAR['URI'] = $this->uri->segment_array();
        if (@$this->VAR['URI'][1] != 'login' && @$this->VAR['URI'][1] == 'admin') {
            $this->set_user_info();
            
            $TopLinks = array();
            $TopLinks[] = array(
                'slug' => '',
                'label' => 'Discografia'
            );
            $TopLinks[] = array(
                'slug' => 'interpretes',
                'label' => 'Interpretes'
            );
            $TopLinks[] = array(
                'slug' => 'variaveis',
                'label' => 'Genero/Gravadora'
            );
            $this->VAR['TopLinks'] = $TopLinks;
            
        }

        $this->VAR['ERRO'] = $this->session->flashdata('ERRO');
        $this->VAR['INFO'] = $this->session->flashdata('INFO');
        $this->VAR['SUCESSO'] = $this->session->flashdata('SUCESSO');

        $this->ViewAdd('admin/commom/alert', 'Alertas');
        
        $this->POST = $this->input->post(NULL,TRUE);
    }

    private function set_user_info() {

        $token = $this->session->userdata(self::session_usu);
        if ($token) {
            $this->user_info = $this->usuario->Get($token);

            if (empty($this->user_info)) {
                redirect('login');
            } else {
                $this->user_info = $this->user_info[0];
                $this->VAR['user'] = $this->user_info;
            }
        } else {
            redirect('login');
        }
    }

    /* Visualização */

    //Adiciona View Extra
    public function ViewAdd($View = NULL, $Nome = NULL) {
        $this->ViewSet($View, $Nome, TRUE);
    }

    //Determina Header
    public function ViewHeader($View = NULL) {
        $this->ViewSet($View, 'HEADER');
    }

    //Determina Footer
    public function ViewFooter($View = NULL) {
        $this->ViewSet($View, 'FOOTER');
    }

    //Determina Pagina Principal
    public function ViewPage($View = NULL) {
        $this->ViewSet($View, 'PAGE');
    }

    //Cadastra as Views
    private function ViewSet($View, $Nome, $Add = FALSE) {
        if (is_string($View) && is_string($Nome)) {
            if ($Add) {
                $this->setView['Add'][$Nome] = $View;
            } else {
                $this->setView[$Nome] = $View;
            }
        }
    }

    //Carrega a View
    public function ViewLoad($setPAGE = NULL) {
        //Define Pagina Principal
        $PAGE = (is_string($setPAGE)) ? $setPAGE : $this->setView['PAGE'];
        //Se Pagina estiver Definida
        if (!empty($PAGE)) {
            $sVAR = $this->VAR;
            $sVAR['HEADER'] = $this->load->view($this->setView['HEADER'], $this->VAR, TRUE);
            $sVAR['FOOTER'] = $this->load->view($this->setView['FOOTER'], $this->VAR, TRUE);
            //Views Adicionais
            if (isset($this->setView['Add'])) {
                foreach ($this->setView['Add'] as $Nome => $Valor) {
                    $sVAR[$Nome] = $this->load->view($Valor, $this->VAR, TRUE);
                }
            }
            unset($this->VAR);
            $this->load->view($PAGE, $sVAR);
        } else {
            show_404();
        }
    }
    
    public function MakeData($Data = NULL){
        if(is_string($Data)){
          $Data =  implode("-",array_reverse(explode("/",$Data)));
        }
        return $Data;
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */