<?php

$Site['Nome'] = 'One Shot Hotels';
$MenuPrincipal = array();
$MenuPrincipal[] = array(
    'label' => 'HOME',
    'desc' => 'Administração',
    'slug' => '',
);
$MenuPrincipal[] = array(
    'label' => 'Cidades',
    'desc' => 'Gerenciamento de Cidades',
    'slug' => 'cidades',
);

$MenuPrincipal[] = array(
    'label' => 'Hoteis',
    'desc' => 'Gerenciamento de Hoteis',
    'slug' => 'hoteis',
);

$MenuPrincipal[] = array(
    'label' => 'Home Page',
    'desc' => 'Configuração da pagina inicial',
    'slug' => 'site/home',
);
$MenuPrincipal[] = array(
    'label' => 'Eventos',
    'desc' => 'Eventos One Shot Projects.',
    'slug' => 'eventos/project',
);

$SideBar = array();
$SideBar['Cidades']['info'] = array(
    'icon' => 'marker.png',
    'label' => 'Cidades',
);
$SideBar['Cidades']['links'][] = array(
    'label' => 'Inicio',
    'desc' => 'Gerenciamento de Cidades',
    'slug' => 'cidades',
);
$SideBar['Cidades']['links'][] = array(
    'label' => 'Cadastro',
    'desc' => 'Cadastro de Cidades',
    'slug' => 'cidades/cadastro',
);


$SideBar['Hoteis']['info'] = array(
    'icon' => 'home.png',
    'label' => 'Hoteis',
);
$SideBar['Hoteis']['links'][] = array(
    'label' => 'Inicio',
    'desc' => 'Cadastro de Hoteis',
    'slug' => 'hoteis',
);
$SideBar['Hoteis']['links'][] = array(
    'label' => 'Cadastro',
    'desc' => 'Cadastro de Hoteis',
    'slug' => 'hoteis/cadastro',
);


$SideBar['CongfigsSite']['info'] = array(
    'icon' => 'globe.png',
    'label' => 'Site',
);
$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'FAQ',
    'desc' => 'Registro y edición de preguntas frecuentes.',
    'slug' => 'faqs',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Legales',
    'desc' => 'Lista de legales.',
    'slug' => 'legales',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Prensa',
    'desc' => 'Regístrese prensa.',
    'slug' => 'prensas',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Eventos',
    'desc' => 'Eventos One Shot Projects.',
    'slug' => 'eventos/project',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Home Page',
    'desc' => 'Configuração da pagina inicial',
    'slug' => 'site/home',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Contato',
    'desc' => 'Configuração da pagina de contato',
    'slug' => 'site/contato',
);

$SideBar['CongfigsSite']['links'][] = array(
    'label' => 'Vacantes',
    'desc' => 'Ofertas de trabajo',
    'slug' => 'site/vagas',
);

$SideBar['ConfigsADM']['info'] = array(
    'icon' => 'cog.png',
    'label' => 'Administração',
);

$SideBar['ConfigsADM']['links'][] = array(
    'label' => 'Usuários',
    'desc' => 'Gerenciamento de usuários.',
    'slug' => 'usuarios',
);


$config['Site'] = $Site;
$config['MenuPrincipal'] = $MenuPrincipal;
$config['AdminSidebar'] = $SideBar;