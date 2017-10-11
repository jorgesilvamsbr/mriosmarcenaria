<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ImagemDoItemModel');
    }
    
    public function index() {
        $data['categorias'] = $this->model->obterTodosDa('categoria');
        $data['itens'] = $this->ImagemDoItemModel->obterTodosOsItemComImagemDeCapa();
        $this->load->view('site/index', $data);
    }

    public function obterImagensDoItem(){
        $idDaImagem = $this->input->get('id', TRUE);
        $imagens = $this->ImagemDoItemModel->obterTodasAsImagensDoItemPelo($idDaImagem);
        header('Content-Type: application/json');
        echo json_encode($imagens);
    }
}