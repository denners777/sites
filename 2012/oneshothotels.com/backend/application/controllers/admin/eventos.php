<?php

/**
 * Description of eventos
 *
 * @author Conecte_Estudio
 */
class Eventos extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->model('evento');
        $this->sVAR['Horas'] = array();
        $this->sVAR['Minutos'] = array('0' => '00', '15' => '15', '30' => '30', '45' => '45');
        for ($i = 0; $i <= 23; $i++) {
            $this->sVAR['Horas'][$i] = $i;
            if ($this->sVAR['Horas'][$i] < 10) {
                $this->sVAR['Horas'][$i] = '0' . $i;
            }
        }
    }

    public function _remap($Metodo, $Parametros = array()) {
        $GetMetodo = 'process_' . $Metodo;
        if (method_exists($this, $GetMetodo)) {
            return call_user_func_array(array($this, $GetMetodo), $Parametros);
        } else {
            #Ã‰ Um evento / EDITANDO Evento
            if (is_numeric($Metodo)) {
                $this->EditaEvento($Metodo, $Parametros);
                #Listando e cadastrado eventos da cidade
            } else {
                $this->sVAR['CIDADE'] = $this->cidade->Get($Metodo);
                if (empty($this->sVAR['CIDADE'])) {
                    show_404();
                } else {
                    $this->sVAR['CIDADE'] = $this->sVAR['CIDADE'][0];
                    $this->cidade($Metodo, $Parametros);
                }
            }
        }
    }

    public function process_ifoproject() {
        if (empty($this->POST)) {
            $this->ReqInvalida('admin/eventos/project');
        } else {
            $Dados = array();
            $Criterio = array();
            $Dados[Metadata::Vinculo] = 'eventos_project';
            $Dados[Metadata::Slug] = 'info';
            $Criterio = $Dados;
            $Dados[Metadata::MetaDados] = $this->POST['Dados'];

            $Acao = $this->metadata->Salva($Dados, $Criterio);
            if ($Acao) {
                $this->session->set_flashdata(SessionSUCESSO, 'actualizado');
            } else {
                $this->session->set_flashdata(SessionERRO, 'No actualizado');
            }
            redirect('admin/eventos/project');
        }
    }

    public function process_DESTAQUE($Id = NULL, $Status = NULL, $CallBack = NULL) {
        if (is_numeric($Id) && is_string($Status) && is_string($CallBack)) {
            $Dados = array();
            $Dados[Evento::Destaque] = $Status;
            $this->evento->Salva($Dados, $Id);
            $this->session->set_flashdata(SessionSUCESSO, 'Evento actualizado.');
            redirect("admin/eventos/{$CallBack}");
        } else {
            $this->ReqInvalida();
        }
    }

    private function process_index() {
        $this->ReqInvalida('admin/eventos/project');
    }

    private function process_project($Parametros = array()) {
        
        if ($Parametros == 'cadastro' && !empty($this->POST)) {
            $this->CadastrEvento('project');
        } else {
            #Dados
            $Criterio = array();
            $Criterio[Metadata::Vinculo] = 'eventos_project';
            $Criterio[Metadata::Slug] = 'info';
            $Dados = $this->metadata->Get($Criterio);
            $Dados = end($Dados);
            $this->sVAR['Dados'] = json_decode($Dados[Metadata::MetaDados], TRUE);
            #Carrega Dados e View
            $this->sVAR['TIPOCADASTRO'] = 'project';
            $this->SetPageTitle('Eventos One Shot Project');
            $this->sVAR['EventoSlug'] = 'project';
            $this->sVAR['URLCadastro'] = "admin/eventos/project/cadastro";
            $this->sVAR['ListaEventos'] = $this->evento->Get('project');
            $this->ViewLoad('eventos/cadastro');
        }
    }

    private function cidade($CidadeSlug = NULL, $Parametros = array()) {
        $P1 = (isset($Parametros[0])) ? $Parametros[0] : NULL;
        if (empty($this->POST)) {
            #Carrega Dados e View
            $this->sVAR['TIPOCADASTRO'] = $CidadeSlug;
            $this->SetPageTitle('Eventos ' . $this->sVAR['CIDADE'][Cidade::Nome]);
            $this->sVAR['URLCadastro'] = "admin/eventos/{$CidadeSlug}/cadastro";
            $this->sVAR['EventoSlug'] = $CidadeSlug;
            $this->sVAR['ListaEventos'] = $this->evento->Get($CidadeSlug);
            $this->ViewLoad('eventos/cadastro');
        } else if (!empty($this->POST) && $P1 == 'cadastro') {
            #Chama metodo de cadastro e atualizaÃ§Ã£o
            $this->CadastrEvento($Parametros);
        } else {
            
        }
    }

    private function EditaEvento($Evento = NULL, $Parametros = array()) {


        if (!empty($this->POST)) {

            $Dados = elements(array(Evento::Data, Evento::MetaDados), $this->POST);

            #Upload
            $this->load->library('upload');

            $ERRO = FALSE;
            $MSGERRO = array();
            #FOTO1
            if ($_FILES['FOTO_1']['error'] == 0) {
                $foto1_fonfig = array();
                $foto1_fonfig['encrypt_name'] = TRUE;
                $foto1_fonfig['upload_path'] = PublicPath . "eventos/{$Evento}/foto_1/";
                $foto1_fonfig['allowed_types'] = 'jpeg|jpg';
                $foto1_fonfig['max_size'] = '1500';
                $foto1_fonfig['max_width'] = '670';
                $foto1_fonfig['max_height'] = '470';
                #Validapasta
                $this->ValidaPasta($foto1_fonfig['upload_path']);
                #Inicializa
                $this->upload->initialize($foto1_fonfig);
                #Executa
                if ($this->upload->do_upload('FOTO_1')) {
                    $DadosArquivo = $this->upload->data();
                    $Dados[Evento::MetaDados]['FOTO'][0] = str_replace(PublicPath, '', $foto1_fonfig['upload_path']) . $DadosArquivo['file_name'];
                } else {
                    $ERRO = TRUE;
                    $MSGERRO[] = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                }
            }

            #FOTO2
            if ($_FILES['FOTO_2']['error'] == 0) {
                $foto2_fonfig = array();
                $foto2_fonfig['encrypt_name'] = TRUE;
                $foto2_fonfig['upload_path'] = PublicPath . "eventos/{$Evento}/foto_2/";
                $foto2_fonfig['allowed_types'] = 'jpeg|jpg';
                $foto2_fonfig['max_size'] = '1024';
                $foto2_fonfig['max_width'] = '670';
                $foto2_fonfig['max_height'] = '470';
                #Validapasta
                $this->ValidaPasta($foto2_fonfig['upload_path']);
                #Inicializa
                $this->upload->initialize($foto2_fonfig);
                #Executa
                if ($this->upload->do_upload('FOTO_2')) {
                    $DadosArquivo = $this->upload->data();
                    $Dados[Evento::MetaDados]['FOTO'][1] = str_replace(PublicPath, '', $foto2_fonfig['upload_path']) . $DadosArquivo['file_name'];
                } else {
                    $ERRO = TRUE;
                    $MSGERRO[] = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                }
            }

            if (!empty($MSGERRO)) {
                $this->session->set_flashdata(SessionALERTA, $MSGERRO);
            }

            settype($this->POST[Evento::ID], 'integer');

            //  print_r($Dados);
            $Acao = $this->evento->Salva($Dados, $this->POST[Evento::ID]);

            if ($Acao) {
                $this->session->set_flashdata(SessionSUCESSO, 'Evento registrado con êxito.');
            } else {
                $this->session->set_flashdata(SessionERRO, 'Error al actualizar.');
            }
            redirect("admin/eventos/{$Evento}");
        } else

        if (is_numeric($Evento)) {

            $this->sVAR['Evento'] = $this->evento->Get($Evento);

            if (count($this->sVAR['Evento']) == 1) {

                $this->sVAR['Evento'] = end($this->sVAR['Evento']);
                $this->sVAR['URLVoltar'] = (empty($this->sVAR['Evento'][Evento::Slug])) ? 'project' : "{$this->sVAR['Evento'][Evento::Slug]}";
                $this->sVAR['URLDelet'] = site_url("admin/eventos/DeletaEvento/{$Evento}/{$this->sVAR['Evento'][Evento::Slug]}");
                $this->ViewLoad('eventos/editar');
                //print_r($this->sVAR['Evento']); 
            } else {

                $this->session->set_flashdata(SessionERRO, 'Evento no se encuentra.');
                redirect('admin/');
            }
        } else {
            $this->session->set_flashdata(SessionERRO, 'Evento no válido.');
            redirect('admin/');
        }
    }

    private function CadastrEvento($Parametros = array()) {
        $Dados = elements(array(Evento::Slug, Evento::MetaDados, Evento::Data), $this->POST, NULL);
        $Dados[Evento::MetaDados]['FOTO'] = array(NULL, NULL);
        $Evento = $this->evento->Salva($Dados);
        redirect("admin/eventos/{$Evento[Evento::ID]}");
    }
    
    /*Deletar Evento*/
    private function process_DeletaEvento($Evento = NULL, $CallBack = NULL) {
        if(is_numeric($Evento)){
            $this->evento->DELETAR_REGISTRO($Evento);
            $this->session->set_flashdata(SessionALERTA, 'Evento deletado.');
            redirect("admin/eventos/{$CallBack}");
        }else{
            $this->ReqInvalida("admin/eventos/{$CallBack}");
        }
    }

}

/* End of file eventos.php */
/* Location: ./application/controllers/admin/eventos.php */

