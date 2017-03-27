<?php

class M_SelectCampos extends M_Crud {

    protected $tablela = 'selectCampos';
    
    public function listaSelect($listaPor) {
        $this->setSelectCampos("descricao");
        $this->select($this->tablela);
        $this->where(array("tipoSelect" => $listaPor));
        return $this->getResult();
    }

    public function listaSelectOFF($listaPor) {
        switch ($listaPor) {
            case 'cargoPretendido':
                return
                        array(
                            0 => array('descricao' => 'cargoPretendido1'),
                            1 => array('descricao' => 'cargoPretendido2'),
                            2 => array('descricao' => 'cargoPretendido3'),
                            3 => array('descricao' => 'cargoPretendido4'),
                            4 => array('descricao' => 'cargoPretendido5'),
                            5 => array('descricao' => 'cargoPretendido6'),
                            6 => array('descricao' => 'cargoPretendido7')
                );
                break;
            case 'estadoCivil':
                return
                        array(
                            0 => array('descricao' => 'estadoCivil1'),
                            1 => array('descricao' => 'estadoCivil2'),
                            2 => array('descricao' => 'estadoCivil3'),
                            3 => array('descricao' => 'estadoCivil4'),
                            4 => array('descricao' => 'estadoCivil5'),
                            5 => array('descricao' => 'estadoCivil6'),
                            6 => array('descricao' => 'estadoCivil7')
                );
                break;
            case 'formacao':
                return
                        array(
                            0 => array('descricao' => 'formacao1'),
                            1 => array('descricao' => 'formacao2'),
                            2 => array('descricao' => 'formacao3'),
                            3 => array('descricao' => 'formacao4'),
                            4 => array('descricao' => 'formacao5'),
                            5 => array('descricao' => 'formacao6'),
                            6 => array('descricao' => 'formacao7')
                );
                break;
            case 'prenetcaoSalarial':
                return
                        array(
                            0 => array('descricao' => 'prenetcaoSalarial1'),
                            1 => array('descricao' => 'prenetcaoSalarial2'),
                            2 => array('descricao' => 'prenetcaoSalarial3'),
                            3 => array('descricao' => 'prenetcaoSalarial4'),
                            4 => array('descricao' => 'prenetcaoSalarial5'),
                            5 => array('descricao' => 'prenetcaoSalarial6'),
                            6 => array('descricao' => 'prenetcaoSalarial7')
                );
                break;
            case 'sexo': 
                return
                        array(
                            0 => array('descricao' => 'sexo1'),
                            1 => array('descricao' => 'sexo2'),
                            2 => array('descricao' => 'sexo3'),
                            3 => array('descricao' => 'sexo4'),
                            4 => array('descricao' => 'sexo5'),
                            5 => array('descricao' => 'sexo6'),
                            6 => array('descricao' => 'sexo7')
                );
                break;
            case 'filhos':
                return
                        array(
                            0 => array('descricao' => 'filho1'),
                            1 => array('descricao' => 'filho2'),
                            2 => array('descricao' => 'filho3'),
                            3 => array('descricao' => 'filho4'),
                            4 => array('descricao' => 'filho5'),
                            5 => array('descricao' => 'filho6'),
                            6 => array('descricao' => 'filho7')
                );
                break;
            case 'categoria': 
                return
                        array(
                            0 => array('descricao' => 'A'),
                            1 => array('descricao' => 'B'),
                            2 => array('descricao' => 'C'),
                            3 => array('descricao' => 'D'),
                            4 => array('descricao' => 'E'),
                            5 => array('descricao' => 'AB'),
                            6 => array('descricao' => 'BC'),
                            6 => array('descricao' => 'CD'),
                            6 => array('descricao' => 'DE'),
                );
                break;
            case 'motivo':
                return
                        array(
                            0 => array('descricao' => 'motivo1'),
                            1 => array('descricao' => 'motivo2'),
                            2 => array('descricao' => 'motivo3'),
                            3 => array('descricao' => 'motivo4'),
                            4 => array('descricao' => 'motivo5'),
                            5 => array('descricao' => 'motivo6'),
                            6 => array('descricao' => 'motivo7')
                );
                break;

        }
    }

}
