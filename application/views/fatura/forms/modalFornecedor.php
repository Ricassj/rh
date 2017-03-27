<div class="modal-dialog" style="width:300px" >
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="title_h1">Fornecedor</h1>
        </div>			
        <div class="modal-body ">
            <form name="formFornecedor" method="post">
                <div class="row">
                    <div class=" col-md-12">
                        <div class="form-group">
                            <input type="text" name="nome" value=""  id="inputFornecedor" class="form-control" required="">
                        </div>
                    </div>
                    <div class=" col-md-2">
                        <input type="submit"  value="Adicionar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('form[name="formFornecedor"]').submit(function(e){
         e.preventDefault()   ;
         $.ajax({
            url: '../fatura/addFornecedor',
            dataType: 'json',
            data: $(this).serialize(),
            type: 'post',
            success: function (obj) {
                if(obj.cadastro =='true')
                    alert('Registrado  com  sucesso !');
                   location.reload();
            }, error: function () {
                alert("Erro ao enviar requisição!");
            }
        }); 
    });
</script>