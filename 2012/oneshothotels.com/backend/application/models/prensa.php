<?php

/*
 * Description of preca
 *
 * @author luiz.vinicius73@gmail.com
 */

class Prensa extends MY_Model {

    const TABELA = 'prensa';
    const ID = 'p_ID';
    const Titulo = 'p_Titulo';
    const Data = 'p_Data';
    const Dados = 'p_Dados';
    const Arquivo = 'p_Arquivo';
    const Imagem = 'p_Foto';

    public function GetList() {
        $Lista = $this->db->get(self::TABELA);
        $this->Dados = array();
        foreach ($Lista->result_array() as $Dados) {
            $this->Dados[$Dados[self::ID]] = $Dados;
            $this->Dados[$Dados[self::ID]][self::Dados] = json_decode($this->Dados[$Dados[self::ID]][self::Dados], TRUE);
            $this->Dados[$Dados[self::ID]][self::Arquivo] = (empty($this->Dados[$Dados[self::ID]][self::Arquivo])) ? NULL : PublicDomain . $this->Dados[$Dados[self::ID]][self::Arquivo];
            $this->Dados[$Dados[self::ID]][self::Data] = (empty($this->Dados[$Dados[self::ID]][self::Data])) ? NULL : $this->MakeData($this->Dados[$Dados[self::ID]][self::Data], TRUE);
        }
        return $this->Dados;
    }

    public function Get($Criterio = NULL, $PublicDomain = NULL) {
        $Lista = parent::Get($Criterio);
        $this->Dados = array();
        if (is_array($Lista)) {
            foreach ($Lista as $Dados) {
                $this->Dados[$Dados[self::ID]] = $Dados;
                $this->Dados[$Dados[self::ID]][self::Dados] = json_decode($this->Dados[$Dados[self::ID]][self::Dados], TRUE);
                $this->Dados[$Dados[self::ID]][self::Arquivo] = (empty($this->Dados[$Dados[self::ID]][self::Arquivo])) ? NULL : $PublicDomain . $this->Dados[$Dados[self::ID]][self::Arquivo];
                $this->Dados[$Dados[self::ID]][self::Imagem] = (empty($this->Dados[$Dados[self::ID]][self::Imagem])) ? NULL : $PublicDomain . $this->Dados[$Dados[self::ID]][self::Imagem];
                $this->Dados[$Dados[self::ID]][self::Data] = (empty($this->Dados[$Dados[self::ID]][self::Data])) ? NULL : $this->MakeData($this->Dados[$Dados[self::ID]][self::Data], TRUE);
            }
        }
        return $this->Dados;
    }

    public function Salva($Dados = array(), $Criterio = NULL) {
        #Prepara Dados
        $Dados[self::Dados] = (empty($Dados[self::Dados])) ? NULL : json_encode($Dados[self::Dados]);
        $Dados[self::Data] = (empty($Dados[self::Data])) ? NULL : $this->MakeData($Dados[self::Data]);
        #Executa Ação
        $R = parent::Salva($Dados, $Criterio);
        return $R;
    }

}