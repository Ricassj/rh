<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controllerCRUD extends CI_Controller {

    protected $_model;
    protected $_table;
    protected $_column;
    protected $_route;
    protected $_sessao;

    public function __construct() {
        parent:: __construct();
    }

    public function excluir($id) {
        $this->_model->delete($this->_table, array($this->_column => $id));
        $this->session->set_userdata($this->_sessao, $data);
        redirect($this->_route);
    }

    public function viewData($id) {
        $data = $this->_model->findByIdArray($this->_table, $this->_column, $id);
        redirect($this->_route);
    }

    public function newRegister() {
        $dados = $this->input->post();
        $id = !empty($dados['id']) ? $dados['id'] : null;
        unset($dados['id']);

        if (!empty($id)) {
            $this->_model->update($this->_table, $dados, array($this->_column => $id));
        } else {
            unset($dados['id']);
            $this->_model->insert($this->_table, $dados);
        }
        redirect($this->_route);
    }
    
    /*
     *REQUISIÇÕES EM AJAX
     */
    public function viewDataJS() {
        $data = $this->_model->findByIdArray($this->_table, $this->_column, $this->input->post('id'));
        die(json_encode($data));
    }

}