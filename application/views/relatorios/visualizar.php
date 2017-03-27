<h1 class="title_h1 " >Currículo</h1>
<h4 class="box-title">Dados Pessoais</h4>
<table class="table table-striped">
    <tr>
        <td colspan="2"><strong>Nome:</strong>  <?=$daodsColaborador->nome;?></td>
        <td><strong>Data Nascimento:</strong>    <?=date('d/m/Y', strtotime($daodsColaborador->dataNascimento));?></td>
    </tr>
    <tr>
        <td><strong>Cargo Pretendido:</strong> <?=$daodsColaborador->cargoPretendido;?></td>
        <td><strong>Pretenção Salarial:</strong>  <?=$daodsColaborador->pretencaoSalarial;?></td>
        <td><strong>Naturalidade:</strong>  <?=$daodsColaborador->naturalidade;?></td>
    </tr>
    
    <tr>
        <td><strong>Sexo:</strong> <?=$daodsColaborador->sexo;?></td>
        <td><strong>Estado Civil:</strong> <?=$daodsColaborador->estadoCivil;?></td>
        <td colspan="2"><strong>Filhos:</strong> <?=$daodsColaborador->filhos;?></td>
    </tr>
    <tr>
        <td><strong>CPF:</strong> <?=$daodsColaborador->cpf;?></td>
        <td><strong>RG:</strong>  <?=$daodsColaborador->rg;?></td>
        <td><strong>N° Habilitação:</strong> <?=$daodsColaborador->numeroHabilitacao;?> </td>
    </tr>
    <tr>
        <td colspan="3"><strong>Categoria:</strong> <?=$daodsColaborador->categoria;?> </td>
    </tr>
</table>

<h4 class="box-title">Endereço</h4>

<table class="table table-striped">
    <tr>
        <td colspan="2"><strong>Cép:</strong> <?=$daodsColaborador->cep;?></td>
        <td><strong>UF:</strong> <?=$daodsColaborador->uf;?> </td>
    </tr>
     <tr>
        <td colspan="2"><strong>Endereço:</strong>  <?=$daodsColaborador->endereco;?> </td>
        <td><strong>N°/Apto:</strong> <?=$daodsColaborador->numeroApartamento;?></td>
    </tr>
    <tr>
        <td><strong>Bairro:</strong> <?=$daodsColaborador->bairro;?> </td>
        <td><strong>Cidade :</strong> <?=$daodsColaborador->cidade;?></td>
        <td><strong>Complemento:</strong> <?=$daodsColaborador->complemento;?></td>
    </tr>
</table>

<h4 class="box-title">Contato</h4>

<table class="table table-striped">
    <tr>
        <td><strong>Residencial:</strong> <?=$daodsColaborador->telefoneResidencial;?></td>
        <td><strong>Celular :</strong> <?=$daodsColaborador->celular;?></td>
        <td><strong>Contato:</strong> <?=$daodsColaborador->telefoneContato;?></td>
    </tr>
    <tr>
        <td colspan="3"><strong>Email:</strong> <?=$daodsColaborador->email;?></td>
    </tr>
</table>

<h4 class="box-title">Formação</h4>

<table class="table table-striped">
    <?php 
        if(isset($formacao)){
            foreach ($formacao as $li){?>
                <tr>
                    <td><strong>Formação:</strong> <?=$li->formacao;?></td>
                    <td><strong>Curso :</strong>  <?=$li->curso;?></td>
                    <td colspan="2"><strong>Instituição:</strong> <?=$li->instituicao;?></td>
                </tr><?php 
            }
        }
    ?>
</table>

<h4 class="box-title">Experiencia Profissional</h4>

<table class="table table-striped">
    <?php 
        if(isset($experiencia)){
            foreach ($experiencia as $li){?>
                <tr>
                     <td colspan="3"><strong>Empresa:</strong> <?=$li->empresa;?></td>
                 </tr>
                 <tr>
                     <td><strong>Data Adimissão:</strong>  <?=date('d/m/Y', strtotime($li->dataAdimissao));?></td>
                     <td><strong>Data Demissão:</strong>  <?=date('d/m/Y', strtotime($li->dataDemissao));?></td>
                     <td><strong>Motivo:</strong>  <?=$li->Motivo;?></td>
                 </tr>
                 <tr>
                     <td colspan="3"><strong>Cargo:</strong>  <?=$li->cargo;?></td>
                 </tr>
                 <tr>
                    <td colspan="3"><strong>Atividades:</strong>  <br>
                         <?=$li->atividade;?>
                     </td>
                 </tr>
               <?php 
            }
        }
    ?>  
</table>

<hr>
    <a href="<?=$this->config->base_url('relatorios/')?>" class="btn btn-danger ">Voltar</a>
    <a href="<?=$this->config->base_url('relatorios/editar/'.$daodsColaborador->colaborador_id);?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Editar</a>
    <a href="javascript:window.print()"  class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Imprimir</a>
<br>
<br>
<br>