<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="title_h1">Comentário(s)</h1>
        </div>			
        <div class="modal-body">
            <?php 
            /**
             *=================================
             *  Lista de comentários
             *       
             */
            include __DIR__ . './list_comentario.php'; 
            ?>
            <hr>
            <!--
            =====================================
            Postar comentários
            -->
            <form  name="frmComentario"  method="post"  >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Postar Comentário:</label> 
                            <textarea class="form-control "  name="comentario" rows="3" required=""><?= (isset($frm['LANCAMENTO']['comentario'])) ? $frm['LANCAMENTO']['comentario'] : ''; ?></textarea>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="idFatura" value="<?= $idFatura ?>">
                            <input type="hidden" name="dataPostagem" value="<?= date('Y-m-d') ?>">
                            <input type="submit" value="Postar" class="btn btn-primary ">   
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('form[name="frmComentario"]').submit(function(e){
            e.preventDefault();
            var dadosForm  = $(this).serialize();
            $.ajax({
                url:"<?= $this->config->base_url('modal/modalComentario') ?>" ,
                dataType: 'json',
                data: dadosForm,
                type: 'post',
                success: function (obj) {
                   $('#table-comentario1').hide();           
                   $('#table-comentario2').html('');
                   var _dadosC ='';  
                   $.each(obj.comentarios, function( k,v ) { 
                        _dadosC = '  <table class="table table-striped" >'
                                + '     <tr>'
                                + '        <td>'
                                + '          <p>'+v.comentario+'<br><span style="font-size: 12px; font-weight: bold"> '+v.dataPostagem+'</span> </p>'
                                + '        </td>'
                                + '     </tr>'
                                + '  </table>';
                             $('#table-comentario2').show();                        
                             $('#table-comentario2').append(_dadosC);                        
                    }); 
                }, error: function () {
                    alert("Erro ao enviar requisição!");
                }
            });
        });
    });
</script>