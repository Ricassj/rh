<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TrabConosco extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->view("includes/html_header.php");
        $this->load->model('M_SelectCampos');
        $this->load->model('M_Colaborador');
        $this->load->model('M_Documentacao');
        $this->load->model('M_Endereco');
        $this->load->model('M_Contato');
        $this->load->model('M_Formacao');
        $this->load->model('M_ExperienciaProficional');
    }

    public function index() {
        $this->load->view("trabalheConosco/index.php", $this->selects());
        $this->load->view("includes/html_footer.php");
    }

    public function newRegister() {
        $dadosForm = $this->input->post();
        $ultimoId = null;
        $frm = null;
            
        if(isset($dadosForm['DADOSPESSOAIS'])){
            if ($this->validaForm($dadosForm) == false) {
                //Registrar Dados Pessoais e recupera o ultmo id. var
                
                
                
                
                $ultimoId = $this->M_Colaborador->registrar($dadosForm['DADOSPESSOAIS']);
                if ($ultimoId) {
                    $dadosForm['DOCUMENTACAO']['colaborador_id'] = $ultimoId;
                    $dadosForm['ENDERECO']['colaborador_id'] = $ultimoId;
                    $dadosForm['CONTATO']['colaborador_id'] = $ultimoId;
                    $this->M_Documentacao->registrar($dadosForm['DOCUMENTACAO']);
                    $this->M_Endereco->registrar($dadosForm['ENDERECO']);
                    $this->M_Contato->registrar($dadosForm['CONTATO']);
                    $this->M_Formacao->registrar($dadosForm['FORMACAO'], $ultimoId);
                    $this->M_ExperienciaProficional->registrar($dadosForm['EXPERIENCIAPROFISSIONAL'], $ultimoId);
                }
                redirect("TrabConosco/success");
            } else {
                $error = $this->validaForm($dadosForm);
                $frm = $dadosForm;
                $this->load->view("trabalheConosco/index.php", $this->selects($error, $frm));
                $this->load->view("includes/html_footer.php");
            }
        }else{
             redirect("TrabConosco/index");
        }
    }

    //RESPONSAVEL POR VALIDAR FORMULARIO.
    private function validaForm($dadosForm) {
        $data['error'] = false;
        if ($dadosForm) {
            if ($dadosForm['DADOSPESSOAIS']['cargoPretendido'] == "") {
                $data['error'][] = 'campo Cargo Pretendido obrigatório.';
            }
            if ($dadosForm['DADOSPESSOAIS']['pretencaoSalarial'] == "") {
                $data['error'][] = 'campo Pretenção Salarial obrigatório.';
            }
            if ($dadosForm['DADOSPESSOAIS']['naturalidade'] == "") {
                $data['error'][] = 'campo Naturalidade obrigatório. ';
            }
            if ($dadosForm['DADOSPESSOAIS']['nome'] == "") {
                $data['error'][] = 'campo Nome obrigatório. ';
            }
            if (isset($dadosForm['DADOSPESSOAIS']['dataNascimento']) && $dadosForm['DADOSPESSOAIS']['dataNascimento'] == "") {
                $data['error'][] = 'campo Data Nascimento obrigatório. ';
            }
            if ($dadosForm['DADOSPESSOAIS']['sexo'] == 'null') {
                $data['error'][] = 'campo sexo obrigatório. ';
            }
            if ($dadosForm['DADOSPESSOAIS']['estadoCivil'] == 'null') {
                $data['error'][] = 'campo Estado Civil obrigatório. ';
            }
            if ($dadosForm['DADOSPESSOAIS']['filhos'] == 'null') {
                $data['error'][] = 'campo Filhos obrigatório. ';
            }
            if ($dadosForm['DOCUMENTACAO']['cpf'] == '') {
                $data['error'][] = 'campo CPF obrigatório. ';
            }
            if ($dadosForm['DOCUMENTACAO']['rg'] == '') {
                $data['error'][] = 'campo RG obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['cep'] == '') {
                $data['error'][] = 'campo CEP obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['uf'] == '') {
                $data['error'][] = 'campo UF obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['endereco'] == '') {
                $data['error'][] = 'campo Endereço obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['numeroApartamento'] == '') {
                $data['error'][] = 'campo Número/Apto obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['bairro'] == '') {
                $data['error'][] = 'campo Bairro obrigatório. ';
            }
            if ($dadosForm['ENDERECO']['cidade'] == '') {
                $data['error'][] = 'campo Cidade obrigatório. ';
            }
            if ($dadosForm['CONTATO']['telefoneResidencial'] == '') {
                $data['error'][] = 'campo Telefone Residêncial obrigatório. ';
            }
            if ($dadosForm['CONTATO']['celular'] == '') {
                $data['error'][] = 'campo Celular obrigatório. ';
            }
            if ($dadosForm['CONTATO']['email'] == '') {
                $data['error'][] = 'campo Email obrigatório. ';
            }
            if ($dadosForm['FORMACAO']['formacao'][0] == 'null') {
                $data['error'][] = 'campo Formação obrigatório. ';
            }
            if ($dadosForm['FORMACAO']['curso'][0] == '') {
                $data['error'][] = 'campo Curso obrigatório. ';
            }
            if ($dadosForm['FORMACAO']['instituicao'][0] == '') {
                $data['error'][] = 'campo Instituição obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['empresa'][0] == '') {
                $data['error'][] = 'campo Empresa obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['dataAdimissao'][0] == '') {
                $data['error'][] = 'campo Data Adminição obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['dataDemissao'][0] == '') {
                $data['error'][] = 'campo Data Demissão obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['motivo'][0] == 'null') {
                $data['error'][] = 'campo Motivo obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['cargo'][0] == '') {
                $data['error'][] = 'campo Cargo obrigatório. ';
            }
            if ($dadosForm['EXPERIENCIAPROFISSIONAL']['atividade'][0] == '') {
                $data['error'][] = 'campo Atividade obrigatório. ';
            }
        }
        return $data['error'];
    }

    public function selects($error = NULL, $frm = NULL) {
        $data['frm'] =null;
        if ($error != NULL && $frm != NULL) {
            $data['error'] = $error;
            $data['frm'] = $frm;
        }
        $data['cargoPretendido'] = $this->M_SelectCampos->listaSelectOFF('cargoPretendido');
        $data['estadoCivil'] = $this->M_SelectCampos->listaSelectOFF('estadoCivil');
        $data['formacao'] = $this->M_SelectCampos->listaSelectOFF('formacao');
        $data['prenetcaoSalarial'] = $this->M_SelectCampos->listaSelectOFF('prenetcaoSalarial');
        $data['sexo'] = $this->M_SelectCampos->listaSelectOFF('sexo');
        $data['filhos'] = $this->M_SelectCampos->listaSelectOFF('filhos');
        $data['motivo'] = $this->M_SelectCampos->listaSelectOFF('motivo');
        $data['documentacao'] = $this->M_SelectCampos->listaSelectOFF('categoria');

        return $data;
    }

    public function selectsJQ() {
        $arrayRetorno = NULL;
        $tipo = $this->input->post('_tipoSelect');
        switch ($tipo) {
            case'formacao': $arrayRetorno = ['formacao' => $this->M_SelectCampos->listaSelectOFF('formacao')];
                break;
            case'motivo': $arrayRetorno = ['motivo' => $this->M_SelectCampos->listaSelectOFF('motivo')];
                break;
        }
        die(json_encode($arrayRetorno));
    }

    public function success() {
        $this->load->view("trabalheConosco/resultado.php");
       
    }
}