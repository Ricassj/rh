<h1 class="title_h1" >FATURA - PAGAMENTO</h1>
<br>

<form action="<?= $this->config->base_url('relatorios') ?>" method="post">
    <div class="form-group">
        <label>Pesquisar por:</label> 
        <div class="input-group">
            <input type="text" class="form-control"  placeholder="lero, lero, lero, lero" name="filtro">
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
            <th>FORNECEDOR</th>
            <th>CÓD. BARRA</th>
            <th>VALOR</th>
            <th>VENCIMENTO</th>
            <th>RAZÃO SOCIAL</th>
            <th>APROVADO</th>
            <th>INATIVO</th>
            <th colspan="3" class="col-md-3">&NegativeMediumSpace;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /*
          if(isset($colaborador)){
          foreach($colaborador as $li){?>
          <tr class="_tr<?=$li->colaborador_id;?>">
          <td><?=$li->nome;?></td>
          <td><?=$li->rg;?></td>
          <td><?=$li->cpf;?></td>
          <td><?=$li->cargoPretendido;?></td>
          <td><a href="<?=$this->config->base_url("relatorios/editar/{$li->colaborador_id}");?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Editar</a></td>
          <td><a href="<?=$this->config->base_url("relatorios/visualizar/{$li->colaborador_id}");?>" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span> Visualizar</a></td>
          <td><a href="javascript:void(0)" class="btn btn-danger  _btnExcluir" id="<?=$li->colaborador_id;?>" ><span class="glyphicon glyphicon-trash"></span> Excluir</a></td>
          </tr>
          <?php
          }
          }
         */
        ?>
        <?php for ($i = 0; $i <= 10; $i++) { ?>
            <tr class="">
                <td>Fornecedor 001</td>
                <td>100000.0000.00000.0000.-5556</td>
                <td>R$ 126.56</td>
                <td>12/11/2016</td>
                <td>Easy Segui</td>
                <td>SIM</td>
                <td><?php
                    if ($i % 2 == 0) {
                        echo"SIM";
                    } else {
                        echo"NÃO";
                    }
                    ?></td>
                <td>
                    <table>
                        <tr>
                            <td> <a  id="<?= $this->config->base_url('modal/index/aprovar') ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                    Pag Lançado</a></td>
                            <td><a  id="<?= $this->config->base_url('modal/index/comentario') ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                    Comentário</a></td>
                            <td> <a  id="<?= $this->config->base_url('modal/index/anexo') ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                    Anexo</a></td>
                            <td> <a  id="<?= $this->config->base_url('modal/index/inativar') ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                    Inativar</a></td>
                            <td> <a  id="<?= $this->config->base_url('modal/index/editar') ?>" class="botaoLoad  btn btn-sm btn-default modalOpen" data-target="#modal">
                                    Editar</a></td>

                        </tr>
                    </table>
                </td>
            </tr>
        <?php } ?>
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
<div class="modal fade " id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
