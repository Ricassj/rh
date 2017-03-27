<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('M_Fatura');
        $this->load->model('M_Fornecedor');
        $this->load->model('M_Comentario');
        $this->load->model('M_Anexo');
    }

    public function index($params) {
        $param = explode('-', $params);
        $modal = $param[0];
        $data['idFatura'] = @$param[1];
        
        switch ($modal) {
            case'aprovar' : $this->load->view("fatura/forms/modalAprovar", $data);
                break;
            case'inativar' : $this->load->view("fatura/forms/modalInativar", $data);
                break;
            case'comentario' : 
                $data['ArrayObjctListComentario'] = $this->M_Comentario->listaDados($data['idFatura']);
                $this->load->view("fatura/forms/modalComentario", $data);
                break;
            
            case'editar' : 
                 /*
                 * ================================================
                 * DB :: ObjectFatura de a cordo com o ID passado 
                 */
                $fatura['FATURA'] = $this->M_Fatura->listaDados( $data['idFatura'])[0];
                
                /*
                 * ================================================
                 * DB :: ArrayListFornecedores
                 */
                $data['fornecedor'] = $this->M_Fornecedor->listFornecedor();
                
                 /*
                 * ================================================
                 * frm_fatura :: RETORNA OS DADOS PRO FORMULÁRIO
                 */
                $frm['FATURA']['codigoBarra'] = $fatura['FATURA']->codigoBarra;
                $frm['FATURA']['idFatura'] = $fatura['FATURA']->idFatura;
                $frm['FATURA']['idFornecedor'] = $fatura['FATURA']->idFornecedor;
                $frm['FATURA']['valor'] = $fatura['FATURA']->valor;
                $frm['FATURA']['razaoSocial'] = $fatura['FATURA']->razaoSocial;
                $frm['FATURA']['recorrente'] = $fatura['FATURA']->recorrente;
                $frm['FATURA']['aprovar'] = $fatura['FATURA']->aprovar;
                $frm['FATURA']['inativar'] = $fatura['FATURA']->inativar;
                $frm['FATURA']['dataVencimento'] = date('d/m/Y',strtotime($fatura['FATURA']->dataVencimento));
                $frm['FATURA']['nome'] = $fatura['FATURA']->nome;
                $data['frm'] = $frm;
                $this->load->view("fatura/forms/modalEditar", $data);
                break;
            case'fornecedor' : $this->load->view("fatura/forms/modalFornecedor", $data);
                break;
        }
    }
    
    
    
   
    
    public function modalComentario() {
        $dadosForm = $this->input->post(); 
        $this->M_Comentario->registrar($dadosForm);
        die(
            json_encode(
                array(
                    'comentarios'=>$this->M_Comentario->listaDados($dadosForm['idFatura'])
               )
            )
        ); 
    }
}