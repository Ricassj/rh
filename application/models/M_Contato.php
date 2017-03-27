<?php

class M_Contato extends M_Crud {

    protected $tabela = "contato";

    public function registrar(array $dadosForm) {
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
}