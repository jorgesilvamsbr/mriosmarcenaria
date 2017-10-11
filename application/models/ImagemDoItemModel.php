<?php

class ImagemDoItemModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obterTodasAsImagensDoItemPelo($idDoItem) {
        $this->db->from('imagem');
        $this->db->join('item_imagem', 'imagem.id_item_imagem = item_imagem.id');
        $this->db->where('item_imagem.id_item', $idDoItem);
        return $this->db->get()->result();
    }

    public function obterTodosOsItemComImagemDeCapa() {
        $consulta = ""
                . "SELECT item.id as id, item.id_da_categoria as id_da_categoria, (SELECT nome FROM imagem WHERE id_item_imagem = item_imagem.id LIMIT 1) as nome_da_imagem"
                . " FROM item"
                . " JOIN item_imagem ON item.id_item_imagem = item_imagem.id";
        $resultado = $this->db->query($consulta);
        return $resultado->result();
    }

    public function buscarCategoriaDoItem($idDoItem) {
        $this->db->where('item.id', $idDoItem);
        $idCategoria = $this->db->get('item')->row('id_da_categoria');
        $this->db->where('categoria.id', $idCategoria);
        return $this->db->get('categoria')->row('nome');
    }

    public function excluirItem($idDoItem) {
        //Excluir dados da tabela item imagem
        $this->db->where('id_item', $idDoItem);
        $idDoItemImagem = $this->db->get('item_imagem')->row('id');
        $this->model->excluirItemNa('item_imagem', $idDoItemImagem);
        //Excluir dados da tabela imagem
        $this->db->where('id_item_imagem', $idDoItemImagem);
        $this->db->delete('imagem');
        //Excluir item
        $this->model->excluirItemNa('item', $idDoItem);
    }

}