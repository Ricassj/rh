<?php

class M_Formacao extends M_Crud {

    protected $tabela = "formacao";

    public function registrar(array $dadosForm,$ultimoId) {
        foreach ($dadosForm as $coluna => $valor) {
            foreach ($valor as $k => $v) {
                $arrayFormacao[$k]['colaborador_id'] = $ultimoId;
                $arrayFormacao[$k][$coluna] = $v;
            }
        }
        foreach ($arrayFormacao as $formacao) {
            parent::insert($this->tabela, $formacao);
        }
    }
    
    public function updateFormacao(array $dadosForm, $where) {
       foreach ($dadosForm as $coluna => $valor) {
            foreach ($valor as $k => $v) {
                $arrayFormacao[$k]['colaborador_id'] = $where['colaborador_id'];
                $arrayFormacao[$k][$coluna] = $v;
            }
        }
        foreach ($arrayFormacao as $formacao) {
            $where['formacao_id'] = $formacao['formacao_id'];
            parent::update($this->tabela, $formacao, $where);
        }
    }
    
    public function listaFormacaoPorId($_where){
          return
          $this->setSelectCampos("*")
               ->select("{$this->tabela}")
               ->where($_where)
               ->getResult();
    }
    
    
}