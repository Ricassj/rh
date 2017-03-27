<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fatura extends CI_Controller {

    private $ArrayListFornecedor;

    public function __construct() {
        parent:: __construct();
        $this->load->view("includes/html_header.php");
        $this->load->model('M_Fornecedor');
        $this->load->model('M_Fatura');
        $this->load->model('M_Comentario');
        $this->load->model('M_Anexo');
        $this->load->helper("form");
        $this->load->helper("Paginacao_helper");
        $this->load->library('pagination');
        $this->load->library('upload', $this->confgImagensAction()); //upload da imagem:
        $this->ArrayListFornecedor = $this->M_Fornecedor->listFornecedor();
    }

    public function index() {
        $data['frm'] = NULL;
        $data['DISPLAY'] = 'style="display:none"';
        $data['fornecedor'] = $this->ArrayListFornecedor;
        $this->load->view("fatura/index.php", $data);
    }

    public function newRegister() {
        $dadosForm = $this->input->post();
        if (NULL != $dadosForm['FATURA']) {
            unset($dadosForm['FATURA']['ativar'], $dadosForm['FATURA']['inativar']);
            if ($this->validaForm($dadosForm) == false) {
                /*
                  ====================================================
                 * Lançar fatura  e recupera o ultmo id:
                 */
                $ultimoId = $this->M_Fatura->registrar($dadosForm['FATURA']);

                /*
                  ====================================================
                 * Registrar Comentario:
                 */
                $dadosForm['COMENTARIO']['idFatura'] = $ultimoId;
                $this->M_Comentario->registrar($dadosForm['COMENTARIO']);

                /*
                  ====================================================
                 * Upload dos Anexos:
                 */

                //var_dump($_FILES); 
                //var_dump($_FILES['multipleFiles']['name']); die;

                /**
                 * 
                 * conta o numero de arquivos pra upload 
                 * 
                 */
                $number_of_files = count($_FILES['multipleFiles']['name']);

                /**
                 * 
                 * store global files to local variable 
                 * 
                 */
                $file = $_FILES;

                /**
                 * 
                 * Make sure the folder is there 
                 * 
                 */
                if (!is_dir('/anexos')) {
                    @mkdir('./anexos', 0777, true);
                }

                /**
                 * 
                 * Upload files one by one
                 * 
                 */
                // var_dump($number_of_files); die;

                for ($i = 0; $i < $number_of_files; $i++) {
                    $_FILES['multipleFiles']['name'] = $file['multipleFiles']['name'][$i];
                    $_FILES['multipleFiles']['type'] = $file['multipleFiles']['type'][$i];
                    $_FILES['multipleFiles']['tmp_name'] = $file['multipleFiles']['tmp_name'][$i];
                    $_FILES['multipleFiles']['error'] = $file['multipleFiles']['error'][$i];
                    $_FILES['multipleFiles']['size'] = $file['multipleFiles']['size'][$i];
                    if (!$this->upload->do_upload('multipleFiles')) {
                        $error = array('error' => $this->upload->display_errors());
                        die('<p style="color:#F00;">' . $error['error'] . '</p>');
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                        $dataAnexo['anexo'] = './anexos/' . $data['upload_data']['file_name'];
                        $dataAnexo['idFatura'] = $ultimoId;

                        //Persistir na base de dados
                        $this->M_Anexo->registrar($dataAnexo);
                    }
                }
                redirect("fatura/success");
            } else {
                $data['fornecedor'] = $this->ArrayListFornecedor;
                $data['error'] = $this->validaForm($dadosForm);
                $data['frm'] = $dadosForm;
                $data['DISPLAY'] = 'style=" display:none"';
                $this->load->view("fatura/index.php", $data);
            }
        } 
        else {
            redirect("/fatura/index");
        }
    }

    /**
     * =========================================================
     * RESPONSAVEL POR VALIDAR FORMULARIO.
     */
    private function validaForm($dadosForm) {
        $data['error'] = false;
        if ($dadosForm) {
            if ($dadosForm['FATURA']['idFornecedor'] == 'false') {
                $data['error'][] = 'campo Fornecedor obrigatório. ';
            }
            if ($dadosForm['FATURA']['codigoBarra'] == "") {
                $data['error'][] = 'campo Codigo de Barra obrigatório.';
            }
            if ($dadosForm['FATURA']['dataVencimento'] == "") {
                $data['error'][] = 'campo Data Vencimento obrigatório.';
            }
            if ($dadosForm['FATURA']['razaoSocial'] == "") {
                $data['error'][] = 'campo Razão Social obrigatório.';
            }
        }
        return $data['error'];
    }

    public function success() {
        $this->load->view("fatura/resultado.php");
    }

    /**
     * =========================================================
     * ROTA RESPONSAVEL POR MOSTRAR UMA LISTA DE FATURAS 
     */
    public function aprovar() {
        $urlBase = $this->config->base_url("fatura/aprovar");
        $totalRegistro = $this->M_Fatura->contaRegistros();
        $maximo = 20;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");
        //paginacao
        $this->pagination->initialize(configPaginacao($urlBase, $totalRegistro, $maximo));
        $data["paginacao"] = $this->pagination->create_links();
        $data['fatura'] = $this->M_Fatura->findAllComPaginacao($maximo, $inicio);
        $data["totalRegistro"] = count($this->M_Fatura->findAllComPaginacao($maximo, $inicio));
        $this->load->view("fatura/aprovar.php", $data);
    }

    public function modalAprovarInativar() {
        $dadosForm = $this->input->post();
        $this->M_Fatura->update('fatura', $dadosForm, array('idFatura' => $dadosForm['idFatura']));
        redirect("fatura/aprovar");
    }

    public function modalEditar() {
        $dadosForm = $this->input->post();
        $this->M_Fatura->updateFatura($dadosForm);
        redirect("fatura/aprovar");
    }

    public function addFornecedor() {
        $dadosForm = $this->input->post();

        /**
         * ===============================================================================
         * VERIFICA SE O REGISTRO JÁ ESTA REGISTRADO NA BASE DE DADOS (REGISTRO DUPLICADO):
         */
        $novoRegistro = $this->M_Fornecedor->findByIdArray('fatura_fornecedor', 'nome', $dadosForm['nome']);

        /**
         * =========================================
         *  SE NÃO ESTIVER REGISTRO (NOVO REGISTRO):
         */
        if (!$novoRegistro == $dadosForm['nome']) {
            $this->M_Fornecedor->registrar($dadosForm);
        }

        die(json_encode(array('cadastro' => 'true')));
    }

    public function pagamento() {
        $this->load->view("fatura/pagamento.php");
    }

    public function visualizar() {
        $this->load->view("fatura/visualizar.php");
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