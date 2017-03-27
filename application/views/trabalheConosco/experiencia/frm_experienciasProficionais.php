<br>
<h4 class="box-title">Experiências</h4>
<br>
<div id="listaE"></div>
<section>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Empresa:</label> 
                <input class="form-control" type="text" name="EXPERIENCIAPROFISSIONAL[empresa][]"  value="<?=(isset($frm['EXPERIENCIAPROFISSIONAL']['empresa'][0])) ? $frm['EXPERIENCIAPROFISSIONAL']['empresa'][0] :''; ?>" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Data Adimissão:</label> 
                <div class="input-group">
                    <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                    <input class="form-control datepicker  mask_data"  type="text" name="EXPERIENCIAPROFISSIONAL[dataAdimissao][]"  value="<?=(isset($frm['EXPERIENCIAPROFISSIONAL']['dataAdimissao'][0])) ? $frm['EXPERIENCIAPROFISSIONAL']['dataAdimissao'][0] :''; ?>" >
                </div>
            </div>
        </div>
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Data Demissão:</label>
                <div class="input-group">
                    <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                    <input class="form-control datepicker  mask_data " type="text" name="EXPERIENCIAPROFISSIONAL[dataDemissao][]"  value="<?=(isset($frm['EXPERIENCIAPROFISSIONAL']['dataDemissao'][0])) ? $frm['EXPERIENCIAPROFISSIONAL']['dataDemissao'][0] :''; ?>" >
                </div>
            </div>
        </div>
        <div class="col-xs-12  col-sm-6 col-md-4">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Motivo:</label> 
                <select  name="EXPERIENCIAPROFISSIONAL[motivo][]"  class="form-control text-center">
                    <option value="null">Selecione...</option>
                    <?php
                       if (!empty($motivo)) {
                           foreach ($motivo as $li) {
                              $select = ($li['descricao'] == $frm['EXPERIENCIAPROFISSIONAL']['motivo'][0]) ?'selected' :'';  
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
                <input class="form-control " type="text" name="EXPERIENCIAPROFISSIONAL[cargo][]"   value="<?=(isset($frm['EXPERIENCIAPROFISSIONAL']['cargo'][0])) ? $frm['EXPERIENCIAPROFISSIONAL']['cargo'][0] :''; ?>" >
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Atividades:</label> 
                <textarea class="form-control"   rows="5" name="EXPERIENCIAPROFISSIONAL[atividade][]"><?=(isset($frm['EXPERIENCIAPROFISSIONAL']['atividade'][0])) ? $frm['EXPERIENCIAPROFISSIONAL']['atividade'][0] :''; ?></textarea>
            </div>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <a href="javascript:void(0)" class="btn btn-warning " id="btn-add-maisE">+ Adicionar Esperiência</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <a aria-expanded="true" href="#formacao" data-toggle="tab" class="btn btn-primary">&NestedLessLess; Anterior</a>
                <input type="submit"  value="Finalizar"  class="btn btn-success _confirmaFinalizar">
            </div>
        </div>
    </div>
<section>