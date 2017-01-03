<?php

/**
 * Description of mapa
 *
 * @author luiz.vinicius73@gmail.com
 */
class Mapa extends MY_Model {

    const TABELA = 'mapas';
    const ID = 'map_ID';
    const Slug = 'map_Vinculo';
    const Tipo = 'map_Tipo';
    const MetaDados = 'map_Dados';

    public $Tipos = array();

    public function __construct() {
        parent::__construct();
    }

    public function GetTipos($Idioma = 'ES', $ALL = FALSE) {

        if ($ALL) {
            $this->Tipos['ES']['all'] = 'Elije aqui';
            $this->Tipos['EN']['all'] = 'Choose an option';
        }

        #Espanhol
        $this->Tipos['ES']['shop_roupas'] = 'Tiendas de Ropa';
        $this->Tipos['ES']['restaurantes'] = 'Restaurantes';
        $this->Tipos['ES']['galerias_arte'] = 'Galerías de Arte';
        $this->Tipos['ES']['nigth_clubs'] = 'Night Clubs';
        $this->Tipos['ES']['bares'] = 'Bares';
        $this->Tipos['ES']['spas'] = 'SPA´s';
        $this->Tipos['ES']['livrarias'] = 'Librerías';
        $this->Tipos['ES']['teatros'] = 'Teatros';
        #Ingles
        $this->Tipos['EN']['shop_roupas'] = 'Clothing stores';
        $this->Tipos['EN']['restaurantes'] = 'Restaurants';
        $this->Tipos['EN']['galerias_arte'] = 'Art Galleries';
        $this->Tipos['EN']['nigth_clubs'] = 'Night Clubs';
        $this->Tipos['EN']['bares'] = 'Bars';
        $this->Tipos['EN']['spas'] = 'SPA´s';
        $this->Tipos['EN']['livrarias'] = 'Libraries';
        $this->Tipos['EN']['teatros'] = 'Theaters';

        return $this->Tipos[$Idioma];
    }

    public function GetByString($Slug) {
        $this->db->where(self::Slug, $Slug);
        $this->db->where(self::Tipo, 'poi');
        $Query = $this->db->get(self::TABELA);
        return $Query->result_array();
    }

    public function Get($Criterio = NULL, $Tratar = FALSE) {
        $R = parent::Get($Criterio);
        if (is_array($R)) {
            if ($Tratar) {
                $Dados = array();
                foreach ($R as $Registro) {
                    $Registro[self::MetaDados] = json_decode($Registro[self::MetaDados], TRUE);
                    $Dados[$Registro[self::ID]] = $Registro;
                }
                $R = $Dados;
                unset($Dados);
            }
        } else {
            $R = array();
        }
        return $R;
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        $Dados[self::MetaDados] = json_encode($Dados[self::MetaDados]);
        return parent::Salva($Dados, $Criterio);
    }

}

?>
