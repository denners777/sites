<?php

/**
 * @author Conecte_Estudio
 */
class Metadata extends MY_Model {

    const TABELA = 'metadados';
    const ID = 'm_ID';
    const Vinculo = 'm_VinculoID';
    const Slug = 'm_NomeMeta';
    const MetaDados = 'm_Dados';

    public function __construct() {
        parent::__construct();
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        //Pega Meta Data
        $Antiga = $this->Get($Criterio);
        $Dados[self::MetaDados] = (is_array($Dados[self::MetaDados])) ? json_encode($Dados[self::MetaDados]) : $Dados[self::MetaDados];
        //Ve se ela não existe
        if (empty($Antiga)) {
            return parent::Salva($Dados);
            //Se exixte cadastra
        } else {
            return parent::Salva($Dados, $Criterio);
        }
    }

    public function GetByString($Criterio) {
        $this->GetByVinculo($Criterio);
        return $this->Dados;
    }

    private function GetByVinculo($Criterio) {
        $this->Dados = array();
        $this->db->where(self::Vinculo, $Criterio);
        $Query = $this->db->get(self::TABELA);
        $Dados = $Query->result_array();
        if (!empty($Dados)) {
            foreach ($Dados as $MetaDado) {
                $this->Dados[$MetaDado[self::Slug]] = json_decode($MetaDado[self::MetaDados], TRUE);
            }
        }
    }

}