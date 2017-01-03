<?php

/**
 * Description of MY_Controller
 *
 * @author luiz.vinicius73@gmail.com
 */
class MY_Controller extends CI_Controller {

    const vSessionUser = 'UserOneShot'; //Nome da Sessao do Usuário
    const vListPage = 'Paginas';
    const vPageAtual = 'PaginaAtual';

    public $sVAR = array();
    protected $SessionUser = FALSE;
    protected $UsuarioAtual = NULL;
    protected $OneShotCONFIG = NULL;
    protected $POST = NULL;
    public $IDIOMA = 'ES';
    protected $setView = array('HEADER' => 'comum/head', 'FOOTER' => 'comum/footer', 'PAGE' => NULL);
    private $TEMPLATE = NULL;
    private $TipoSITE = 'SITE';
    protected $EmailConfig = array(
        'REMETENTE' => array('contacto@oneshothotels.com', 'OneShot Hotels'),
        'DESTINATARIO' => 'denners777@hotmail.com',
    );

    public function __construct() {
        parent::__construct();
        $this->ValidaNavegador();
        //Pega URI do Site
        $this->sVAR['URI'] = $this->uri->segment_array();
        $this->POST = $this->input->post(NULL, TRUE);
        //Verifica se não esta na página de Login
        if (@$this->sVAR['URI'][1] != 'login' && @$this->sVAR['URI'][1] == 'admin') {
            $this->UsuarioAtualInfo();
            $this->_AutoLoadADM();
            $this->TipoSITE = 'ADM';
        } else {
            $this->_AutoLoadSITE();
        }
    }

    //UsuarioAtualInfo
    private function UsuarioAtualInfo() {
        //Sessao
        $this->SessionUser = $this->session->userdata(self::vSessionUser);
        //Valida
        if (empty($this->SessionUser)) {
            $this->session->set_flashdata(SessionERRO, 'zona restringida, por favor identifíquese.');
            redirect('login');
        } else {
            $this->UsuarioAtual = $this->usuario->Get($this->SessionUser);
            $this->UsuarioAtual = $this->UsuarioAtual[0];
            //print_r($this->SessionUser);
            //Valida Usuario Atual
            if (empty($this->UsuarioAtual)) {
                $this->session->set_flashdata(SessionERRO, 'Su sesión no es válido, favor de ingresar de nuevo.');
                $this->logof(NULL, FALSE);
            }
        }
    }

    public function logof($MSG = NULL, $Disconecte = TRUE) {
        if ($Disconecte) {
            $this->UsuarioAtualInfo();
            $this->usuario->Logof((int) $this->UsuarioAtual[Usuario::ID]);
        }
        $this->session->sess_destroy();
        $this->session->unset_userdata(self::vSessionUser);
        $this->session->set_flashdata(SessionINFO, (is_null($MSG)) ? 'Saliste, gracias por el buen trabajo.' : $MSG);
        redirect('login');
    }

    /* Visualização */

    //Adiciona View Extra
    public function ViewTemplate($Template = NULL) {
        $this->TEMPLATE = $Template . '/';
        $this->sVAR['TEMPLATE'] = $this->TEMPLATE;
        unset($Template);
    }

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
        //Carrega Váriaveis
        if ($this->TipoSITE == 'ADM') {
            $this->_FinalizaADM();
        } else {
            $this->_FinalizaSITE();
        }

