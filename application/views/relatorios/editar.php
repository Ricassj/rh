<h1 class="title_h1">Editar Currículo</h1>
<h4 class="box-title">Dados Pessoais</h4>
<br>

<form action="<?=$this->config->base_url('relatorios/saveEdit')?>" method="post" >
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Cargo Pretendido:</label> 
            <select class="form-control text-center " name="DADOSPESSOAIS[cargoPretendido]"   >
                <option value="">Selecione...</option>
                <?php
                    if (!empty($SELECT_cargoPretendido)) {
                        foreach ($SELECT_cargoPretendido as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->cargoPretendido) ?'selected' :''; 
                           echo  "<option value=\"{$li['descricao']}\"  {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                         echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-3">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Pretenção Salarial:</label> 
            <select class="form-control text-center" name="DADOSPESSOAIS[pretencaoSalarial]"  >
                <option value="">Selecione...</option>
                <?php
                    if (!empty($SELECT_prenetcaoSalarial)) {
                        foreach ($SELECT_prenetcaoSalarial as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->pretencaoSalarial) ?'selected' :'';  
                           echo  "<option value=\"{$li['descricao']}\" {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                         echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Naturalidade:</label> 
            <input class="form-control" type="text" name="DADOSPESSOAIS[naturalidade]" value="<?=$DADOSPESSOAIS->naturalidade;  ?>" >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Nome:</label> 
            <input class="form-control " type="text" name="DADOSPESSOAIS[nome]" value="<?=$DADOSPESSOAIS->nome;?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3  ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Dat.Nascimento:</label>
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="DADOSPESSOAIS[dataNascimento]" class="form-control datepicker  mask_data  "  value="<?=date('d/m/Y',  strtotime($DADOSPESSOAIS->dataNascimento)); ?>" > 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-3 ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Sexo:</label> 
            <select class="form-control text-center" name="DADOSPESSOAIS[sexo]" >
                <option value="null">Selecione...</option>
                <?php
                    if (!empty($SELECT_sexo)) {
                        foreach ($SELECT_sexo as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->sexo) ?'selected' :''; 
                           echo  "<option value=\"{$li['descricao']}\"  {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                         echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Estado Civil:</label> 
            <select class="form-control text-center" name="DADOSPESSOAIS[estadoCivil]"   >
                <option value="null">Selecione...</option>
                 <?php
                    if (!empty($SELECT_estadoCivil)) {
                        foreach ($SELECT_estadoCivil as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->estadoCivil) ?'selected' :'';  
                           echo  "<option value=\"{$li['descricao']}\" {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                        echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-3  col-md-offset-2">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Filhos:</label> 
            <select class="form-control text-center" name="DADOSPESSOAIS[filhos]"   >
                <option value="null">Selecione...</option>
                <?php
                    if (!empty($SELECT_filhos)) {
                        foreach ($SELECT_filhos as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->filhos) ?'selected' :'';   
                           echo  "<option value=\"{$li['descricao']}\" {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                        echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>CPF:</label> 
            <input class="form-control mask_cpf" type="text" name="DOCUMENTACAO[cpf]" value="<?=$DADOSPESSOAIS->cpf; ?>" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-3">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>RG:</label> 
            <input class="form-control " type="text" name="DOCUMENTACAO[rg]"  maxlength="14"  value="<?=$DADOSPESSOAIS->rg; ?>" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-3">
        <div class="form-group">
            <label>N° Habilitação:</label> 
            <input class="form-control " type="text" name="DOCUMENTACAO[numeroHabilitacao]"  maxlength="50"  value="<?=$DADOSPESSOAIS->numeroHabilitacao; ?>" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-2 col-md-offset-1">
        <div class="form-group">
            <label>Categoria:</label> 
            <select class="form-control  text-center" name="DOCUMENTACAO[categoria]"   >
               <option value="null">Selecione...</option>
                <?php
                    if (!empty($SELECT_documentacao)) {
                        foreach ($SELECT_documentacao as $li) {
                           $select = ($li['descricao'] == $DADOSPESSOAIS->categoria) ?'selected' :'';   
                           echo  "<option value=\"{$li['descricao']}\" {$select} >{$li['descricao']}</option>";
                        }
                    }else{
                        echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
</div>

<h4 class="box-title">Endereço</h4>

<br>
<div class="row">
    <div class="col-xs-12 col-md-5">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>CEP:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-search"></i></span>
                <input class="form-control mask_cep" type="text" name="ENDERECO[cep]"  value="<?=$DADOSPESSOAIS->cep; ?>" >
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-1">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>UF:</label> 
            <input class="form-control " type="text"  maxlength="2" name="ENDERECO[uf]" value="<?=$DADOSPESSOAIS->uf; ?>" >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Endereço:</label> 
            <input class="form-control " type="text" name="ENDERECO[endereco]"  value="<?=$DADOSPESSOAIS->endereco; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-2  ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Número/Apto:</label>
            <div class="input-group">
                <input type="text" name="ENDERECO[numeroApartamento]" class="form-control " maxlength="6"  value="<?=$DADOSPESSOAIS->numeroApartamento; ?>" > 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Bairro:</label> 
            <input class="form-control " type="text" name="ENDERECO[bairro]" value="<?=$DADOSPESSOAIS->bairro; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Cidade:</label> 
            <input class="form-control " type="text" name="ENDERECO[cidade]" value="<?=$DADOSPESSOAIS->cidade; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label>Complemento:</label> 
            <input class="form-control " type="text" name="ENDERECO[complemento]" value="<?=$DADOSPESSOAIS->complemento; ?>" >
        </div>
    </div>
</div>
<br>
<h4 class="box-title">Contato</h4>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Telefone Residêncial:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[telefoneResidencial]" class="form-control mask_telefone" value="<?=$DADOSPESSOAIS->telefoneResidencial; ?>"  maxlength="14" > 
            </div>
        </div>
    </div>  
    <div class="col-xs-12  col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Celular:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[celular]" class="form-control mask_telefone" value="<?=$DADOSPESSOAIS->celular; ?>"   maxlength="14" > 
            </div>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-4">
        <div class="form-group">
            <label>Telefone contato:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[telefoneContato]" class="form-control mask_telefone "  value="<?=$DADOSPESSOAIS->telefoneContato; ?>"  maxlength="14" > 
            </div>
         </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12  col-md-12">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Email:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" type="email" name="CONTATO[email]" value="<?=$DADOSPESSOAIS->email; ?>" >
            </div>
        </div>
    </div>
</div>
<br>
<h4 class="box-title">Formação</h4>
<br>
<?php foreach ($FORMACAO as $formacao){?>
<section>
    <div class="row ">
        <div class="col-xs-12  col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Formação:</label> 
                <select class="form-control text-center" name="FORMACAO[formacao][]"   >
                    <option value="null">Selecione...</option>
                    <?php
                    if (!empty($SELECT_formacao)) {
                        foreach ($SELECT_formacao as $li) {
                            $select = ($li['descricao'] == $formacao->formacao) ?'selected' :''; 
                            echo "<option value=\"{$li['descricao']}\"  {$select} >{$li['descricao']}</option>";
                        }
                    } else {
                        echo "<option value=\"\">off</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Curso:</label> 
                <input class="form-control " type="text" name="FORMACAO[curso][]"  value="<?=$formacao->curso;?>" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Instituição:</label> 
                <input class="form-control " type="text" name="FORMACAO[instituicao][]"  value="<?=$formacao->instituicao; ?>" >
                <input class="form-control " type="hidden" name="FORMACAO[formacao_id][]"  value="<?=$formacao->formacao_id; ?>" >
            </div>
        </div>
    </div>
</section>
<?php }?>
<br>
<h4 class="box-title">Experiências</h4>
<br>
<?php foreach ($EXPERIENCIAPROFISSIONAL as $EXPERIENCIA){?>
<section>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Empresa:</label> 
                <input class="form-control" type="text" name="EXPERIENCIAPROFISSIONAL[empresa][]"  value="<?=$EXPERIENCIA->empresa;?> " >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Data Adimissão:</label> 
                <div class="input-group">
                    <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                    <input class="form-control datepicker  mask_data"  type="text" name="EXPERIENCIAPROFISSIONAL[dataAdimissao][]"  value="<?=date('d/m/Y',strtotime($EXPERIENCIA->dataAdimissao));?> " >
                </div>
            </div>
        </div>
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Data Demissão:</label>
                <div class="input-group">
                    <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                    <input class="form-control datepicker  mask_data " type="text" name="EXPERIENCIAPROFISSIONAL[dataDemissao][]"  value="<?=date('d/m/Y',strtotime($EXPERIENCIA->dataDemissao));?> " >
                </div>
            </div>
        </div>
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Motivo:</label> 
                <select  name="EXPERIENCIAPROFISSIONAL[motivo][]"  class="form-control text-center">
                    <option value="null">Selecione...</option>
                    <?php
                       if (!empty($SELECT_motivo)) {
                           foreach ($SELECT_motivo as $li) {
                              $select = ($li['descricao'] == $EXPERIENCIA->Motivo) ?'selected' :'';  
                              echo  "<option value=\"{$li['descricao']}\" {$select} >{$li['descricao']}</option>";
                           }
                       }else{
                           echo "<option value=\"\">off</option>";
                       }
                   ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12  col-md-6">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Cargo:</label> 
                <input class="form-control " type="text" name="EXPERIENCIAPROFISSIONAL[cargo][]"   value="<?=$EXPERIENCIA->cargo;?> " >
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Atividades:</label> 
                 <input class="form-control " type="hidden" name="EXPERIENCIAPROFISSIONAL[experienciaProficional_id][]"  value="<?=$EXPERIENCIA->experienciaProficional_id;?>" >
                <textarea class="form-control"   rows="5" name="EXPERIENCIAPROFISSIONAL[atividade][]"><?=$EXPERIENCIA->atividade;?></textarea>
            </div>
        </div>
    </div>  
<section>
<?php }?> 
<hr>
<div class="row">
    <div class="col-xs-12   col-md-12">
        <div class="form-group">
            <input type="hidden" name="DADOSPESSOAIS[colaborador_id]" value="<?=$DADOSPESSOAIS->colaborador_id;?>">
            <button class="btn btn-success "> <span class="glyphicon glyphicon-floppy-save"></span> Salvar</button>
            <a href="<?=$this->config->base_url('relatorios/')?>" class="btn btn-danger ">Voltar</a>
        </div>
    </div>
</div>
</form>
