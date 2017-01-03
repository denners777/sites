<?php

/*
  function GeraCampo($Dados = array(), $Valor = NULL) {
  //    $Dados = elements(array('type','slug'), $Dados,NULL);
  //    $Metadados = elements(array('class','name'), $array);
  $Retorno = NULL;
  if (!empty($Dados) && isset($Dados['type']) && isset($Dados['id'])) {
  $Nome = $Dados['id'];
  $TIPO = $Dados['type'];
  unset($Dados['type']);

  $OPTIONS = array();

  //Nome
  if (!isset($Dados['name']))
  $Dados['name'] = $Nome;
  //Opções
  if (!isset($Dados['options'])) {
  $OPTIONS = $Dados['options'];
  unset($Dados['options']);
  }


  //Text
  if ($TIPO == 'text') {
  $Dados['value'] = $Valor;
  $Retorno = form_input($Dados);
  //Textarea
  } else if ($TIPO == 'textarea') {
  $Dados['value'] = $Valor;
  $Retorno = form_textarea($Dados);
  //mult
  } else if ($TIPO == 'multiselect') {
  $Extra = ArrayToString($Dados);
  $Retorno = form_multiselect($Nome, $OPTIONS, $Valor, $Extra);
  //
  } else if ($TIPO == 'dropdown') {
  $Extra = ArrayToString($Dados);
  $Retorno = form_dropdown($Nome, $OPTIONS, $Valor, $Extra);
  }
  }
  return $Retorno;
  }

  function ArrayToString($Array = array()) {
  $Retorno = NULL;
  foreach ($array as $key => $value) {
  $Retorno.= "{$key}='{$value}'";
  }
  return $Retorno;
  }
 */

class GeraCampo {

    private $TIPO = 'text';
    private $Slug, $ID, $VALOR;
    private $META = array();
    private $OPT = array();
    private $Result = NULL;

    public function __construct($Slug = NULL, $TIPO = NULL, $VALOR = NULL) {
        if (is_string($TIPO)) {
            $this->TIPO = $TIPO;
        }
        $this->Slug = $Slug;
        $this->VALOR = $VALOR;
    }

    public function SetOPT($OPT = array()) {
        $this->OPT = $OPT;
    }

    public function SetMETA($META = array()) {
        if (is_array($META)) {
            $this->META = $META;
        }
    }

    public function Make() {
        if (is_string($this->Slug)) {
            switch ($this->TIPO) {
                case 'text' :
                    $this->Make_text();
                    break;
                case 'textarea':
                    $this->Make_textarea();
                    break;
                case 'option':
                    $this->Make_dropdown();
                    break;
                case 'multiselect':
                    $this->Make_multiselect();
                    break;
            }
        }

        return $this->Result;
    }

    private function Make_text() {
        $this->Result = form_input($this->PrepMETA());
    }

    private function Make_textarea() {
        $this->Result = form_textarea($this->PrepMETA());
    }

    private function Make_dropdown() {
        $this->Result = form_dropdown($this->Slug, $this->OPT, $this->VALOR, $this->PrepMETA(NULL));
    }

    private function Make_multiselect() {
        $this->Result = form_multiselect($this->Slug . '[]', $this->OPT, $this->VALOR, $this->PrepMETA(NULL));
    }

    private function PrepMETA($R = 'array') {
        if (!isset($this->META['id'])) {
            $this->META['id'] = url_title($this->Slug);
        }
        if ($R == 'array') {
            $META = $this->META;
            $META['name'] = $this->Slug;
            $META['type'] = $this->TIPO;
            $META['value'] = $this->VALOR;
        } else {
            $META = NULL;
            foreach ($this->META as $Chave => $Valor) {
                $META.="{$Chave}='{$Valor}' ";
            }
        }

        return $META;
    }
    
    public function SerRequired($REQ = TRUE){
        if($REQ){
            $this->META['required'] = 'required';
        }else{
            $this->META['required'] = NULL;
            unset($this->META['required']);
        }
    }
    public function AddClass($Class = NULL) {
        if (isset($this->META['class'])) {
            $this->META['class'].=' '.$Class;
        } else {
            $this->META['class'] = $Class;
        }
    }

}