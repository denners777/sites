<?php

class Mkt extends CI_Controller {

    public $Migalhas = array();
    public $MenuTop = array();
    public $MenuFooter = array();
    public $MetaTags = array();

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $Nome = $this->POST['name'];
        $Email = $this->POST['email'];
        
        // Inicia o cURL
        $ch = curl_init();
        
        // Define a URL original (do formulário de login)
        curl_setopt($ch, CURLOPT_URL, 'http://oneshothotels.com/mkt/onemail.php');
        
        // Habilita o protocolo POST
        curl_setopt ($ch, CURLOPT_POST, 1);
        
        // Define os parâmetros que serão enviados (usuário e senha por exemplo)
        curl_setopt ($ch, CURLOPT_POSTFIELDS, "name={$Nome}&email={$Email}&group=1");
        
        // Imita o comportamento patrão dos navegadores: manipular cookies
        curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        
        // Define o tipo de transferência (Padrão: 1)
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // Executa a requisição
        $store = curl_exec ($ch);
        
        // Define uma nova URL para ser chamada (após o login)
        //curl_setopt($ch, CURLOPT_URL, 'http://www.site.com/minha_conta.php');
        
        // Executa a segunda requisição
        $content = curl_exec ($ch);
        echo $content;
        // Encerra o cURL
        curl_close ($ch);
    }

}