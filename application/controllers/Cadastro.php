<?php

class Cadastro extends CI_Controller {

    const CAMINHO_DA_IMAGEM = "assets/admin/img/portfolio/";

    public function __construct() {
        parent::__construct();
        $this->gerenciaLogin->estaLogado();
    }

    public function index() {
        $data['categorias'] = $this->model->obterTodosDa('categoria');
        $data['nomeDoUsuario'] = $this->gerenciaLogin->obterNomeDoUsuarioDaSesao();

        $this->load->view('admin/head', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/cadastraItem', $data);
        $this->load->view('admin/footer');
    }

    public function salvar() {
        $data['id_da_categoria'] = $this->input->post('categoria');
        $data['descricao'] = $this->input->post('descricao');

        $data['id_item'] = $this->model->inserirItemNa('item', $data);
        $data['id_item_imagem'] = $this->model->inserirItemNa('item_imagem', array('id_item' => $data['id_item']));
        $this->model->atualizarItemNa('item', array('id_item_imagem' => $data['id_item_imagem'], 'id' => $data['id_item']));

        $data['categoria'] = $this->model->buscarItemPorId('categoria', $data['id_da_categoria']);
        $this->salvarImagem($data);

        header('Location:' . base_url() . 'index.php/cadastro?sucesso=Item cadastrado com sucesso!');
    }

    private function salvarImagem($data) {
        $imagem = $_FILES["arquivos"];

        $cpt = count($_FILES['arquivos']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            // Aplica as configurações do arquivo
            $_FILES['userfile']['name'] = $imagem['name'][$i];
            $_FILES['userfile']['type'] = $imagem['type'][$i];
            $_FILES['userfile']['tmp_name'] = $imagem['tmp_name'][$i];
            $_FILES['userfile']['error'] = $imagem['error'][$i];
            $_FILES['userfile']['size'] = $imagem['size'][$i];

            $pastaDaImagem = $this->criarPastaDaImagem($data['categoria']);
            //Configurações da imagem
            $config['upload_path'] = $pastaDaImagem;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '30000';
            $config['max_width'] = '100000';
            $config['max_height'] = '380000';

            $this->load->library('upload', $config);

            // Tenta realizar o upload do arquivo, caso de falha retorna para a página que chamou o serviço com mensagem de erro
            if (!$this->upload->do_upload()) {
                header('Location:' . base_url() . 'index.php/cadastro?erro=' . urlencode("Ocorreu um erro ao enviar a imagem: <b>" . $this->upload->display_errors() . "</b>"));
                exit;
            } else {
                // Realiza o upload do arquivo
                $this->upload->data();
                $resultadoDoUploadDaImagem = array('upload_data' => $this->upload->data());
                foreach ($resultadoDoUploadDaImagem as $arquivo) {
                    $nomeDaImagem = md5(uniqid(time())) . "" . $arquivo['file_ext'];
                    rename($pastaDaImagem . "" . $arquivo['file_name'], $pastaDaImagem . $nomeDaImagem);
                }
                $dataDaImagem['nome'] = $nomeDaImagem;
                $dataDaImagem['id_item_imagem'] = $data['id_item_imagem'];
                $this->model->inserirItemNa('imagem', $dataDaImagem);
            }
        }
    }

    private function criarPastaDaImagem($marca) {
        $pastaDaImagem = self::CAMINHO_DA_IMAGEM . $marca->nome;
        if (!file_exists($pastaDaImagem)) {
            mkdir($pastaDaImagem, 0777);
        }
        return $pastaDaImagem .= "/";
    }

}
