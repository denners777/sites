<?php

/**
 * Description of skin
 *
 * @author luiz.vinicius73@gmail.com
 */
class Vaga extends MY_Model {

    const TABELA = 'vagas';
    const ID = 'v_ID';
    const Local = 'v_Local';
    const MetaDados = 'v_Dados';

    public function __construct() {
        parent::__construct();
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        if (isset($Dados[self::MetaDados])) {
            $Dados[self::MetaDados] = (is_array($Dados[self::MetaDados])) ? json_encode($Dados[self::MetaDados]) : $Dados[self::MetaDados];
        }

        return parent::Salva($Dados, $Criterio);
    }

    public function Get($Criterio = NULL, $Tratar = FALSE) {
        $Dados = array();
        $R = parent::Get($Criterio);
        if (is_array($R)) {
            foreach ($R as $Registro) {
                $Registro[self::MetaDados] = ($Tratar) ? json_decode($Registro[self::MetaDados], TRUE) : $Registro[self::MetaDados];
                $Dados[$Registro[self::ID]] = $Registro;
            }
        }
        return $Dados;
    }

    public function GetByString($Criterio) {
        $this->db->where(self::Local, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->return_array();
    }

}

?>
