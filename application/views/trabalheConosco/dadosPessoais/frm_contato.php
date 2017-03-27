<br>
<h4 class="box-title">Contato</h4>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Residêncial:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[telefoneResidencial]" class="form-control mask_telefone "  value="<?=(isset($frm['CONTATO']['telefoneResidencial'])) ? $frm['CONTATO']['telefoneResidencial'] :''; ?>"  maxlength="14" > 
            </div>
        </div>
    </div>  
    <div class="col-xs-12  col-sm-6 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Celular:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[celular]" class="form-control mask_telefone" value="<?=(isset($frm['CONTATO']['celular'])) ? $frm['CONTATO']['celular'] :''; ?>"   maxlength="14" > 
            </div>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6 col-md-4">
        <div class="form-group">
            <label>Contato:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="CONTATO[telefoneContato]" class="form-control mask_telefone "  value="<?=(isset($frm['CONTATO']['telefoneContato'])) ? $frm['CONTATO']['telefoneContato'] :''; ?>"  maxlength="14" > 
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
                <input class="form-control" type="email" name="CONTATO[email]" value="<?=(isset($frm['CONTATO']['email'])) ? $frm['CONTATO']['email'] :''; ?>" >
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12  col-sm-6 col-md-12">
        <div class="form-group">
            <a aria-expanded="true" href="#formacao" data-toggle="tab" class="btn btn-primary">Próximo &NestedGreaterGreater;</a>
            <input type="submit" name="" value="Finalizar"  class="btn btn-success _confirmaFinalizar">
        </div>
    </div>
</div>