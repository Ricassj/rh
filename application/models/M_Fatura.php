<?php

require_once __DIR__ . '/../helpers/funcoes_helper.php';

class M_Fatura extends M_Crud {

    protected $tabela = "fatura";

    public function registrar($dadosForm) {
        $dadosForm['dataVencimento'] = !empty($dadosForm['dataVencimento']) ? FormatadataSql($dadosForm['dataVencimento']) : NULL;
        $dadosForm['dataLancamento'] = date('Y-m-d');
        $dadosForm['valor']  =  converterParaDouble($dadosForm['valor']) ;
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }

    /**
     * ====================================================================
     * DESCRICAO: Metodo que conta total de registro existente no banco
     */
    public function contaRegistros() {
        return $this->db->count_all_results($this->tabela);
    }
    
    public function findAllComPaginacao($_limit = 100, $_start = 0 ){        
        $filtro = $this->input->post('filtro');
        if(isset($filtro)){
            return 
            $this->db->select('*')
                    ->from($this->tabela)
                    ->join('fatura_fornecedor','fatura_fornecedor.idFornecedor=fatura.idFornecedor')
                    ->like('fatura_fornecedor.nome',$filtro)
                    ->or_like('fatura.razaoSocial',$filtro)
                    ->order_by('fatura.idFatura', 'desc')
                    ->limit( $_limit, $_start )
                    ->get()->result();
        }else{
            return 
            $this->db->select('*')
                ->from($this->tabela)
                ->join('fatura_fornecedor','fatura_fornecedor.idFornecedor=fatura.idFornecedor')
                ->order_by("fatura.idFatura", "desc")
                ->limit( $_limit, $_start )
                ->get()->result();
 
        }
    }
    
    public function listaDados($id){
        return 
        $this->db->select('fatura.*,fatura_fornecedor.nome')
        ->from($this->tabela)
        ->join('fatura_fornecedor', 'fatura_fornecedor.idFornecedor = fatura.idFornecedor')
        ->where('fatura.idFatura', $id)
        ->group_by("fatura.idFatura")        
        ->get()->result();
    }
    
    public function updateFatura($dadosForm) {
        $dadosForm['FATURA']['dataVencimento'] = !empty($dadosForm['FATURA']['dataVencimento']) ? FormatadataSql($dadosForm['FATURA']['dataVencimento']) : NULL;
        $dadosForm['FATURA']['valor'] = converterParaDouble($dadosForm['FATURA']['valor']);        
        parent::update($this->tabela, $dadosForm['FATURA'], array('idFatura' => $dadosForm['FATURA']['idFatura']));
    }
}