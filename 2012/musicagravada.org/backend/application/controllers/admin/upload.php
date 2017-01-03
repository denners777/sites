<?php

class Upload extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('admin');
    }

    public function do_upload($Musica = NULL, $TIPO = NULL) {

        $Arquivo = $_FILES['ARQUIVO'];
        if($_FILES){

        if ($TIPO == 'capa') {
            $config['upload_path'] = './uploads/capa/';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = '1000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['file_name'] = 'discografia_'.$Musica.'.jpg';
            $TCampo = Musica::FOTO;
        } else
        if ($TIPO == 'mp3') {
            $config['upload_path'] = './uploads/mp3/';
            $config['allowed_types'] = 'mp3';
            $config['max_size'] = '10240';
            $config['file_name'] = 'discografia_'.$Musica.'.mp3';
            $TCampo = Musica::MP3;
        } else
        if ($TIPO == 'pdf') {
            $config['upload_path'] = './uploads/pdf/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '5120';
            $config['file_name'] = 'discografia_'.$Musica.'.pdf';
            $TCampo = Musica::PDF;
        }

        $config['overwrite'] = TRUE;
        //print_r($config);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ARQUIVO')) {
            $this->session->set_flashdata('ERRO', $this->upload->display_errors('<p>', '</p>'));
        } else {
            $DATA = $this->upload->data();
            $Dados[$TCampo] = $DATA['file_name'];
            $this->musica->Save($Dados, $Musica);
            $this->session->set_flashdata('SUCESSO', "Arquivo enviado!");
        }
        redirect('admin/musicas/atualizar/'.$Musica);
    }else{
         $this->session->set_flashdata('ERRO', $this->upload->display_errors('<p>', '</p>'));
          redirect('admin/musicas/atualizar/'.$Musica);
    }
    }

    public function do_upload2($PESSOA = NULL) {

        $Arquivo = $_FILES['ARQUIVO'];
        if($_FILES && is_numeric($PESSOA)){

        $config['upload_path'] = './uploads/capa/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
       $config['file_name'] = 'discografia_'.$PESSOA.'.jpg';
       $config['overwrite'] = TRUE;
        $TCampo = Pessoa::FOTO;


        //print_r($config);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ARQUIVO')) {
            $this->session->set_flashdata('ERRO', $this->upload->display_errors('<p>', '</p>'));
        } else {
           $DATA = $this->upload->data();
            $Dados[$TCampo] = $DATA['file_name'];
            $this->pessoa->Save($Dados, $PESSOA);
            $this->session->set_flashdata('SUCESSO', "Arquivo enviado!");
        }
        redirect('admin/interpretes/atualizar/' . $PESSOA);
        }else{
            $this->session->set_flashdata('ERRO', $this->upload->display_errors('<p>', '</p>'));
          redirect('admin/interpretes/atualizar/'.$PESSOA);
        }
    }

}
