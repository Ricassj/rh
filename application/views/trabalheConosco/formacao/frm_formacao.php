<br>
<h4 class="box-title">Formação</h4>
<br>
<div id="lista"></div>
<section>
    <div class="row ">
        <div class="col-xs-12  col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Formação:</label> 
                <select class="form-control text-center" name="FORMACAO[formacao][]"   >
                    <option value="null">Selecione...</option>
                    <?php
                    if (!empty($formacao)) {
                        foreach ($formacao as $li) {
                            $select = ($li['descricao'] == $frm['FORMACAO']['formacao'][0]) ?'selected' :''; 
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
                <input class="form-control " type="text" name="FORMACAO[curso][]"  value="<?=(isset($frm['FORMACAO']['curso'][0])) ? $frm['FORMACAO']['curso'][0] :''; ?>" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Instituição:</label> 
                <input class="form-control " type="text" name="FORMACAO[instituicao][]"  value="<?=(isset($frm['FORMACAO']['instituicao'][0])) ? $frm['FORMACAO']['instituicao'][0] :''; ?>" >
            </div>
        </div>
    </div>
    <div class="row  text-right">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <a href="javascript:void(0)" class="btn btn-warning" id="btn-add-mais">+ Adicionar Formação</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" >
        <div class="col-xs-12  col-sm-6 col-md-12">
            <div class="form-group">
                <a aria-expanded="true" href="#dadosPessoais" data-toggle="tab" class="btn btn-primary">&NestedLessLess; Anterior</a>
                <input type="submit" value="Finalizar"  class="btn btn-success _confirmaFinalizar">
                <a aria-expanded="true" href="#esperiencia" data-toggle="tab" class="btn btn-primary">Próximo  &NestedGreaterGreater;</a>
            </div>
        </div>
    </div>
</section>