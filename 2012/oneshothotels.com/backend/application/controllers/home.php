<?php

/**
 *
 * @author luiz.vinicius73@gmail.com
 */
class Home extends MY_Controller {

    public $Migalhas = array();
    public $MenuTop = array();
    public $MenuFooter = array();
    public $MetaTags = array();
    private $CacheHabilita = TRUE;
    private $CacheTempo = 60; //Minutos

    public function __construct() {
        parent::__construct();
        $this->Migalhas[] = anchor(NULL, lang('home_name'));
        $this->sVAR['IMGPLACEHOLD'] = '<img src="http://placehold.it/570x341" />';
        $this->SetFooterMenu();
        $this->sVAR['FooterAdd'] = array();
        $this->_HoteisPrincipais();
    }

    public function _remap($Metodo, $Parametros = array()) {
        $stact = 'stact_' . $Metodo;
        if (method_exists($this, $stact)) {
            return call_user_func_array(array($this, $stact), $Parametros);
        } else {
            $TParam = count($Parametros);
            #INDEX
            if ($TParam == 0) {
                //Pagina da Cidade
                $this->_Cidade($Metodo);
            } else if ($TParam == 1) {
                //Hotel HOME ou Eventos da Cidade
                $this->GetCidade($Metodo);
                #Eventos
                if ($Parametros[0] == 'eventos') {
                    $this->page_eventos($Metodo, $Parametros);
                } else {
                    #Cidade HOME
                    $this->_Hotel($Parametros[0]);
                } //fim
            } else if ($TParam >= 2) {
                #EVENTOS
                if ($Parametros[0] == 'eventos') {
                    if (is_numeric($Parametros[1])) {
                        $this->page_eventos($Metodo, $Parametros);
                    } else if($Parametros[1] =='busca'){
                        $this->GetCidade($Metodo);
                        $this->page_eventos_busca($Metodo, $Parametros);
                    }else {
                        redirect("{$Metodo}/eventos");
                    }
                } else if ($Parametros[1] == 'eventos') {
                    redirect("{$Metodo}/eventos");
                } else {
                    #Cidade
                    $this->GetCidade($Metodo);
                    #Hotel
                    $this->GetHotel($Parametros[0]);
                    #Procura Metodo e Executa
                    if (method_exists($this, 'page_' . $Parametros[1])) {
                        $MT = 'page_' . $Parametros[1];
                        $this->$MT($Parametros);
                        #404
                    } else {
                        show_404();
                    } //fim
                } //fim
            } else {
                show_404();
            }
        }
    }

    #INDEX

    public function stact_index() {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->sVAR['Cidades'] = $this->cidade->GetAll(TRUE);
        $this->ViewFooter('NULO');
        $this->ViewHeader('NULO');
        #Meta tags e titulos
        $this->SetPageTitle('One Shot Hotels');
        $this->sVAR['HOMEDATA']['Titulo'] = lang('home_titulo');
        $this->MetaTags['description'] = $this->sVAR['HomeMetaDados']['DESC'][$this->IDIOMA];
        #Slider
        $this->load->model('galeria');
        $Slider = $this->galeria->Get('homepage', TRUE, PublicDomain);
        $this->sVAR['SLIDERHOME'] = array();
        foreach ($Slider as $IMG) {
            $this->sVAR['SLIDERHOME'][] = $IMG[Galeria::MetaDados];
        }

        $this->ViewLoad('home');
    }
    
    public function stact_breve($Cidade = NULL){
        #CACHE
        $this->SetCache();
        #Fim CACHE
        $this->SetPageTitle('One Shot Hotels');
		$this->ViewLoad('stact/breve');
    }
	
	public function stact_sucess(){
		$this->SetPageTitle('One Shot Hotels');
		$this->ViewLoad('stact/sucesso');
	}

    public function stact_mapa($Acao = NULL) {
        #CACHE
        //$this->SetCache();
        #Fim CACHE

        $this->load->model('mapa');
        $Pontos = $this->mapa->Get($Acao, TRUE);
        $D = array();
        foreach ($Pontos as $POI) {
            $icon = base_url("assets/site/img/mapas/{$POI[Mapa::MetaDados]['group']}.png");
            $logo = PublicDomain . $POI[Mapa::MetaDados]['LOGO'];
            $D[] = array(
                'latitude' => $POI[Mapa::MetaDados]['latitude'],
                'longitude' => $POI[Mapa::MetaDados]['longitude'],
                'icon' => $icon,
                'logo' => $logo,
                'group' => $POI[Mapa::MetaDados]['group'],
                'content' => $POI[Mapa::MetaDados]['content'],
                'info' => $POI[Mapa::MetaDados]['info'],
                'telefone' => $POI[Mapa::MetaDados]['telefone'],
            );
        }

        header('Content-type: application/json');
        $this->sVAR['JSON'] = $D;
        $this->ViewLoad('json');
    }

