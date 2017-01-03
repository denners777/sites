<?php

/**
 * Description of skin
 *
 * @author luiz.vinicius73@gmail.com
 */
class Skin extends MY_Model {

    const TABELA = 'skins';
    const ID = 's_ID';
    const Slug = 's_Vinculo';
    const Nome = 's_Nome';
    const Idioma = 's_Idioma';
    const MetaDados = 's_Dados';

    public function __construct() {
        parent::__construct();
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        if (isset($Dados[self::MetaDados])) {
            $Dados[self::MetaDados] = (is_array($Dados[self::MetaDados])) ? json_encode($Dados[self::MetaDados]) : $Dados[self::MetaDados];
        }
        $Antigo = $this->Get($Criterio);
        if (empty($Antigo)) {
            return parent::Salva($Dados);
        } else {
            return parent::Salva($Dados, $Criterio);
        }
    }

    public function Get($Criterio = NULL, $Tratar = FALSE) {
        $Dados = array();
        $R = parent::Get($Criterio);
        if (is_array($R)) {
            foreach ($R as $Registro) {
                $Registro[self::MetaDados] = ($Tratar) ? json_decode($Registro[self::MetaDados], TRUE) : $Registro[self::MetaDados];
                $Dados[$Registro[self::Nome]] = $Registro;
            }
        }
        return $Dados;
    }

    public function GetSkins($Slug = NULL, $Idioma) {
        $R = array();
        if (is_string($Slug) && is_string($Idioma)) {
            $Criterio = array();
            $Criterio[self::Slug] = $Slug;
            $Criterio[self::Idioma] = $Idioma;
            $get = parent::Get($Criterio);
            if (!empty($get)) {
                foreach ($get as $Registro) {
                    $Registro[self::MetaDados] = PublicDomain . $Registro[self::MetaDados];
                    $R[$Registro[self::Nome]] = $Registro[self::MetaDados];
                }
            }
        }

        return $R;
    }

    public function GetByString($Criterio) {
        $this->db->where(self::Slug, $Criterio);
        $Query = $this->db->get(self::TABELA);
        return $Query->return_array();
    }

}

?>
