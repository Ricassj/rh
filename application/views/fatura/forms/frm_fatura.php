<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Fornecedor:</label> 
            <select class="form-control " name="FATURA[idFornecedor]"   >
                <option value="false" selected="">Selecione...</option>
                <?php
                    if (!empty($fornecedor)) {
                        foreach ($fornecedor as $li) {
                            $select = ($li->idFornecedor == $frm['FATURA']['idFornecedor']) ? 'selected' : '';
                            echo "<option value=\"{$li->idFornecedor}\"  {$select} >{$li->nome}</option>";
                        }
                    } else {
                        echo "<option value=\"\">off</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>&NegativeMediumSpace;</label>                
            <a  id="<?= $this->config->base_url('modal/index/fornecedor') ?>" class="botaoLoad  btn btn-sm btn-primary modalOpen form-control" data-target="#modalFornecedor">
                Novo 
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Código de Barra:</label> 
            <input class="form-control " type="text" name="FATURA[codigoBarra]" value="<?= (isset($frm['FATURA']['codigoBarra'])) ? $frm['FATURA']['codigoBarra'] : ''; ?>" >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5 ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Data Vencimento:</label> 
            <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-calendar"></i></span>
                <input class="form-control datepicker  mask_data"  type="text" name="FATURA[dataVencimento]"  value="<?= (isset($frm['FATURA']['dataVencimento'])) ? $frm['FATURA']['dataVencimento'] : ''; ?>" >
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>Recorrente:</label> 
            <input type="checkbox" name="FATURA[recorrente]" value="true"   <?= ( isset($frm['FATURA']['recorrente']) && $frm['FATURA']['recorrente'] =='true') ? 'checked="true"' : ''; ?>   class="form-control" /> 
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 ">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span> Valor:</label> 
            <input class="form-control   mask_real"  type="text" name="FATURA[valor]"  value="<?= (isset($frm['FATURA']['valor'])) ? $frm['FATURA']['valor'] : ''; ?>" >
        </div>
    </div>    
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label><span class="_campoObrigatorio">*</span>Razão Social:</label> 
            <input class="form-control " type="text" name="FATURA[razaoSocial]" value="<?= (isset($frm['FATURA']['razaoSocial'])) ? $frm['FATURA']['razaoSocial'] : ''; ?>" >
        </div>
    </div>
</div>
<section  <?= ( isset($DISPLAY) && NULL == !$DISPLAY ) ? $DISPLAY : ''; ?>>    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Aprovar:</label> 
                <select class="form-control text-center" name="FATURA[aprovar]">
                    <option value="true" <?= (isset($frm['FATURA']['aprovar']) && $frm['FATURA']['aprovar'] =='true' ) ? 'selected' : ''; ?>  >SIM</option>
                    <option value="false"  <?= (isset($frm['FATURA']['aprovar']) && $frm['FATURA']['aprovar'] =='false' ) ? 'selected' : ''; ?> >NÃO</option>			
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label><span class="_campoObrigatorio">*</span>Inativar:</label> 
                <select class="form-control text-center" name="FATURA[inativar]">
                    <option value="true" <?= (isset($frm['FATURA']['inativar']) && $frm['FATURA']['inativar'] =='true' ) ? 'selected' : ''; ?>>SIM</option>
                    <option value="false" <?= (isset($frm['FATURA']['inativar']) && $frm['FATURA']['inativar'] =='false' ) ? 'selected' : ''; ?>>NÃO</option>			
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit"  value="Salvar" class="btn btn-primary ">
        </div>
    </div>
</section>
<!--MODAL-->
<div class="modal fade " id="modalFornecedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
