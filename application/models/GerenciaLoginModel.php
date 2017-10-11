<?php

class GerenciaLoginModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function existeOUsuarioESenhaInformadoNoFormulario() {
        $this->db->where('login', $this->input->post('login'));
        $this->db->where('senha', md5($this->input->post('senha')));
        $this->db->where('status', 1);
        return $this->db->get('usuario')->row();
    }

    public function estaLogado() {
        $logged = $this->session->userdata('logged');
        if (!isset($logged) || $logged != true) {
            redirect(base_url());
        }
    }

    public function obterNomeDoUsuarioDaSesao() {
        $userData = $this->session->userdata;
        return $userData['username'];
    }

}
