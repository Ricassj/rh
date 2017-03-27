<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Relatorios extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->view("includes/html_header.php");
        $this->load->model('M_Colaborador');
        $this->load->model('M_Documentacao');
        $this->load->model('M_Endereco');
        $this->load->model('M_Contato');
        $this->load->model('M_Formacao');
        $this->load->model('M_ExperienciaProficional');
        $this->load->model('M_SelectCampos');
        $this->load->library('pagination');
        $this->load->helper("Paginacao_helper");
    }

    public function index() {
        $urlBase = $this->config->base_url('relatorios/index');
        $totalRegistro = $this->M_Colaborador->contaRegistros();
        $maximo = 20;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");
        //paginacao
        $this->pagination->initialize(configPaginacao($urlBase, $totalRegistro, $maximo));
        $data["paginacao"] = $this->pagination->create_links();
        $data['colaborador'] = $this->M_Colaborador->findAllComPaginacao($maximo, $inicio);
        $data["totalRegistro"] = count($this->M_Colaborador->findAllComPaginacao($maximo, $inicio));
        //views
        $this->load->view("relatorios/index.php", $data);
        $this->load->view("includes/html_footer.php");
    }

    public function visualizar($id) {
        $data['daodsColaborador'] = $this->M_Colaborador->listaDados($id)[0];
		
	
        if(NULL != $id && NULL !==$data['daodsColaborador']){     
            $data['formacao'] = $this->M_Formacao->listaFormacaoPorId(array("colaborador_id" => $id));
            $data['experiencia'] = $this->M_ExperienciaProficional->listaExperienciaPorId(array("colaborador_id" => $id));
            $this->load->view("relatorios/visualizar.php", $data);
        }else{
            redirect("/relatorios/");
        }
    }

    public function editar($id =NULL) {
        $data['DADOSPESSOAIS'] = $this->M_Colaborador->listaDados($id)[0];
        if(NULL != $id && NULL !==$data['DADOSPESSOAIS']){            
            $data['FORMACAO'] = $this->M_Formacao->listaFormacaoPorId(array("colaborador_id" => $id));
            $data['EXPERIENCIAPROFISSIONAL'] = $this->M_ExperienciaProficional->listaExperienciaPorId(array("colaborador_id" => $id));
            $data['SELECT_cargoPretendido'] = $this->M_SelectCampos->listaSelectOFF('cargoPretendido');
            $data['SELECT_estadoCivil'] = $this->M_SelectCampos->listaSelectOFF('estadoCivil');
            $data['SELECT_formacao'] = $this->M_SelectCampos->listaSelectOFF('formacao');
            $data['SELECT_prenetcaoSalarial'] = $this->M_SelectCampos->listaSelectOFF('prenetcaoSalarial');
            $data['SELECT_sexo'] = $this->M_SelectCampos->listaSelectOFF('sexo');
            $data['SELECT_filhos'] = $this->M_SelectCampos->listaSelectOFF('filhos');
            $data['SELECT_motivo'] = $this->M_SelectCampos->listaSelectOFF('motivo');
            $data['SELECT_documentacao'] = $this->M_SelectCampos->listaSelectOFF('categoria');
            //view  
            $this->load->view("relatorios/editar.php",$data);
            $this->load->view("includes/html_footer.php");
        }else{
            redirect("/relatorios/");
        }
    }

    public function excluir() {
        $id = $this->input->post('id');
        $this->M_Colaborador-> delete('colaborador', array("colaborador_id" => $id));
        $this->M_Documentacao-> delete('documentacao', array("colaborador_id" => $id));
        $this->M_Endereco-> delete('endereco', array("colaborador_id" => $id));
        $this->M_Contato-> delete('contato', array("colaborador_id" => $id));
        $this->M_Formacao-> delete('formacao', array("colaborador_id" => $id));
        $this->M_ExperienciaProficional-> delete('experienciaproficional', array("colaborador_id" => $id));
        $totalRegistro = $this->M_Colaborador->contaRegistros();
        die(
            json_encode(
                array('total'=>$totalRegistro
                )
            )    
        );
    }
    
    public function saveEdit(){
        $dadosEdit = $this->input->post();
        if(NULL !=$dadosEdit){
            $DADOSPESSOAIS = $this->input->post('DADOSPESSOAIS');
            $DADOSPESSOAIS['dataNascimento'] = date('Y-m-d',strtotime($DADOSPESSOAIS['dataNascimento']));
            $this->M_Colaborador->update('colaborador', $DADOSPESSOAIS, array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));
            $this->M_Documentacao->update('documentacao',  $this->input->post('DOCUMENTACAO'), array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));
            $this->M_Endereco->update('endereco',  $this->input->post('ENDERECO'), array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));            
            $this->M_Contato->update('contato', $this->input->post('CONTATO'), array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));
            $this->M_Formacao->updateFormacao($this->input->post('FORMACAO'), array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));
            $this->M_ExperienciaProficional->updateExperiencia($this->input->post('EXPERIENCIAPROFISSIONAL'), array('colaborador_id' => $DADOSPESSOAIS['colaborador_id']));
            redirect("/relatorios/visualizar/{$DADOSPESSOAIS['colaborador_id']}");
        }else{      
          redirect("/relatorios/");
        }
    }
    
} 