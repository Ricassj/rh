<h1 class="title_h1" >FATURA - APROVAÇÃO DE FATURAS</h1>

<br>

<form action="<?= $this->config->base_url('fatura/aprovar') ?>" method="post">
    <div class="form-group">
        <label>Pesquisar por:</label> 
        <div class="input-group">
            <input type="text" class="form-control"  placeholder="Fornecedor, Razão Social" name="filtro">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary botaoLoadForm"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
            </span>
        </div>
    </div>
</form>

<hr>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>DATA VENC.</th>
            <th>FORNECEDOR</th>
            <th>CÓD. BARRA</th>
            <th>RAZÃO SOCIAL</th>
            <th>VALOR</th>
            <th>APROVAR</th>         
            <th>INATIVAR</th>
            <th  class="col-md-3">&NegativeMediumSpace;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($fatura)) {
            foreach ($fatura as $li) {
                ?>
                <tr>
                    <td><?=$li->idFatura; ?></td>
                    <td><?= date('d/m/Y', strtotime($li->dataVencimento)); ?></td>
                    <td><?= $li->nome; ?></td>
                    <td><?= $li->codigoBarra; ?></td>
                    <td><?= $li->razaoSocial; ?></td>
                    <td><?= $li->valor; ?></td>
                    <td><?= ($li->aprovar === 'false') ? 'NÃO' : 'SIM'; ?></td>
                    <td><?= ($li->inativar === 'false') ? 'NÃO' : 'SIM'; ?></td>
                    <td>
                        <table>
                            <tr >
                                <td> <a  id="<?= $this->config->base_url('modal/index/aprovar-' . $li->idFatura) ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                        Aprovar</a></td>
                                <td><a  id="<?= $this->config->base_url('modal/index/comentario-' . $li->idFatura) ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                        Comentário</a></td>
                                <td> <a  id="<?= $this->config->base_url('anexo/index/anexo-' . $li->idFatura) ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                        Anexo</a></td>
                                <td> <a  id="<?= $this->config->base_url('modal/index/inativar-' . $li->idFatura) ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                        Inativar</a></td>
                                <td> <a  id="<?= $this->config->base_url('modal/index/editar-' . $li->idFatura) ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                        Editar</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8" class="text-center" id="_totalRegistro">Registros encontrados <?= (isset($totalRegistro)) ? $totalRegistro : 00; ?></td>
        </tr>
        <tr>
            <td colspan="8">
                <?= (isset($paginacao)) ? $paginacao : ''; ?>
            </td>
        </tr>
    </tfoot>
</table>    

<!--modal-->
<div class="modal fade " id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
