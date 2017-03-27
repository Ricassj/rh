<?php
require_once __DIR__ . '/../helpers/funcoes_helper.php';
class M_Colaborador extends M_Crud {
    protected $tabela = "colaborador";

    public function registrar(array $dadosForm) {
        $dadosForm['dataNascimento'] = !empty($dadosForm['dataNascimento']) ? FormatadataSql($dadosForm['dataNascimento']) : NULL;
        $dadosForm['dataCadastro'] = date("Y-m-d H:a:s");
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
    
    /**
    * DESCRICAO: Metodo que conta total de registro existente no banco
    */
    public function contaRegistros(){
        return $this->db->count_all_results($this->tabela);
    }
    
    public function findAllComPaginacao($_limit = 100, $_start = 0 ){        
        $filtro = $this->input->post('filtro');
        if(isset($filtro)){
            return 
            $this->db->select('*')
                    ->from($this->tabela)
                    ->join('documentacao', 'documentacao.colaborador_id = colaborador.colaborador_id')
                    ->like('nome',$filtro)
                    ->or_like('cargoPretendido',$filtro)
                    ->or_like('cpf',$filtro)
                    ->or_like('rg',$filtro)
                    ->order_by("colaborador.colaborador_id", "desc")
                    ->limit( $_limit, $_start )
                    ->get()->result();
        }else{
            return 
            $this->db->select('*')
                ->from($this->tabela)
                ->join('documentacao', 'documentacao.colaborador_id = colaborador.colaborador_id')
                ->order_by("colaborador.colaborador_id", "desc")
                ->limit( $_limit, $_start )
                ->get()->result();
 
        }
    }	
    
    public function findAllComPaginacao_like($_limit = 100, $_start = 0){
        $filtro = $this->input->post('filtro');
        return 
        $this->db->select('*')
                ->from($this->tabela)
                ->join('documentacao', 'documentacao.colaborador_id = colaborador.colaborador_id')
                ->like('nome',$filtro)
                ->or_like('cargoPretendido',$filtro)
                ->or_like('cpf',$filtro)
                ->or_like('rg',$filtro)
                ->order_by("colaborador.colaborador_id", "desc")
                ->limit( $_limit, $_start )
                ->get()->result();
    }	
    
    public function listaDados($id){
        return 
        $this->db->select
        ('
            colaborador.*,
            contato.telefoneResidencial,
            contato.celular,
            contato.telefoneContato,
            contato.email,
            documentacao.cpf,
            documentacao.rg,
            documentacao.numeroHabilitacao,
            documentacao.categoria,
            endereco.endereco,
            endereco.bairro,
            endereco.complemento,
            endereco.cidade,
            endereco.uf,
            endereco.numeroApartamento,
            endereco.cep
      ')
     ->from($this->tabela)
     ->join('documentacao', 'documentacao.colaborador_id = colaborador.colaborador_id')
     ->join('endereco', 'endereco.colaborador_id = colaborador.colaborador_id')
     ->join('contato', 'contato.colaborador_id = colaborador.colaborador_id')
     ->where('colaborador.colaborador_id', $id)
     
     ->order_by("colaborador.colaborador_id", "desc")
     ->get()->result();
    }
}