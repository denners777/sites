<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paginas
 *
 * @author Conecte_Estudio
 */
class paginas extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('ajudantes');
        $Pagina--;
        $this->VAR['ListaMusicas'] = $this->musica->GetAll($Pagina);
        $this->ViewLoad('admin/musicas/lista');
    }

    public function editar($Slug = NULL) {
        if (is_string($Slug)) {
            if (empty($this->POST)) {
                //Pega no DB
                $Pagina = $this->pagina->Get($Slug);
                //Não Localizado
                if (empty($Pagina)) {
                    $this->session->set_flashdata('ERRO', '<b>Página inválida!</b>');
                    redirect('admin/paginas');
                } else {
                    $Pagina = $Pagina[0];
                    $Pagina['IDIOMAS'] = json_decode($Pagina[Pagina::DADOS], true);
                    unset($Pagina[Pagina::DADOS]);
                    $this->VAR['PAGINA'] = $Pagina;
					$this->ViewLoad('admin/paginas/pagina_frm_edit');
                }
            } else {
                //Executa atualização
                $this->exeAtualiza($Slug);
            }
        } else {
            $this->session->set_flashdata('ERRO', '<b>Requisição inválida!</b>');
            redirect('admin/paginas');
        }
    }

    private function exeAtualiza($Slug) {
        //Prepara Dados
        $Testo = elements(array('PTBR', 'ENUS'), $this->POST);
        $Dados[Pagina::DADOS] = json_encode($Testo);

        //EXECUTA AÇÂO
        $ACAO = $this->pagina->Save($Dados, $this->POST[Pagina::ID]);
        if ($ACAO) {
            $this->session->set_flashdata('SUCESSO', '<b>Página Atualizada!</b>');
        } else {
            $this->session->set_flashdata('ERRO', '<b>Página inválida!</b>');
        }
        //Redireciona
        redirect("admin/paginas/editar/{$Slug}");
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

