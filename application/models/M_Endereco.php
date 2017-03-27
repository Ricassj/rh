<?php

class M_Endereco extends M_Crud {

    protected $tabela = "endereco";

    public function registrar(array $dadosForm) {
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
}
