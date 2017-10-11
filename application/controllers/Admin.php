<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->gerenciaLogin->estaLogado();
    }

    public function index() {
        $data['nomeDoUsuario'] = $this->gerenciaLogin->obterNomeDoUsuarioDaSesao();
        
        $this->load->helper('url');
        $this->load->view('admin/head', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
}