    ##FAQ

    private function stact_faq() {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->model('faq');
        $this->load->helper('typography');
        $this->Migalhas[] = anchor('faq', 'FAQ');
        $this->sVAR['FAQLISTA'] = $this->faq->GetList();
        sort($this->sVAR['FAQLISTA']);
        $this->SetPageTitle('FAQ');
        $this->ViewLoad('stact/faq');
    }

    ##Legales

    private function stact_legales() {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->model('legale');
        $this->load->helper('typography');
        $this->Migalhas[] = anchor('legales', lang('legales_name'));
        $this->sVAR['LEGALESLISTA'] = $this->legale->GetList();
        sort($this->sVAR['LEGALESLISTA']);
        $this->SetPageTitle(lang('legales_titulo'));
        $this->ViewLoad('stact/legales');
    }

    private function stact_prensa() {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->model('prensa');
        $this->load->helper('typography');
        #LISTA
        $this->sVAR['PRENSALISTA'] = $this->prensa->Get(NULL, PublicDomain);
        #VIEW
        $this->SetPageTitle(lang('prensa_titulo'));
        $this->ViewLoad('stact/prensa');
    }

    private function stact_eventos($Ano = NULL, $Mes = NULL) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->model('evento');
        if($Ano == 'busca'){
            if(!empty($this->POST)){
                $Termo = $this->POST['buscar'];
                $Termo = base64url_encode($Termo);
                redirect("eventos/busca/{$Termo}");
            }
            
            if(is_string($Mes)){
                $Termo = base64_decode($Mes);
            }else{
                redirect("eventos");
            }
            
            #Menu Top
            $this->Migalhas[] = anchor('eventos', 'One Shot Projects');
            $this->_MenuTopCidade();
            $this->sVAR['URLBusca'] = site_url("/eventos/busca");
            $this->SetPageTitle('ONE SHOT PROJECTS');
            #####
            $this->_eventos_busca('project',$Termo);
        }else if ($Ano == NULL) {
            ##Dados
            $Criterio = array();
            $Criterio[Metadata::Vinculo] = 'eventos_project';
            $Criterio[Metadata::Slug] = 'info';
            $Dados = $this->metadata->Get($Criterio);
            $Dados = end($Dados);
            $this->sVAR['ProjectDados'] = json_decode($Dados[Metadata::MetaDados], TRUE);
            #Description
            $this->MetaTags['description'] = $this->sVAR['ProjectDados']['text'][$this->IDIOMA];
            #Helper
            $this->load->helper('typography');
            ##
            $this->sVAR['URLBase'] = site_url("eventos");
            $this->sVAR['URLBusca'] = site_url("eventos/busca");
            $this->SetPageTitle('ONE SHOT PROJECTS');
            $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/eventos.js');
            $this->sVAR['Destaques'] = $this->evento->GetDestaques('project');
            #Menu Top
            $this->Migalhas[] = anchor('eventos', 'One Shot Projects');
            $this->_MenuTopCidade();
            #VIEW
            $this->ViewLoad('eventos/oneshotprojets');
        } else if(is_numeric($Ano)) {
            $Ano = (is_numeric($Ano)) ? $Ano : date('Y');
            $Mes = (is_numeric($Mes)) ? $Mes : date('m');
            $Dados = $this->evento->GetMes($Ano, $Mes, 'project', $this->IDIOMA);
            #Load
            header('Content-type: application/json');
            $this->sVAR['JSON'] = $Dados;
            $this->ViewLoad('json');
        }
    }

    ####
    ##

    #
    
    private function GetCidade($Slug) {
        $Cidade = $this->cidade->Get($Slug);
        if (empty($Cidade)) {
            show_404();
        } else {
            $this->sVAR['CIDADE'] = $Cidade[0];
            $this->sVAR['CIDADE'][Cidade::MetaDados] = json_decode($this->sVAR['CIDADE'][Cidade::MetaDados], TRUE);
            unset($Cidade);
            $this->Migalhas[] = anchor($this->sVAR['CIDADE'][Cidade::Slug], $this->sVAR['CIDADE'][Cidade::Nome]);
            
            if($this->sVAR['CIDADE'][Cidade::Status]==1){
                return TRUE;
            }else{
                redirect('breve/'.$this->sVAR['CIDADE'][Cidade::Slug]);
            }
        }
    }

    private function GetHotel($Hotel = NULL) {
        $Hotel = $this->hotel->Get($Hotel);
        if (empty($Hotel)) {
            show_404();
        } else {
            $this->sVAR['HOTEL'] = $Hotel[0];
            $this->sVAR['HOTEL'][Hotel::MetaDados] = json_decode($this->sVAR['HOTEL'][Hotel::MetaDados], TRUE);
            $this->MetaTags['description'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['Descricao_'.$this->IDIOMA];
            $this->sVAR['HColor'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['COLOR'];
            $this->load->model('skin');
            $this->sVAR['Skin'] = $this->skin->GetSkins($this->sVAR['HOTEL'][Hotel::Slug], $this->IDIOMA);
            unset($Hotel);
            $this->SetMenuTopHotel();
            $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}", $this->sVAR['HOTEL'][Hotel::Nome]);
            
             if($this->sVAR['HOTEL'][Hotel::Status]==1){
                return TRUE;
            }else{
                redirect('breve/'.$this->sVAR['HOTEL'][Hotel::Slug]);
            }
            
            return TRUE;
        }
    }

    private function _Cidade($Slug) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->GetCidade($Slug);
        $this->SetPageTitle($this->sVAR['CIDADE'][Cidade::Nome]);
        $Criterio[hotel::Cidade] = $this->sVAR['CIDADE'][Cidade::ID];
        $this->sVAR['HOTEIS'] = $this->hotel->GetLista($Criterio);
        $this->sVAR['CIDADE']['METADATA'] = $this->metadata->Get($this->sVAR['CIDADE'][Cidade::Slug]);
        foreach ($this->sVAR['HOTEIS'] as $Hotel) {
            $this->MenuTop[] = anchor("$Slug/{$Hotel[Hotel::Slug]}", $Hotel[Hotel::Nome]);
            $this->sVAR['HOTEIS'][$Hotel[Hotel::Slug]]['METADATA'] = $this->metadata->Get($Hotel[Hotel::Slug]);
        }
        $this->MetaTags['description'] = $this->sVAR['CIDADE'][Cidade::MetaDados]["Descricao_{$this->IDIOMA}"];
        $this->ViewLoad('cidade/home');
    }

    private function _Hotel($Hotel) {
        #CACHE
        $this->SetCache();
        #Fim CACHE
        
        $this->GetHotel($Hotel);
        $this->sVAR['METADADOSIMAGEM'] = $this->metadata->Get($Hotel);
        #View
        $this->MetaTags['description'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['Descricao_'.$this->IDIOMA];
        $this->SetPageTitle($this->sVAR['HOTEL'][Hotel::Nome], $this->sVAR['CIDADE'][Cidade::Nome]);
        $this->ViewLoad('hoteis/home');
    }

    public function SetPageTitle($Titulo = NULL, $Descricao = NULL) {
        if (is_string($Titulo)) {
            $this->sVAR['PageTitulo'] = (is_string($Descricao)) ? $Titulo . ' &bull; ' . $Descricao . ' &bull; ' . $this->sVAR['SiteTitulo'] : $Titulo . ' &bull; ' . $this->sVAR['SiteTitulo'];
            $this->sVAR['SessaoTitulo'] = $Titulo;
            $this->sVAR['SessaoDescricao'] = (is_null($Descricao)) ? $this->sVAR['SiteTitulo'] : $Descricao;
        }
    }

    private function SetMenuTopHotel() {
        $Menu = array();
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/habitaciones/", lang('habitaciones_nome'));
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/servicios/", lang('servicios_nome'));
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/eventos/", lang('eventos_nome'));
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/fotos/", lang('fotos_nome'));
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/guia/", lang('guia_nome'));
        $Menu[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/localizacion/", lang('localizacion_nome'));
        $this->MenuTop = $Menu;
        unset($Menu);
    }

    private function SetFooterMenu() {
        $Menu = array();
        $Menu[] = anchor('contacto', strtoupper(lang('mf_contato'))) . '/';
        $Menu[] = anchor('trabajaconnosotros', strtoupper(lang('mf_trabalhe'))) . '/';
        $Menu[] = anchor('legales', strtoupper(lang('mf_legal'))) . '/';
        //$Menu[] = anchor('faq', strtoupper('faq')) . '/';
        $Menu[] = anchor('prensa', strtoupper(lang('mf_prensa'))) . '/';
        $Menu[] = anchor('#', strtoupper(lang('mf_reservas')));
        $this->MenuFooter = $Menu;
        unset($Menu);
    }

    #PAGINAS
    ##Eventos

    private function page_eventos($Cidade, $Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->model('evento');
        if (count($Parametros) <= 1) {
            $this->sVAR['URLBase'] = site_url("{$Cidade}/eventos");
            $this->SetPageTitle(lang('eventos_nome'));
            $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/eventos.js');
            #
            #Menu Top
            $this->Migalhas[] = anchor("{$Cidade}/eventos", lang('eventos_nome'));
            $Criterio[hotel::Cidade] = $this->sVAR['CIDADE'][Cidade::ID];
            $Hoteis = $this->hotel->GetLista($Criterio);
            foreach ($Hoteis as $Hotel) {
                $this->MenuTop[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$Hotel[Hotel::Slug]}", $Hotel[Hotel::Nome]);
            }
            #
            $this->sVAR['URLBusca'] = site_url("{$Cidade}/eventos/busca");
            $this->ViewLoad('eventos/cidade');
        } else {

            if (isset($_GET['termo'])) {
                $Termo = $_GET['termo'];
                if (is_null($Termo)) {
                    $Dados = array();
                } else {
                    $this->load->model('evento');
                    $Dados = $this->evento->Busca($Termo, $Cidade);
                }
                header('Content-type: application/json');
                $this->sVAR['JSON'] = $Dados;
                $this->ViewLoad('json');
            } else {
                $Ano = (isset($Parametros[1])) ? $Parametros[1] : date('Y');
                $Mes = (isset($Parametros[2])) ? $Parametros[2] : date('m');
                $Dados = $this->evento->GetMes($Ano, $Mes, $Cidade, $this->IDIOMA);
                header('Content-type: application/json');
                $this->sVAR['JSON'] = $Dados;
                $this->ViewLoad('json');
            }
        }
    }
    
    private function page_eventos_busca($Cidade, $Parametros = array()){
        
        /////
        if(!empty($this->POST)){
            $Termo = $this->POST['buscar'];
            $Termo = base64url_encode($Termo);
            redirect("{$Cidade}/eventos/busca/{$Termo}");
        }
        
        if(isset($Parametros[2])){
            $Termo = base64_decode($Parametros[2]);
        }else{
            redirect("{$Cidade}/eventos");
        }
        
        #Menu Top
        $this->Migalhas[] = anchor("{$Cidade}/eventos", lang('eventos_nome'));
        $Criterio[hotel::Cidade] = $this->sVAR['CIDADE'][Cidade::ID];
        $Hoteis = $this->hotel->GetLista($Criterio);
        foreach ($Hoteis as $Hotel) {
            $this->MenuTop[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$Hotel[Hotel::Slug]}", $Hotel[Hotel::Nome]);
        }
        $this->sVAR['URLBusca'] = site_url("{$Cidade}/eventos/busca");
        #####
        $this->SetPageTitle(lang('eventos_nome'));
        $this->_eventos_busca($Cidade,$Termo);
    }
    
    private function _eventos_busca($Cidade,$Termo = NULL){
        $this->load->model('evento');
        
        $this->sVAR['Termo'] = $Termo;
        
        //////BUSCANDO
        $Resultado = $this->evento->Busca($Termo,$Cidade);
        $this->sVAR['Resultados'] = array();
        $this->sVAR['Resultados']['Total'] = count($Resultado);
        $this->sVAR['Resultados']['Dados'] = $Resultado;
        $this->sVAR['Maximo'] = 20;
        #CACHE
        $this->SetCache();
        #Fim CACHE        
        
        $this->ViewLoad('eventos/busca');
    }
    
    ##Habitaciones

    private function page_habitaciones($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE
    
        $Hotel = strtolower($Parametros[0]);
        $this->load->helper('typography');
        #MODEL
        $this->load->model('habitacione');
        #Lista
        $this->sVAR['LISTAHABITACIONES'] = $this->habitacione->GetByHotel($Hotel, TRUE, TRUE);
       // $this->sVAR['LISTAHABITACIONES'] = (is_array($this->sVAR['LISTAHABITACIONES'])) ? $this->sVAR['LISTAHABITACIONES'] : array() ; 
        $this->MenuTop = array();
        /*
        foreach($this->sVAR['LISTAHABITACIONES'] as $T => $H){
            $this->MenuTop[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/habitaciones/{$T}",ucfirst($T));
        }*/
        $nList = array();
        foreach($this->habitacione->TipoDeAbitaciones as $habitaTipo){
            if(array_key_exists($habitaTipo,$this->sVAR['LISTAHABITACIONES'])){
                $this->MenuTop[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/habitaciones/{$habitaTipo}",ucfirst($habitaTipo));
                $nList[$habitaTipo] = $this->sVAR['LISTAHABITACIONES'][$habitaTipo];
            }
        }
        $this->sVAR['LISTAHABITACIONES'] = $nList;
        ##
        $THabitaciones = ucfirst(strtolower(lang('ti_habi')));
        $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/habitaciones", $THabitaciones);
        if (isset($Parametros[2])) {
            $Tipo = strtolower($Parametros[2]);
            $Criterio = array();
            $Criterio[Habitacione::Slug] = $Hotel;
            $Criterio[Habitacione::Tipo] = $Tipo;
            $this->sVAR['HABITACIONE'] = $this->habitacione->get($Criterio);
            if (count($this->sVAR['HABITACIONE']) == 1) {
                #HABITACIONE
                $this->sVAR['HABITACIONE'] = $this->sVAR['HABITACIONE'][0];
                //Preparando Dados
                $DadosHabitation = array('ID', 'TITULO', 'DESC', 'LINK', 'CAPA');
                //Existem Meta Dados
                if (isset($this->sVAR['HABITACIONE'][Habitacione::MetaDados])) {
                    $META = json_decode($this->sVAR['HABITACIONE'][Habitacione::MetaDados], TRUE);
                    $DadosHabitation = elements($DadosHabitation, $META);
                    $DadosHabitation['ID'] = $this->sVAR['HABITACIONE'][Habitacione::ID];
                    unset($META);
                    //Não Existe
                } else {
                    $DadosHabitation = elements($DadosHabitation, array(), NULL);
                    $DadosHabitation['DESC']['EN'] = NULL;
                    $DadosHabitation['DESC']['ES'] = NULL;
                    $DadosHabitation['CAPA'] = NULL;
                }
                $this->sVAR['HABITACIONE'][Habitacione::MetaDados] = $DadosHabitation;
                #GALERIA
                unset($Criterio);
                $this->load->model('galeria');
                $Criterio[Galeria::Vinculo] = 'hoteis';
                $Criterio[Galeria::Slug] = $Hotel;
                $Criterio[Galeria::Habitacione] = $Tipo;

                //IMAGENS
                $this->sVAR['Galeria']['IMAGENS'] = $this->galeria->Get($Criterio, TRUE);
                $Criterio[Galeria::Habitacione] = $Criterio[Galeria::Habitacione] . '-slider';
                $this->sVAR['Galeria']['SLIDER'] = $this->galeria->Get($Criterio, TRUE);

                if (!is_array($this->sVAR['Galeria']['IMAGENS'])) {
                    $this->sVAR['Galeria']['IMAGENS'] = array();
                }
                if (!is_array($this->sVAR['Galeria']['SLIDER'])) {
                    $this->sVAR['Galeria']['SLIDER'] = array();
                }
                
                $TTipo = ucfirst(strtolower($Tipo));
                $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/habitaciones/{$Tipo}", $TTipo);
                $this->SetPageTitle(lang('ti_hab') . $TTipo);
                $this->ViewLoad('habitaciones/habitaciones_detalhe');
            } else {
                show_404();
            }

            #LISTA de HABITACIONES
        } else {
            $this->SetPageTitle($THabitaciones);
            $this->ViewLoad('habitaciones/habitaciones_index');
        }
    }

    ##Staff

    private function page_staff($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $Hotel = $Parametros[0];
        #MODEL
        $this->load->model('galeria');
        $Criterio[Galeria::Vinculo] = 'staff';
        $Criterio[Galeria::Slug] = $Hotel;
        #GET
        $this->sVAR['Galeria'] = $this->galeria->Get($Criterio, TRUE, PublicDomain);
        #LOAD
        $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/staff", 'Staff');
        $this->SetPageTitle('Staff', "{$this->sVAR['HOTEL'][Hotel::Nome]} &bull; {$this->sVAR['CIDADE'][Cidade::Nome]}");
        $this->ViewLoad('hoteis/staff');
    }

    ##Fotos

    private function page_fotos($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $Hotel = $Parametros[0];
        #MODEL
        $this->load->model('galeria');
        $Criterio[Galeria::Vinculo] = 'hoteis';
        $Criterio[Galeria::Slug] = $Hotel;
        #GET
        $this->sVAR['Galeria'] = $this->galeria->Get($Criterio, TRUE, PublicDomain);
        #LOAD
        $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/fotos", lang('fotos_nome'));
        $this->SetPageTitle(lang('fotos_nome'), "{$this->sVAR['HOTEL'][Hotel::Nome]} &bull; {$this->sVAR['CIDADE'][Cidade::Nome]}");
        $this->ViewLoad('hoteis/staff');
    }

    ##Servicios

    private function page_servicios($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        $this->load->helper('typography');
        $this->load->model('servicio');
        $CriterioMeta = array(Metadata::Vinculo => $this->sVAR['HOTEL'][Hotel::Slug], Metadata::Slug => 'servicios');
        $this->sVAR['SERVICIO']['DADOS'] = $this->metadata->Get($CriterioMeta);

        if (!empty($this->sVAR['SERVICIO']['DADOS'])) {
            $this->sVAR['SERVICIO']['DADOS'] = $this->sVAR['SERVICIO']['DADOS'][0];
            $this->sVAR['SERVICIO']['DADOS'] = json_decode($this->sVAR['SERVICIO']['DADOS'][Metadata::MetaDados], TRUE);
        } else {
            $this->sVAR['SERVICIO']['DADOS'] = array(
                'DESK' => array('EN', 'ES'),
                'LINK' => NULL,
                'TITULO' => NULL
            );
        }
        $this->sVAR['SERVICIO']['LISTA'] = $this->servicio->GetByHotel($this->sVAR['HOTEL'][Hotel::Slug], TRUE, TRUE);
        #print_r($this->sVAR);
        $this->Migalhas[] = anchor("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/servicios", lang('servicios_nome'));
        $this->SetPageTitle(lang('ti_serv'));
        $this->ViewLoad('hoteis/servicios');
    }

    ##Guia

    private function page_guia($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE

        if (@$Parametros[2] == 'pdf') {
            #Download do PDF
            $Criterio = array();
            $Criterio[Metadata::Vinculo] = $this->sVAR['HOTEL'][Hotel::Slug];
            $Criterio[Metadata::Slug] = 'pdf_guia';
            $Guia = $this->metadata->Get($Criterio);
            $Guia = end($Guia);
            $Guia[Metadata::MetaDados] = json_decode($Guia[Metadata::MetaDados], TRUE);
            $Guia = PublicDomain . $Guia[Metadata::MetaDados]['IMAGEM'];
            redirect($Guia);
        } else {
            #$this->MenuTop = array();
            $this->load->model('mapa');
            $Nome = strtoupper($this->sVAR['HOTEL'][Hotel::Nome]);
            $this->SetPageTitle(lang('ti_guia') . " {$Nome}");
            $MetaDadosIMG = $this->metadata->Get($this->sVAR['HOTEL'][Hotel::Slug]);
            #
            $this->sVAR['FooterAdd'][] = link_tag(SITEASETS . 'css/mapa/style.css');
            $this->sVAR['FooterAdd'][] = script_tag('http://maps.google.com/maps/api/js?sensor=false');
            $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/map/jquery.gomap-1.3.2.js');
            $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/map/mymaps.js');
            #
            $Marker = array();
            $Marker['icon'] = isset($MetaDadosIMG['icon_maps']['IMAGEM']) ? PublicDomain . $MetaDadosIMG['icon_maps']['IMAGEM'] : NULL;
            $Marker['latitude'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['longitude'];
            $Marker['longitude'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['latitude'];
            $Marker['title'] = $Nome;
            if (isset($MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA])) {
                $Marker['content'] = (empty($MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA])) ? $Nome : $MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA];
            } else {
                $Marker['content'] = $Nome;
            }

            $this->sVAR['LinkGuia'] = site_url("{$this->sVAR['CIDADE'][Cidade::Slug]}/{$this->sVAR['HOTEL'][Hotel::Slug]}/guia/pdf");
            $this->sVAR['LinkJSON'] = site_url("mapa/{$this->sVAR['HOTEL'][Hotel::Slug]}");
            $this->sVAR['TiposPOI'] = $this->mapa->GetTipos($this->IDIOMA, TRUE);
            $this->sVAR['MARKER'] = $Marker;
            $this->ViewLoad('mapas/guia_cidade');
        }
    }

    ##Guia

    private function page_localizacion($Parametros = array()) {
        #CACHE
        $this->SetCache();
        #Fim CACHE
        #$this->MenuTop = array();

        $Nome = strtoupper($this->sVAR['HOTEL'][Hotel::Nome]);
        $this->SetPageTitle(lang('ti_loca') . " {$Nome}");
        $MetaDadosIMG = $this->metadata->Get($this->sVAR['HOTEL'][Hotel::Slug]);
        #
        $this->sVAR['FooterAdd'][] = link_tag(SITEASETS . 'css/mapa/style.css');
        $this->sVAR['FooterAdd'][] = script_tag('http://maps.google.com/maps/api/js?sensor=false');
        $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/map/gmaps.js');
        $this->sVAR['FooterAdd'][] = script_tag(SITEASETS . 'js/map/mymaps2.js');
        #
        $Marker = array();
        $Marker['icon'] = isset($MetaDadosIMG['icon_maps']['IMAGEM']) ? PublicDomain . $MetaDadosIMG['icon_maps']['IMAGEM'] : NULL;
        $Marker['latitude'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['longitude'];
        $Marker['longitude'] = $this->sVAR['HOTEL'][Hotel::MetaDados]['latitude'];
        $Marker['title'] = $Nome;
        if (isset($MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA])) {
            $Marker['content'] = (empty($MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA])) ? $Nome : $MetaDadosIMG['icon_maps']['IMAGEM']['DESC'][$this->IDIOMA];
        } else {
            $Marker['content'] = $Nome;
        }
        #View
        $this->load->model('mapa');
        $this->sVAR['ListaAddress'] = $this->mapa->Get(array(Mapa::Slug => $this->sVAR['HOTEL'][Hotel::Slug], Mapa::Tipo => 'address'), TRUE);
        $this->sVAR['MARKER'] = $Marker;
        $this->ViewLoad('mapas/mapa_direction');
    }

    ##Contato

    private function stact_contacto($Parametros = array(), $Trabalhe = FALSE) {

        if ($this->POST) {
            if (!empty($this->POST['nombre']) && filter_var(@$this->POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->load->library('email');

                $config['protocol'] = 'mail';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';

                $this->email->initialize($config);

                $this->email->from($this->EmailConfig['REMETENTE'][0], $this->EmailConfig['REMETENTE'][0]);
                $this->email->to($this->EmailConfig['DESTINATARIO']);
                if ($Trabalhe) {
                    $this->email->subject('Posto: ' . $this->POST['postos']);
                } else {
                    $this->email->subject('Hotel: ' . $this->POST['hotels']);
                }


                $MSG = NULL;
                $MSG.='<strong>Nombre</strong>: ' . $this->POST['nombre'] . '<br>';
                $MSG.='<strong>Email</strong>: ' . $this->POST['email'] . '<br>';
                if ($Trabalhe) {
                    $MSG.='<strong>Posto</strong>: ' . $this->POST['postos'] . '<br>';
                } else {
                    $MSG.='<strong>Assunto</strong>: ' . $this->POST['hotels'] . '<br>';
                }
                $MSG.='<strong>Mensagem</strong>:<br> ' . nl2br($this->POST['mensaje']) . '<hr>';
                $MSG.=date('d/m/Y H:i:s');

####Anexo

                if (isset($_FILES['ARQUIVO'])) {
                    if ($_FILES['ARQUIVO']['error'] == 0) {
                        #Upload
                        $this->load->library('upload');
                        $config = array();
                        $config['encrypt_name'] = FALSE;
                        $config['upload_path'] = PublicPath . "contato/anexos";
                        $config['allowed_types'] = 'doc|docx|pdf';
                        $config['max_size'] = '1500';
                        #Validapasta
                        $this->ValidaPasta($config['upload_path']);
                        #Inicializa
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('ARQUIVO')) {
                            $ArquivoDados = $this->upload->data();
                            $arquivo = $ArquivoDados['full_path'];
                            $this->email->attach($arquivo);
                        } else {
                            echo 'não foi';
                        }
                    }
                }

                ##########

                $this->email->message($MSG);
                $this->email->send();
                $this->session->set_flashdata('OK', '<strong>' . lang('contacto_ok') . '</strong>');
            } else {
                $this->session->set_flashdata('ERRO', '<b>' . lang('contacto_erro') . '</b>');
            }
            if ($Trabalhe) {
                redirect('trabajaconnosotros');
            } else {
                redirect('contacto');
            }
        } else {
            $this->_MenuTopCidade();
            if ($Trabalhe) {
                #Lista de Vagas
                $this->load->model('vaga');
                $this->sVAR['ListaVagas'] = $this->vaga->Get(NULL, TRUE);
                #Titulo e View
                $this->SetPageTitle(lang('ti_trabalhe'));
                $this->ViewLoad('stact/trabalhe');
            } else {
                $this->_HoteisEnderecos();
                #Dados
                $Criterio = array();
                $Criterio[Metadata::Vinculo] = 'contato';
                $Criterio[Metadata::Slug] = 'testo';
                $Dados = $this->metadata->Get($Criterio);
                $Dados = end($Dados);
                $this->sVAR['ContatoDados'] = json_decode($Dados[Metadata::MetaDados], TRUE);
                #Helper
                $this->load->helper('typography');
                #View
                $this->SetPageTitle(lang('ti_contato'));
                $this->ViewLoad('stact/contacto');
            }
        }
    }

    private function stact_trabajaconnosotros($Parametros = array()) {
        $this->stact_contacto($Parametros, TRUE);
    }

    private function randomFloat($min = 0, $max = 1) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }

    public function _HoteisPrincipais() {

        $this->sVAR['HomeMetaDados'] = $this->metadata->Get('homepage');
        $this->sVAR['HomeMetaDados'] = $this->sVAR['HomeMetaDados']['info'];
        #Destaques
        $Cidades = array();
        $Destaques = array();
        $ListaDestaques = $this->sVAR['HomeMetaDados']['HoteisDestaque'];
        foreach ($ListaDestaques as $Slug) {
            $Hotel = $this->hotel->Get($Slug);
            $Hotel = end($Hotel);
            if (!isset($Cidades[$Hotel[Hotel::Cidade]])) {
                $Cidades[$Hotel[Hotel::Cidade]] = $this->cidade->Get($Hotel[Hotel::Cidade]);
                $Cidades[$Hotel[Hotel::Cidade]] = end($Cidades[$Hotel[Hotel::Cidade]]);
                $Cidades[$Hotel[Hotel::Cidade]] = $Cidades[$Hotel[Hotel::Cidade]][Cidade::Slug];
            }
            #IMAGEM
            $Imagem = $this->metadata->Get(array(Metadata::Vinculo => $Slug, Metadata::Slug => 'logo'));
            $Imagem = end($Imagem);
            $Imagem = json_decode($Imagem[Metadata::MetaDados], TRUE);
            $Imagem = PublicDomain . $Imagem['IMAGEM'];
            #Dados e Link
            $Destaques[$Slug] = array();
            $Destaques[$Slug]['href'] = site_url("{$Cidades[$Hotel[Hotel::Cidade]]}/$Slug");
            $Destaques[$Slug]['src'] = $Imagem;
            $Destaques[$Slug]['title'] = $Hotel[Hotel::Nome];
        }

        $sVAR['HotelDestaques'] = $Destaques;
        $this->sVAR['HotelDestaques'] = $this->load->view('site/comum/destaque_hoteis', $sVAR, TRUE);
    }

    public function _HoteisEnderecos() {
        $getHoteis = $this->hotel->GetAll(TRUE);
        $Hoteis = array();
        $Cidades = array();
        foreach ($getHoteis as $Registro) {
            #Metadados Logo
            $Criterio = array();
            $Criterio[Metadata::Vinculo] = $Registro[Hotel::Slug];
            $Criterio[Metadata::Slug] = 'logo';
            $Dados = $this->metadata->Get($Criterio);
            $Dados = end($Dados);
            $Logo = json_decode($Dados[Metadata::MetaDados], TRUE);
            #Meta Endereço
            $Registro[Hotel::MetaDados] = json_decode($Registro[Hotel::MetaDados], TRUE);
            $Endereco = $Registro[Hotel::MetaDados]['endereco'];
            $Telefone = $Registro[Hotel::MetaDados]['telefone'];
            #Link
            if (!isset($Cidades[$Registro[Hotel::Cidade]])) {
                $Cidades[$Registro[Hotel::Cidade]] = $this->cidade->Get($Registro[Hotel::Cidade]);
                $Cidades[$Registro[Hotel::Cidade]] = end($Cidades[$Registro[Hotel::Cidade]]);
                $Cidades[$Registro[Hotel::Cidade]] = $Cidades[$Registro[Hotel::Cidade]][Cidade::Slug];
            }
            #####
            $Hoteis[$Registro[Hotel::Slug]] = array();
            $Hoteis[$Registro[Hotel::Slug]]['nome'] = $Registro[Hotel::Nome];
            $Hoteis[$Registro[Hotel::Slug]]['logo'] = PublicDomain . $Logo['IMAGEM'];
            $Hoteis[$Registro[Hotel::Slug]]['endereco'] = $Endereco;
            $Hoteis[$Registro[Hotel::Slug]]['telefone'] = $Telefone;
            $Hoteis[$Registro[Hotel::Slug]]['link'] = site_url("{$Cidades[$Registro[Hotel::Cidade]]}/{$Registro[Hotel::Slug]}");
        }
        $this->sVAR['HoteisEndereco'] = $Hoteis;
    }

    public function _MenuTopCidade() {
        empty($this->MenuTop);
        $getCidades = $this->cidade->GetAll(TRUE);
        foreach ($getCidades as $Cidade) {
            $this->MenuTop[] = anchor($Cidade[Cidade::Slug], $Cidade[Cidade::Nome]);
        }
    }

    private function SetCache() {
        if ($this->CacheHabilita) {
            $this->output->cache($this->CacheTempo);
        }
    }

#FIM
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */