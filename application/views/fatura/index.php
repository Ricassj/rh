<div class="container">
    <h1 class="title_h1" >FATURA - LANÇAMENTO DE FATURA</h1>
    <hr>
     <?php if (isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <span  class="glyphicon glyphicon-exclamation-sign"></span><strong>  Atenção:</strong> <br>
            <ul>
                <?php
                    foreach ($error as $li) {
                        echo"<li>{$li}</li>";
                    }
                ?>
            </ul>
        </div>
     <?php } ?>
     <?=  form_open_multipart('fatura/newRegister')  ?>   
        <!--
        =======================================================
        Fatura -->
        <?php include_once __DIR__ . './forms/frm_fatura.php'; ?>
        <!--
        =======================================================
        Comentarios -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Postar Comentário:</label> 
                    <textarea class="form-control "  name="comentario" rows="3" ><?= (isset($frm['LANCAMENTO']['comentario'])) ? $frm['LANCAMENTO']['comentario'] : ''; ?></textarea>
                </div>
            </div>
        </div>   
        <!--
        =======================================================
        Anexos -->
        <div class="row">
            <div class="col-md-9">
                <label>Upload File:</label> 
            </div>
        </div>
        <div id="listInputFiles" class="text-center"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <a href="javascript:void(0)" class="btn btn-danger" id="btnMaisCampo">Adicionar Arquivo</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12   col-md-12">
                <div class="form-group">
                    <input type="submit"  value="Lançar"  class="btn btn-success ">
                </div>
            </div>
        </div>
    <?=  form_close();?>
</div>
<br>
<br>