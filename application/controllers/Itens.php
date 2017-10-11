<?php

class Itens extends CI_Controller {

    const CAMINHO_DA_IMAGEM = "assets/admin/img/portfolio/";

    private $data;

    public function __construct() {
        parent::__construct();
        $this->gerenciaLogin->estaLogado();
        $this->load->model('ImagemDoItemModel');
    }

    public function index() {
        $this->buscarDadosPadrao();

        $this->load->view('admin/head', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/itens', $this->data);
        $this->load->view('admin/footer');
    }

    public function cadastraItem() {
        $this->buscarDadosPadrao();

        $this->load->view('admin/head', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/cadastraItem', $this->data);
        $this->load->view('admin/footer');
    }

    public function edita() {
        $this->buscarDadosPadrao();

        $idItem = $this->input->get('idItem');
        $this->data['itemSelecionado'] = $this->model->buscarItemPorId('item', $idItem);

        $this->load->view('admin/head', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/editaItem', $this->data);
        $this->load->view('admin/footer');
    }

    public function excluir() {
        $idItem = $this->input->get('idItem', TRUE);
        $this->excluirImagensDoItemNoDisco($idItem);
        $this->ImagemDoItemModel->excluirItem($idItem);
        header('Location:' . base_url() . 'index.php/itens');
    }

    private function buscarDadosPadrao() {
        $this->data['itens'] = $this->model->obterTodosDa('item');
        $this->data['categorias'] = $this->model->obterTodosDa('categoria');
        $this->data['nomeDoUsuario'] = $this->gerenciaLogin->obterNomeDoUsuarioDaSesao();
    }

    private function excluirImagensDoItemNoDisco($idItem) {
        $categoriaDoItem = $this->ImagemDoItemModel->buscarCategoriaDoItem($idItem);
        $listadeImagens = $this->ImagemDoItemModel->obterTodasAsImagensDoItemPelo($idItem);
        foreach ($listadeImagens as $imagem) {
            $this->excluirImagem($imagem->nome, $categoriaDoItem);
        }
    }

    public function editarItem() {
        $data['id'] = $this->input->get('idVeiculo', TRUE);
        $data['id_da_marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['valor'] = $this->input->post('valor');
        $data['valor_com_isencao'] = $this->input->post('valor_com_isencao');
        $data['descricao'] = $this->input->post('descricao');

        $imagem = $_FILES["arquivo"];
        if (empty($imagem['name'])) {
            $this->model->atualizarItemNa('veiculo', $data);
        } else {
            $marca = $this->model->buscarItemPorId('marca', $data['id_da_marca']);
            $this->excluirImagem($data['id'], $marca);
            $data['nome_da_imagem'] = $this->salvarImagem($marca);
            $this->model->atualizarItemNa('veiculo', $data);
        }

        header('Location:' . base_url() . 'index.php/veiculos');
    }

    private function excluirImagem($nomeDaImagem, $nomeDaPasta) {
        unlink(self::CAMINHO_DA_IMAGEM . $nomeDaPasta . '/' . $nomeDaImagem);
    }

}
