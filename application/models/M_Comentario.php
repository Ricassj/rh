<?php

class M_Comentario extends M_Crud {

    protected $tabela = "fatura_comentario";

    public function registrar($dadosForm) {
        parent::insert($this->tabela, $dadosForm);
        return $this->ultimoId();
    }
    
    public function listaDados($id){
        return 
        $this->db->select('*')
        ->from($this->tabela)
        ->where('fatura_comentario.idFatura', $id)
        ->order_by('fatura_comentario.idComentario', 'desc')
        ->get()->result();
    }

}