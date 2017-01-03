<?php

/**
 * Description of usuarios
 *
 * @author luiz.vinicius73@gmail.com
 */
class Usuarios extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->library('Bcrypt');
    }

    public function index() {
        $this->_BloqueiaUser();
        $this->sVAR['LISTAUSUARIOS'] = $this->usuario->Get(NULL);
        $this->SetPageTitle('Usuários');
        $this->ViewLoad('usuarios/inicio');
    }

    public function cadastro() {
        $this->_BloqueiaUser();
        if (empty($this->POST)) {
            $this->ReqInvalida('admin/usuarios');
        } else {
            $Dados = elements(array(Usuario::Apelido, Usuario::Email, Usuario::Nome, Usuario::PERFIL), $this->POST, NULL);
            $Dados[Usuario::Email] = strtolower($Dados[Usuario::Email]);
            //Cria Senha
            $Senha = Bcrypt::generateRandomString();
            $Dados[Usuario::Senha] = Bcrypt::hash($Senha);
            if (filter_var($Dados[Usuario::Email], FILTER_VALIDATE_EMAIL)) {
                //Salva
                $this->usuario->Salva($Dados);
                #EMAIL
                #MSG
                $MSG = NULL;
                $MSG.='Hola ' . $Dados[Usuario::Nome] . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='Su sistema de datos de acceso.' . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='<b>E-Mail:</b> ' . $Dados[Usuario::Email] . PHP_EOL;
                $MSG.='<b>Usuario:</b> ' . $Dados[Usuario::Apelido] . PHP_EOL;
                $MSG.='<b>Contraseña:</b> ' . $Senha . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.= 'Enlace de acceso.' . PHP_EOL;
                $MSG.= anchor('admin') . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='<b>Registrado por:</b> ' . $this->UsuarioAtual[Usuario::Nome] . '-' . $this->UsuarioAtual[Usuario::Email] . '-' . PHP_EOL;
                $MSG = nl2br($MSG);
                #Envia
                $this->_Notifica($Dados[Usuario::Email], 'Su nombre de usuario y contraseña', $MSG);
                #
                $this->session->set_flashdata(SessionSUCESSO, 'Usuario registrado con éxito.');
                $this->session->set_flashdata(SessionINFO, 'Se envió un mensaje a la dirección de correo electrónico del usuario. Revise la caja de SPAM.');
            } else {
                $this->session->set_flashdata(SessionERRO, 'Correo electrónico no es válido');
            }
            redirect('admin/usuarios');
        }
    }

    public function profile($ID = NULL) {
        #Pega Usuário
        if (is_numeric($ID)) {
            if ($ID != $this->UsuarioAtual[Usuario::ID]) {
                $this->_BloqueiaUser();
            }

            $this->sVAR['DadosUser'] = $this->usuario->Get($ID);
        } else {
            $this->sVAR['DadosUser'] = $this->usuario->Get($this->UsuarioAtual[Usuario::ID]);
        }
        #Valida Usuário
        if (empty($this->sVAR['DadosUser'])) {
            $this->session->set_flashdata(SessionALERTA, 'Usuario inexistente.');
            redirect('admin');
        } else {
            $this->sVAR['DadosUser'] = end($this->sVAR['DadosUser']);
        }

        $this->SetPageTitle('Usuário: ' . $this->sVAR['DadosUser'][Usuario::Nome]);
        $this->ViewLoad('usuarios/profile');
    }

    public function atualizar() {
        #Valida post
        if (empty($this->POST)) {
            $this->ReqInvalida('admin');
        } else {
            #Filtra Dados do Post
            $Dados = elements(array(Usuario::Nome), $this->POST, NULL);
            #Verifica Dados do usuário
            $User = $this->POST[Usuario::ID];
            $User = $this->usuario->Get($User);
            #Valida usuário
            if (empty($User)) {
                $this->session->set_flashdata(SessionERRO, 'Usuario inexistente.');
                redirect('admin');
            } else {
                $User = end($User);
            }
            #SENHA
            if (!empty($this->POST['Senha']['Atual']) or ($this->UsuarioAtual[Usuario::PERFIL] == 1 && !empty($this->POST['Senha']['Nova'][0]))) {
                #Valida Senha Atual
                $this->POST['Senha']['Atual'] = Bcrypt::check($this->POST['Senha']['Atual'], $User[Usuario::Senha]);
                #Comparando
                if ($this->POST['Senha']['Atual'] or $this->UsuarioAtual[Usuario::PERFIL] == 1) {
                    #Verifica se nova senha foi digitada
                    if (empty($this->POST['Senha']['Nova'][0]) or empty($this->POST['Senha']['Nova'][0])) {
                        $this->session->set_flashdata(SessionERRO, 'La nueva contraseña se debe introducir dos veces.');
                        redirect('admin/usuarios/profile/' . $User[Usuario::ID]);
                    } else {
                        #Senhas são iguais
                        if ($this->POST['Senha']['Nova'][0] == $this->POST['Senha']['Nova'][1]) {
                            #Prepara nova senha
                            $Dados[Usuario::Senha] = Bcrypt::hash($this->POST['Senha']['Nova'][0]);
                            #Notifica
                            $MSG = NULL;
                            $MSG.='Hola ' . $User[Usuario::Nome] . PHP_EOL;
                            $MSG.= PHP_EOL;
                            $MSG.='Su sistema de acceso a los datos han cambiado.' . PHP_EOL;
                            $MSG.= PHP_EOL;
                            $MSG.='<b>E-Mail:</b> ' . $User[Usuario::Email] . PHP_EOL;
                            $MSG.='<b>Usuario:</b> ' . $User[Usuario::Apelido] . PHP_EOL;
                            $MSG.='<b>Contraseña:</b> ' . $this->POST['Senha']['Nova'][0] . PHP_EOL;
                            $MSG.= PHP_EOL;
                            $MSG.= 'Enlace de acceso.' . PHP_EOL;
                            $MSG.= anchor('admin') . PHP_EOL;
                            $MSG.= PHP_EOL;
                            $MSG.='<b>Registrado por:</b> ' . $this->UsuarioAtual[Usuario::Nome] . '- ' . $this->UsuarioAtual[Usuario::Email] . ' -' . PHP_EOL;
                            $MSG = nl2br($MSG);
                            $this->session->set_flashdata(SessionALERTA, $User[Usuario::Apelido].' tuvo su contraseña cambiado.');
                            $this->_Notifica($User[Usuario::Email], 'Su contraseña ha sido cambiada.', $MSG);
                            #
                        } else {
                            $this->session->set_flashdata(SessionERRO, 'Confirmación de la contraseña es divergente.');
                            redirect('admin/usuarios/profile/' . $User[Usuario::ID]);
                        } //Fim Iguais
                    } // Fim válidas
                } else {
                    $this->session->set_flashdata(SessionERRO, 'La contraseña actual no coincide.');
                    redirect('admin/usuarios/profile/' . $User[Usuario::ID]);
                }// #FIM SENHA
            }
            $this->session->set_flashdata(SessionSUCESSO, 'Usuario atualizado con éxito.');
            #Executa Ação
            $this->usuario->Salva($Dados, $User[Usuario::ID]);
            redirect('admin/usuarios/profile/' . $User[Usuario::ID]);
        }
    }

    public function resetsenha($User = NULL) {
        $this->_BloqueiaUser();
        if (is_numeric($User)) {
            $User = $this->usuario->Get($User);
            if (empty($User)) {
                $this->session->set_flashdata(SessionERRO, 'Usuario inexistente.');
                redirect('admin/usuarios');
            } else {
                $User = end($User);
                #
                $Dados = array();
                $Senha = Bcrypt::generateRandomString();
                $Dados[Usuario::Senha] = Bcrypt::hash($Senha);
                #MSG
                $MSG = NULL;
                $MSG.='Hola ' . $User[Usuario::Nome] . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='Su sistema de acceso a los datos han cambiado.' . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='<b>E-Mail:</b> ' . $User[Usuario::Email] . PHP_EOL;
                $MSG.='<b>Usuario:</b> ' . $User[Usuario::Apelido] . PHP_EOL;
                $MSG.='<b>Contraseña:</b> ' . $Senha . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.= 'Enlace de acceso.' . PHP_EOL;
                $MSG.= anchor('admin') . PHP_EOL;
                $MSG.= PHP_EOL;
                $MSG.='<b>Registrado por:</b> ' . $this->UsuarioAtual[Usuario::Nome] . '- ' . $this->UsuarioAtual[Usuario::Email] . ' -' . PHP_EOL;
                $MSG = nl2br($MSG);
                #Notifica
                $this->_Notifica($User[Usuario::Email], 'Su contraseña ha sido cambiada.', $MSG);
                $this->session->set_flashdata(SessionALERTA, $User[Usuario::Apelido].' tuvo su contraseña cambiado.');
                $this->usuario->Salva($Dados,$User[Usuario::ID]);
                redirect('admin/usuarios');
            }
        } else {
            $this->ReqInvalida('admin/usuarios');
        }
    }

    private function _BloqueiaUser() {
        if ($this->UsuarioAtual[Usuario::PERFIL] == 0) {
            $this->session->set_flashdata(SessionERRO, 'Usted no tiene permiso para acceder a esta página.');
            redirect('admin');
        }
    }

    private function _Notifica($Email, $Assunto = 'Teste', $MSG = 'Teste') {
        #Config
        $config = array();
        $config['mailtype'] = 'html';
        $config['validate'] = TRUE;
        #Load
        $this->load->library('email');
        $this->email->initialize($config);
        #Dados
        $this->email->from($this->EmailConfig['REMETENTE'][0], $this->EmailConfig['REMETENTE'][1]);
        $this->email->to($Email);
        $this->email->subject($Assunto);
        $this->email->message($MSG);

        $this->email->send();
    }

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */