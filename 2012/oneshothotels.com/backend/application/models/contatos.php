<?php

/**
 * @author Conecte_Estudio
 */
class Contatos extends MY_Model {

    const TABELA = 'contatos';
    const ID = 'co_ID';
    const Nome = 'co_Nome';
    const Email = 'co_Email';
    const Data = 'co_Data';
    const Dados = 'co_Dados';

    public function __construct() {
        parent::__construct();
    }

}