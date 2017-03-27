<?php
require_once __DIR__ . '/../helpers/funcoes_helper.php';
class M_ExperienciaProficional extends M_Crud {
    protected $tabela = "experienciaproficional";

    public function registrar(array $dadosForm,$ultimoId) {
        foreach ($dadosForm as $coluna => $valor) {
            foreach ($valor as $k => $v) {
                $arrayExperienciaProficional[$k]['colaborador_id'] = $ultimoId;
                $arrayExperienciaProficional[$k][$coluna] = $v;
            }
        }
        foreach ($arrayExperienciaProficional as $experiencia) {
            $experiencia['dataAdimissao'] = !empty($experiencia['dataAdimissao']) ? FormatadataSql($experiencia['dataAdimissao']) : NULL;
            $experiencia['dataDemissao'] = !empty($experiencia['dataDemissao']) ? FormatadataSql($experiencia['dataDemissao']) : NULL;
            parent::insert($this->tabela, $experiencia);
        }
    }
    public function updateExperiencia(array $dadosForm, $where) {
       
        $arrayExperiencia = null;
        
        foreach ($dadosForm as $coluna => $valor) {
            foreach ($valor as $k => $v) {
                $arrayExperiencia[$k]['colaborador_id'] = $where['colaborador_id'];
                $arrayExperiencia[$k][$coluna] = $v;
            }
        }
        foreach ($arrayExperiencia as $experiencia) {
            $experiencia['dataAdimissao'] = !empty($experiencia['dataAdimissao']) ? FormatadataSql($experiencia['dataAdimissao']) : NULL;
            $experiencia['dataDemissao'] = !empty($experiencia['dataDemissao']) ? FormatadataSql($experiencia['dataDemissao']) : NULL;
            $where['experienciaProficional_id'] = $experiencia['experienciaProficional_id'];
            parent::update($this->tabela, $experiencia, $where);
        }
    }
    
     public function listaExperienciaPorId($_where){
          return
          $this->setSelectCampos("*")
               ->select("{$this->tabela}")
               ->where($_where)
               ->getResult();
    }
}