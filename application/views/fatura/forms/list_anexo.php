<?php 
    if (!empty($ArrayListObjectAnoxo)): ?>
        <div style="overflow-y: auto; ">
            <table class="table table-striped">
                <?php foreach ($ArrayListObjectAnoxo as $li) { ?>
                    <tr class="trAnexo-<?= $li->idAnexo; ?>">
                        <td><?= $li->anexo; ?></td>
                        <td  class="text-right">
                            <a href="<?= $this->config->base_url("anexo/showAnexo/{$li->idAnexo}") ?>" target="blanc" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="javascript:void(0)" onclick="deleteAnexo(<?=$li->idAnexo?>)"   class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <?php
    else:
        echo '<div class="alert alert-danger">  Nenhum arquivo anexado. </div>';
    endif;
?>

<div id="errorAnexo"></div>
<script type="text/javascript">
    function deleteAnexo(id){
        if(confirm('Deseja realmente excluir este arquivo ?')){
            $('.trAnexo-'+id).hide('slow');
            $.ajax({
                url:"<?= $this->config->base_url('anexo/deleteAnexo/') ?>" ,
                dataType: 'json',
                data: {idAnexo :id},
                type: 'get',
                success: function (obj) {
                   if(obj.numAnexo < 1){
                        $('#errorAnexo').html('<div class="alert alert-danger">Nenhum arquivo indexado. </div>');
                    }
                }, error: function () {
                    alert("Erro ao enviar requisição!");
                }
            });
        }
    }
</script>