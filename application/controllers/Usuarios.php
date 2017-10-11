<?php

class Usuarios extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->gerenciaLogin->estaLogado();
    }

    public function index() {
        $this->buscarDadosPadrao();

        $this->load->view('admin/head', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/usuarios', $this->data);
        $this->load->view('admin/footer');
    }

    public function edita() {
        $this->buscarDadosPadrao();
        $idUsuario = $this->input->get('idUsuario');
        
        $this->data['usuarioSelecionado'] = $this->model->buscarItemPorId('usuario', $idUsuario);

        $this->load->view('admin/head', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/editaUsuario', $this->data);
        $this->load->view('admin/footer');
    }

    public function excluir() {
        $idUsuario = $this->input->get('idUsuario', TRUE);
        $this->model->excluirItemNa('usuario', $idUsuario);
        header('Location:' . base_url() . 'index.php/usuarios');
    }

    private function buscarDadosPadrao() {
        $this->data['nomeDoUsuario'] = $this->gerenciaLogin->obterNomeDoUsuarioDaSesao();
        $this->data['usuarios'] = $this->model->obterTodosDa('usuario');
    }

}
