<div  id="table-comentario1">    
    <?php if (!empty($ArrayObjctListComentario)) : ?>
        <div style="overflow-y: auto; height: 170px" >
             <table class="table table-striped">
                <?php foreach ($ArrayObjctListComentario as $value) { ?>
                    <tr>
                        <td> 
                            <p><?=$value->comentario ?><br><span style="font-size: 12px; font-weight: bold"> <?= date('d/m/Y', strtotime($value->dataPostagem)) ?></span> </p>
                        </td>
                    </tr>
                <?php } ?>
            </table>	   
        </div>
    <?php  else: ?>
        <div class="alert alert-danger"> Nenhum arquivo indexado. </div>
    <?php  endif; ?>    
</div>
<div style="overflow-y: auto; height: 170px; display: none" id="table-comentario2"></div>