        //Se Pagina estiver Definida
        if (!empty($PAGE)) {
            $sVAR = $this->sVAR;
            $sVAR['HEADER'] = $this->load->view($this->TEMPLATE . $this->setView['HEADER'], $this->sVAR, TRUE);
            $sVAR['FOOTER'] = $this->load->view($this->TEMPLATE . $this->setView['FOOTER'], $this->sVAR, TRUE);
            //Views Adicionais
            if (isset($this->setView['Add'])) {
                foreach ($this->setView['Add'] as $Nome => $Valor) {
                    $sVAR[$Nome] = $this->load->view($this->TEMPLATE . $Valor, $this->sVAR, TRUE);
                }
            }
            unset($this->sVAR, $this->setView);
            $this->load->view($this->TEMPLATE . $PAGE, $sVAR);
        } else {
            show_404();
        }
    }

    public function ValidaPasta($PASTA = NULL) {
        if (is_string($PASTA)) {
            $this->load->helper('path');
            $PASTA = set_realpath($PASTA, FALSE);
            if (!is_dir($PASTA)) {
                mkdir($PASTA, 0777, true);
            }
        }
    }

    /* Carregamento de Variaveis */

    private function _AutoLoadSITE() {
        $this->ViewTemplate('site');
        $this->IDIOMA = strtoupper($this->lang->lang());
        $this->lang->load('site', $this->IDIOMA);
        $this->load->helper('language');

        //Define Titulo Padrao
        $this->sVAR['SessaoTitulo'] = 'Administração';
        $this->sVAR['SiteTitulo'] = $this->sVAR['PageTitulo'] = $this->sVAR['SessaoDescricao'] = 'OneShot Hotels';
        //Views
        $this->ViewAdd('comum/googleanalytics', 'GOOGLEANALYTICS');
    }

    private function _AutoLoadADM() {
        //Cria Sidebar
        $this->ViewAdd('comum/head', 'HEAD');
        $this->ViewAdd('comum/stackbar', 'STACKBAR');
        $this->ViewAdd('comum/alertas', 'ALERTAS');

        //Carrega Conf
        $this->config->load('admin/OneShotCONFIG', TRUE);
        $this->OneShotCONFIG = $this->config->item('admin/OneShotCONFIG');
        //Define Titulo Padrao
        $this->sVAR['SessaoTitulo'] = 'OneShot Hotels';
        $this->sVAR['SiteTitulo'] = $this->sVAR['PageTitulo'] = $this->sVAR['SessaoDescricao'] = 'OneShot Hotels';
    }

    private function _FinalizaSITE() {
        //SESSIONS
        $this->sVAR['SessAlertas'][SessionERRO] = $this->session->flashdata(SessionERRO);
        $this->sVAR['SessAlertas'][SessionALERTA] = $this->session->flashdata(SessionALERTA);
        $this->sVAR['SessAlertas'][SessionINFO] = $this->session->flashdata(SessionINFO);
        $this->sVAR['SessAlertas'][SessionSUCESSO] = $this->session->flashdata(SessionSUCESSO);
        $this->sVAR['BASEASSETS'] = base_url(SITEASETS);
        $this->sVAR['BASESITE'] = base_url();
        $this->sVAR['BASESITEASSETS'] = base_url('assets/site');
        $this->sVAR['IDIOMA'] = $this->IDIOMA;
        $this->sVAR['Migalhas'] = $this->Migalhas;
        $this->sVAR['MenuTop'] = $this->MenuTop;
        $this->sVAR['MenuFooter'] = $this->MenuFooter;
        $this->sVAR['MetaTags'] = $this->MetaTags;
    }

    private function _FinalizaADM() {
        $this->sVAR['AdminPages'] = $this->OneShotCONFIG['MenuPrincipal'];
        $this->sVAR['AdminSidebar'] = $this->OneShotCONFIG['AdminSidebar'];
        $this->sVAR['UsuarioAtual'] = $this->UsuarioAtual;
        //SESSIONS
        $this->sVAR['SessAlertas'][SessionERRO] = $this->session->flashdata(SessionERRO);
        $this->sVAR['SessAlertas'][SessionALERTA] = $this->session->flashdata(SessionALERTA);
        $this->sVAR['SessAlertas'][SessionINFO] = $this->session->flashdata(SessionINFO);
        $this->sVAR['SessAlertas'][SessionSUCESSO] = $this->session->flashdata(SessionSUCESSO);

        //$this->sVAR['HEAD'] = $this->load->view('admin/head', $this->sVAR, TRUE);
        $this->sVAR['UsuarioAtual']['AVATAR'] = $this->SetAvatar($this->UsuarioAtual[Usuario::Email]);
        unset($this->OneShotCONFIG, $this->UsuarioAtual);
    }

    public function SetPageTitle($Titulo = NULL, $Descricao = NULL) {
        if (is_string($Titulo)) {
            $this->sVAR['PageTitulo'] = $Titulo . ' &bull; ' . $this->sVAR['SiteTitulo'];
            $this->sVAR['SessaoTitulo'] = $Titulo;
            $this->sVAR['SessaoDescricao'] = (is_null($Descricao)) ? $this->sVAR['SiteTitulo'] : $Descricao;
        }
    }

    private function SetAvatar($Email = NULL) {
        $this->load->library('gravatar');
        $AVATAR = $this->gravatar->get_gravatar($Email);
        return $AVATAR;
    }

    /* Metodos Gerais */

    public function uploadImagem($SLUG = NULL, $Vinculo = NULL) {

        $CLASS = strtolower(get_class($this));

        if (is_string($SLUG)) {
            $this->_setMetadados();
            //Dados Da imagem
            $imgData = (isset($this->sVAR['Imagens'][$SLUG])) ? $this->sVAR['Imagens'][$SLUG] : NULL;

            if (empty($imgData)) {
                $this->ReqInvalida("admin/{$CLASS}");
            } else {
                $config = $imgData['config'];
                //Define Pasta
                if (!isset($config['upload_path'])) {
                    $config['upload_path'] = PublicPath . "{$Vinculo}/{$SLUG}/img/";
                }
                $config['encrypt_name'] = TRUE;

                //Se não possui Arquivo
                if (empty($_FILES['IMAGEM']['size'])) {
                    if (empty($this->POST)) {
                        $this->session->set_flashdata(SessionERRO, 'Invalid imagem.');
                        redirect("admin/{$CLASS}/editar/{$Vinculo}");
                    } else {
                        //Apenas Cadastra ou Atualiza Imagem
                        $MetaDados = elements(array('DESC', 'URL', 'IMAGEM'), $this->POST);
                        $Dados[Metadata::Slug] = $SLUG;
                        $Dados[Metadata::Vinculo] = $Vinculo;
                        $Dados[Metadata::MetaDados] = json_encode($MetaDados);

                        $Criterio = array(
                            Metadata::Slug => $SLUG,
                            Metadata::Vinculo => $Vinculo,
                        );

                        //Executa no Banco de Dados
                        $ACAO = $this->metadata->Salva($Dados, $Criterio);
                        //Tupo OK
                        if ($ACAO) {
                            $this->session->set_flashdata(SessionSUCESSO, 'Acción realizada con éxito.');
                            redirect("admin/{$CLASS}/editar/{$Vinculo}");
                            //ERRO
                        } else {
                            $this->session->set_flashdata(SessionERRO, 'Error en la operación.');
                            redirect("admin/{$CLASS}/editar/{$Vinculo}");
                        }
                    }
                } else {
                    //Prepara Pasta
                    $this->ValidaPasta($config['upload_path']);
                    $this->load->library('upload', $config);
                    //Executa upload
                    if ($this->upload->do_upload('IMAGEM')) {
                        $DadosArquivo = $this->upload->data();
                        $Imagem = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
                        //METADADOS
                        $MetaDados = elements(array('DESC', 'URL'), $this->POST);
                        $MetaDados['IMAGEM'] = $Imagem;
                        //Dados para o banco de dados
                        $Dados[Metadata::Slug] = $SLUG;
                        $Dados[Metadata::Vinculo] = $Vinculo;
                        $Dados[Metadata::MetaDados] = json_encode($MetaDados);

                        $Criterio = array(
                            Metadata::Slug => $SLUG,
                            Metadata::Vinculo => $Vinculo,
                        );
                        //Executa no Banco de Dados
                        $ACAO = $this->metadata->Salva($Dados, $Criterio);
                        //Tupo OK
                        if ($ACAO) {
                            $this->session->set_flashdata(SessionSUCESSO, 'Acción realizada con éxito.');
                            redirect("admin/{$CLASS}/editar/{$Vinculo}");
                            //ERRO
                        } else {
                            $this->session->set_flashdata(SessionERRO, 'Error en la operación.');
                            redirect("admin/{$CLASS}/editar/{$Vinculo}");
                        }
                    } else {
                        $ERRO = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                        $this->session->set_flashdata(SessionERRO, $ERRO);
                        redirect("admin/{$CLASS}/editar/{$Vinculo}");
                    }
                }
            }
            //Requisição Inválida
        } else {
            $this->ReqInvalida("admin/{$CLASS}");
        }
    }

    public function galerias($Slug = NULL, $Vinculo = NULL) {
        $CLASS = strtolower(get_class($this));

        if (is_string($Slug)) {
            $this->load->model('galeria');
            //Define Criterio
            $Criterio[Galeria::Slug] = $Slug;
            if (is_string($Vinculo)) {
                $Criterio[Galeria::Vinculo] = $Vinculo;
            } else {
                $Criterio[Galeria::Vinculo] = $CLASS;
            }
            //exe

            if (method_exists($this, '_galeria')) {
                //Pega Dados
                $this->sVAR['Galeria'] = $this->galeria->Get($Criterio);
                //Converte Erro 
                if (!is_array($this->sVAR['Galeria'])) {
                    $this->session->set_flashdata(SessionINFO, 'Galería de vacío.');
                    $this->sVAR['Galeria'] = array();
                }
                $this->sVAR['G_SLUG'] = $Slug;
                $this->sVAR['G_VINCULO'] = $Criterio[Galeria::Vinculo];
                $this->_galeria();
            } else {
                $this->session->set_flashdata(SessionERRO, 'ERRO INTERNO!');
                redirect("admin/{$CLASS}");
            }
        } else {
            $this->ReqInvalida("admin/{$CLASS}");
        }
    }

    public function ReqInvalida($Redirect = NULL) {
        $this->session->set_flashdata(SessionERRO, $this->uri->uri_string . ' &bull; ' . get_class($this) . ' &bull; Requisição Inválida.');
        if (is_string($Redirect)) {
            redirect($Redirect);
        } else {
            redirect('admin');
        }
    }

    private function ValidaNavegador() {
        $this->load->library('user_agent');
        $NAV = $this->agent->browser();
        $VER = $this->agent->version();
        if ($NAV == 'Internet Explorer') {
            if ($VER <= 8) {
                $URL = base_url('old/'.strtolower($this->IDIOMA));
                redirect($URL,502);
            }
        }
    }

}