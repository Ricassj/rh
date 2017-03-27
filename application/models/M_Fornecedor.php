<?php

class M_Fornecedor extends M_Crud {

    protected $tabela = "fatura_fornecedor";

    public function registrar(array $dadosForm) {
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
    public function listFornecedor() {
        $ret =  
        $this->select($this->tabela)
             ->orderby('fatura_fornecedor.idFornecedor','DESC')
             ->getResult();
            return  $ret;
    }
}