<br>
<h4 class="box-title">Dados Pessoais</h4>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Cargo Pretendido:</label> 
            <select class="form-control text-center " name="DADOSPESSOAIS[cargoPretendido]"   >
                <option value="">Selecione...</option>
                <?php
                    if (!empty($cargoPretendido)) {
                        foreach ($cargoPretendido as $li) {
                           $select = ($li['descricao'] == $frm['DADOSPESSOAIS']['cargoPretendido']) ?'selected' :''; 
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
                    if (!empty($prenetcaoSalarial)) {
                        foreach ($prenetcaoSalarial as $li) {
                           $select = ($li['descricao'] == $frm['DADOSPESSOAIS']['pretencaoSalarial']) ?'selected' :'';  
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
            <input class="form-control" type="text" name="DADOSPESSOAIS[naturalidade]" value="<?=(isset($frm['DADOSPESSOAIS']['naturalidade'])) ? $frm['DADOSPESSOAIS']['naturalidade'] :'';  ?>" >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Nome:</label> 
            <input class="form-control " type="text" name="DADOSPESSOAIS[nome]" value="<?=(isset($frm['DADOSPESSOAIS']['nome'])) ? $frm['DADOSPESSOAIS']['nome'] :''; ?>" >
        </div>
    </div>
     <div class="col-xs-12  col-sm-6 col-md-3">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Data Nascimento:</label> 
                <div class="input-group">
                    <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                    <input class="form-control datepicker  mask_data"  type="text" name="DADOSPESSOAIS[dataNascimento]"  value="<?=(isset($frm['DADOSPESSOAIS']['dataNascimento'])) ? $frm['DADOSPESSOAIS']['dataNascimento'] :''; ?>" >
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
                    if (!empty($sexo)) {
                        foreach ($sexo as $li) {
                           $select = ($li['descricao'] == $frm['DADOSPESSOAIS']['sexo']) ?'selected' :''; 
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
                    if (!empty($estadoCivil)) {
                        foreach ($estadoCivil as $li) {
                           $select = ($li['descricao'] == $frm['DADOSPESSOAIS']['estadoCivil']) ?'selected' :'';  
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
                    if (!empty($filhos)) {
                        foreach ($filhos as $li) {
                           $select = ($li['descricao'] == $frm['DADOSPESSOAIS']['filhos']) ?'selected' :'';   
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
            <input class="form-control mask_cpf" type="text" name="DOCUMENTACAO[cpf]" value="<?=(isset($frm['DOCUMENTACAO']['cpf'])) ? $frm['DOCUMENTACAO']['cpf'] :''; ?>" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-3">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>RG:</label> 
            <input class="form-control " type="text" name="DOCUMENTACAO[rg]"  maxlength="14"  value="<?=(isset($frm['DOCUMENTACAO']['rg'])) ? $frm['DOCUMENTACAO']['rg'] :''; ?>" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-3">
        <div class="form-group">
            <label>N° Habilitação:</label> 
            <input class="form-control " type="text" name="DOCUMENTACAO[numeroHabilitacao]"  maxlength="50"  value="" >
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-2 col-md-offset-1">
        <div class="form-group">
            <label>Categoria:</label> 
            <select class="form-control  text-center" name="DOCUMENTACAO[categoria]  "   >
               <option value="null">Selecione...</option>
                <?php
                    if (!empty($documentacao)) {
                        foreach ($documentacao as $li) {
                           $select = ($li['descricao'] == $frm['DOCUMENTACAO']['categoria']) ?'selected' :'';   
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