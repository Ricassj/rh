<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anexo extends CI_Controller {
    
    public function __construct() {
        parent:: __construct();
        $this->load->model('M_Anexo');
        $this->load->library('upload', $this->confgImagensAction()); //upload da imagem:        
    }

    public function index($params) {
        $param = explode('-', $params);
        $modal = $param[0];
        $data['idFatura'] = @$param[1];
        $data['ArrayListObjectAnoxo'] = $this->M_Anexo->listaDados($data['idFatura']);
        $this->load->view("fatura/forms/modalAnexo", $data);
    }
    
    public function deleteAnexo(){
        $idAnexo = $this->input->get('idAnexo');
        $anexo =  $this->M_Anexo->findById('fatura_anexo','idAnexo',$idAnexo);
        $numAnexo = count($this->M_Anexo->listaDados($anexo->idFatura));
        
        if(file_exists($anexo->anexo)){
            $this->M_Anexo->deleteAnexoDB($anexo->idAnexo);
            die(
                json_encode(
                    array(
                        'numAnexo'=>($numAnexo-1)
                    )
                )    
            );
        }else{
            echo'Não foi possivel Localizar seu arquivo!';
        }
    }
    /**
     * ====================================================
     * Upload arquivo modal:
     */
    public function doUploadModalAnexo() {
        $dadosForm = $this->input->post();
        if (!$this->upload->do_upload('anexo')) {
            $error = array('error' => $this->upload->display_errors());
            die('<p style="color:#F00;">' . $error['error'] . '</p>');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $dataAnexo['anexo'] = './anexos/' . $data['upload_data']['file_name'];
            $dataAnexo['idFatura'] = $dadosForm['idFatura'];
            //PERSISTE OS DADOS NA BASE DE DADOS             
            $this->M_Anexo->registrar($dataAnexo);
            redirect("fatura/aprovar");
        }
    }
    
    public function showAnexo($id){
        $arquivo =  $this->M_Anexo->findById('fatura_anexo','idAnexo',$id);
        if(count($arquivo) >0 && file_exists($arquivo->anexo)){
            redirect("{$arquivo->anexo}");
        }else{
            echo'Não foi possivel Localizar seu arquivo!';
        }
    }
        
    private function confgImagensAction() {
        $config['upload_path'] = './anexos/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;
        //$config['encrypt_name'] = TRUE;
        return($config);
    }
   
}