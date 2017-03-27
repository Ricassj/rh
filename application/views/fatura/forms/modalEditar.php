<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="title_h1">EDITAR FATURA</h1>
        </div>			
        <div class="modal-body">
            <form action="<?=$this->config->base_url('fatura/modalEditar')?>" method="post">
                <?php include_once __DIR__ . './frm_fatura.php'; ?>
                <input type="hidden" name="FATURA[idFatura]"  value="<?=(isset($frm['FATURA']['idFatura'])) ? $frm['FATURA']['idFatura'] : ''; ?>" >
            </form>
        </div>
    </div>
</div>
<script  type="text/javascript">
$(function () {
    $('.datepicker').datepicker({format: 'dd/mm/yyyy', language: 'pt-BR'});
    $('.mask_data').mask('99/99/9999');
    $(".modalOpen").click(carregarModal);
    
    function carregarModal() {
        var modal = $(this).attr("data-target");
        var caminho = $(this).attr("id");

        $(modal).html('');
        $(modal).load(caminho);
        $(modal).modal();
    };
    
     $(".mask_real").priceFormat({
        prefix: 'R$ ',
        centsSeparator: ',',
        thousandsSeparator: '.'
    });

});
</script>
