<h1 class="title_h1" >RH</h1>
<p>Gerênciador de Curriculos Empregaticio :</p>
<br>

<form action="<?=$this->config->base_url('relatorios')?>" method="post">
    <div class="form-group">
        <label>Pesquisar por:</label> 
        <div class="input-group">
            <input type="text" class="form-control"  placeholder="nome, cpf, rg, cargo" name="filtro">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary botaoLoadForm"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
                
            </span>
        </div>
    </div>
</form>


<div id="_alert"></div>   

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>NOME</th>
            <th>RG</th>
            <th>CPF</th>
            <th>CARGO </th>
            <th colspan="3" class="col-md-3">&NegativeMediumSpace;</th>
        </tr>
    </thead>
    <tbody>
        <?php 
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
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8" class="text-center" id="_totalRegistro">Registros encontrados <?=(isset($totalRegistro)) ? $totalRegistro : 00 ;?></td>
        </tr>
        <tr>
            <td colspan="8">
                <?=(isset($paginacao))? $paginacao : '';?>
            </td>
        </tr>
    </tfoot>
</table>     



















