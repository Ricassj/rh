<div class="modal-dialog" style="width:300px" >
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="title_h1">Aprovar</h1>
        </div>			
        <div class="modal-body ">
            <form action="<?= $this->config->base_url('fatura/modalAprovarInativar') ?>" method="post">
                <div class="row">
                    <div class=" col-md-8">
                        <div class="form-group">
                            <select name="aprovar" class="form-control" required="">
                                <option value="">...</option>
                                <option value="true">SIM</option>
                                <option value="false">NÃO</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-md-2">
                        <input type="hidden" name="idFatura" value="<?= $idFatura ?>">
                        <button class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>