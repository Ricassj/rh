<br>
<h4 class="box-title">Endereço</h4>
<br>
<div class="row">
    <div class="col-xs-12 col-md-5">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>CEP:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-search"></i></span>
                <input class="form-control mask_cep" type="text" name="ENDERECO[cep]"  value="<?=(isset($frm['ENDERECO']['cep'])) ? $frm['ENDERECO']['cep'] :''; ?>" >
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-1">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>UF:</label> 
            <input class="form-control " type="text"  maxlength="2" name="ENDERECO[uf]" value="<?=(isset($frm['ENDERECO']['uf'])) ? $frm['ENDERECO']['uf'] :''; ?>" >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Endereço:</label> 
            <input class="form-control " type="text" name="ENDERECO[endereco]"  value="<?=(isset($frm['ENDERECO']['endereco'])) ? $frm['ENDERECO']['endereco'] :''; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-2  ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Número/Apto:</label>
            <div class="input-group">
                <input type="text" name="ENDERECO[numeroApartamento]" class="form-control " maxlength="6"  value="<?=(isset($frm['ENDERECO']['numeroApartamento'])) ? $frm['ENDERECO']['numeroApartamento'] :''; ?>" > 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Bairro:</label> 
            <input class="form-control " type="text" name="ENDERECO[bairro]" value="<?=(isset($frm['ENDERECO']['bairro'])) ? $frm['ENDERECO']['bairro'] :''; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Cidade:</label> 
            <input class="form-control " type="text" name="ENDERECO[cidade]" value="<?=(isset($frm['ENDERECO']['cidade'])) ? $frm['ENDERECO']['cidade'] :''; ?>" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <label>Complemento:</label> 
            <input class="form-control " type="text" name="ENDERECO[complemento]" value="<?=(isset($frm['ENDERECO']['complemento'])) ? $frm['ENDERECO']['complemento'] :''; ?>" >
        </div>
    </div>
</div>