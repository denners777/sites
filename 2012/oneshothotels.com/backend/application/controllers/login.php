<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Login
 *
 * @author luiz.vinicius73@gmail.com
 */
class Login extends MY_Controller {
    public $Migalhas = array();
    public $MenuTop = array();
    public $MenuFooter = array();
    public $MetaTags = array();
    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->ViewHeader('comum/head');
        $this->sVAR['SiteTitulo'] = 'OneShot Hotels';
    }

    public function index() {
        $this->ViewAdd('comum/alertas', 'ALERTAS');
        $this->SetPageTitle('Restricted Area!');
        $this->ViewLoad('login');
    }
    
    public function logar() {
        if (!empty($this->POST)) {
            $this->_exeLogar();
        } else {
            $this->session->set_flashdata(SessionERRO, 'Acceso no válido, favor de ingresar!');
            redirect('login');
        }
    }
   

    private function _exeLogar() {
        if (!empty($this->POST[Usuario::Apelido]) && !empty($this->POST[Usuario::Senha])) {
            //Limpa POST
            array_map('trim', $this->POST);
            $this->POST[Usuario::Apelido] = strtolower($this->POST[Usuario::Apelido]);
            //E-Mail  ou usuário
            if (filter_var($this->POST[Usuario::Apelido], FILTER_VALIDATE_EMAIL)) {
                $Usuario = $this->usuario->get(array(Usuario::Email => $this->POST[Usuario::Apelido]));
            } else {
                $Usuario = $this->usuario->get(array(Usuario::Apelido => $this->POST[Usuario::Apelido]));
            }
            //Valida Resultado
            if (count($Usuario) == 1 && $Usuario != FALSE) {
                $Usuario = $Usuario[0];
                $this->load->library('Bcrypt');
                //$Senha = Bcrypt::hash($this->POST[Usuario::Senha]);
                if (Bcrypt::check($this->POST[Usuario::Senha], $Usuario[Usuario::Senha])) {
                    echo $TOKEN = $this->usuario->Logar($Usuario[Usuario::ID]);
                    if ($TOKEN) {
                        $this->session->set_userdata(parent::vSessionUser, $TOKEN);
                        $this->session->set_flashdata(SessionSUCESSO, '¡Bienvenidos!');
                        redirect('admin');
                    } else {
                        $this->session->set_flashdata(SessionALERTA, 'Hubo un error al intentar de nuevo!');
                    }
                } else {
                    $this->session->set_flashdata(SessionERRO, 'Contraseña no válida!');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata(SessionALERTA, 'No válido Usuario!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(SessionALERTA, 'Rellene el formulario correctamente!');
            redirect('login');
        }
    }
    
    
    /*public function buscaeventos($Cidade = NULL){
        if(empty($this->POST) or is_null($Cidade)){
            show_404();
        }else{
            //$Hotel = $this->POST['hotel'];
            //$Cidade = $this->POST['cidade'];
            $Termo = $this->POST['termo'];
            redirect("{$Cidade}/busca/{$Termo}")
        }
    }*/
}