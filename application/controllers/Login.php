<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function logar() {
        $usuario = $this->gerenciaLogin->existeOUsuarioESenhaInformadoNoFormulario();
        if (isset($usuario)) {
            $data = array('username' => $usuario->nome, 'logged' => true);
            $this->session->set_userdata($data);
            redirect(base_url() . 'index.php/itens');
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    public function destruirSessao() {
        $this->session->sess_destroy();
            redirect(base_url());
    }

}
