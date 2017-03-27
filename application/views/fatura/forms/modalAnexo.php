  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="title_h1">Anexo(s)</h1>
        </div>
        <div class="modal-body">
            <?php 
            /**
             *=================================
             *  Lista de Anexos
             *       
             */
            include_once __DIR__ . './list_anexo.php'; 
            ?>
            <hr>
            <form action="<?= $this->config->base_url('anexo/doUploadModalAnexo') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <label>Upload File:</label> 
                        <div class="alert alert-info">
                            <input type="file" name="anexo">	
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input  type="hidden" name="idFatura" value="<?= $idFatura ?>" >
                            <input class="btn btn-primary" type="submit" value="Enviar" >
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>