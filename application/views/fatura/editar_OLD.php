<h1 class="title_h1" >FATURA - EDITAR FATURA</h1>
<hr>
<?php if(isset($error)){?>
    <div class="alert alert-danger" role="alert">
        <span  class="glyphicon glyphicon-exclamation-sign"></span><strong>  Atenção:</strong> <br>
        <ul>
            <?php 
                foreach ($error as $li){ 
                    echo"<li>{$li}</li>";
                }
            ?>
        </ul>
    </div>
<?php }?>
<form action="<?=$this->config->base_url('fatura/newRegister')?>" method="post">
    
   <!--
    =======================================================
    Fatura
    -->
     <?php include_once __DIR__ . './forms/frm_fatura.php'; ?>
     <?php include_once __DIR__ . './forms/frm_faturaExtra.php'; ?>
    
    <!--
    =======================================================
    Comentarios
    -->
      <?php include_once __DIR__ . './forms/list_comentario.php'; ?>
      <?php include_once __DIR__ . './forms/frm_comentario.php'; ?>
    <!--
    =======================================================
    Anexos
    -->
       <?php include_once __DIR__ . './forms/list_anexo.php'; ?>
       <?php include_once __DIR__ . './forms/frm_anexo.php'; ?>
    
      <div class="row">
          <div class="col-xs-12   col-md-12">
            <div class="form-group">
                <input type="submit"  value="Salvar"  class="btn btn-success ">
            </div>
        </div>
      </div>
      
</form>