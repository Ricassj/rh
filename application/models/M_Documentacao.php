<?php

class M_Documentacao extends M_Crud {

    protected $tabela = "documentacao";

    public function registrar(array $dadosForm) {
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
}