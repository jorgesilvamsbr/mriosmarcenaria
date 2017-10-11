<?php

class CadastraUsuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->gerenciaLogin->estaLogado();
    }

    public function index() {
        $data['nomeDoUsuario'] = $this->gerenciaLogin->obterNomeDoUsuarioDaSesao();

        $this->load->view('admin/head', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/cadastraUsuario');
        $this->load->view('admin/footer');
    }

    public function inserir() {
        $data['nome'] = $this->input->post('nome');
        $data['login'] = $this->input->post('login');
        $data['senha'] = $this->input->post('senha');
        $confirmacaoDeSenha = $this->input->post('confirmacaoDeSenha');
        $data['status'] = 1;

        if ($data['senha'] == $confirmacaoDeSenha) {
            $data['senha'] = md5($data['senha']);
            $this->model->inserirItemNa('usuario', $data);
            header('Location:' . base_url() . 'index.php/cadastraUsuario?sucesso=' . urlencode("Usuário " . $data['nome'] . " cadastrado com sucesso!"));
        } else {
            header('Location:' . base_url() . 'index.php/cadastraUsuario?erro=' . urlencode("Ocorreu um erro ao tentar cadastrar " . $data['nome'] . ". As senhas não conferem"));
        }
    }

    public function editarUsuario() {
        $data['id'] = $this->input->get('idUsuario');
        $data['nome'] = $this->input->post('nome');
        $data['login'] = $this->input->post('login');
        $data['senha'] = $this->input->post('senha');
        $confirmacaoDeSenha = $this->input->post('confirmacaoDeSenha');
        $data['status'] = $this->input->post('status');

        if ($data['senha'] == $confirmacaoDeSenha) {
            $data['senha'] = md5($data['senha']);
            $this->model->atualizarItemNa('usuario', $data);
            header('Location:' . base_url() . 'index.php/cadastraUsuario?sucesso=' . urlencode("Usuário " . $data['nome'] . " editado com sucesso!"));
        } else {
            header('Location:' . base_url() . 'index.php/cadastraUsuario?erro=' . urlencode("Ocorreu um erro ao tentar editar " . $data['nome'] . ". As senhas não conferem"));
        }
    }

}
