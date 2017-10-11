<?php

class ModelPadrao extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obterTodosDa($nomeDaTabela) {
        $resultado = $this->db->get($nomeDaTabela);
        return $resultado->result();
    }

    public function inserirItemNa($nomeDaTabela, $data) {
        $this->db->insert($nomeDaTabela, $data);
        return $this->db->insert_id();
    }

    public function excluirItemNa($nomeDaTabela, $id) {
        $this->db->where('id', $id);
        $this->db->delete($nomeDaTabela);
    }

    public function atualizarItemNa($nomeDaTabela, $data) {
        $this->db->where("id", $data['id']);
        $this->db->update($nomeDaTabela, $data);
    }

    public function buscarItemPorId($nomeDaTabela, $id) {
        $this->db->where('id', $id);
        return $this->db->get($nomeDaTabela)->row();
    }
}
