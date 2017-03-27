<div class="text-center visible-xs visible-sm">
    <br>
    <img   src="<?=$this->config->base_url('assets/img/logo-3.png');?>" width="240" >
    <hr>
</div>
<h1 class="title_h1" >TRABALHE CONOSCO</h1>
<p>Cadastre-se seu currículo em nosso banco de recursos humanos através do formulário abaixo:</p>

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

<div class="nav-tabs-custom ">
    <ul class="nav nav-tabs" style="display: none">
        <li><a aria-expanded="true" href="#dadosPessoais" data-toggle="tab">1.DADOS PESSOAIS</a></li>
        <li><a aria-expanded="false" href="#formacao" data-toggle="tab">2.FORMAÇÃO ACADÊMICA</a></li>
        <li><a aria-expanded="false" href="#esperiencia" data-toggle="tab">3.EXPERIÊNCIA PROFISSIONAL</a></li>
    </ul>
    <form action="<?= base_url("TrabConosco/newRegister"); ?>" method="post">
        <div class="tab-content">
            <div class="tab-pane active" id="dadosPessoais">
                <section id="new">
                    <?php include_once __DIR__ . './dadosPessoais/frm_dadosPessoais.php'; ?>
                    <?php include_once __DIR__ . './dadosPessoais/frm_endereco.php'; ?>
                    <?php include_once __DIR__ . './dadosPessoais/frm_contato.php'; ?>
                </section>
            </div>
            <div class="tab-pane" id="formacao">
                <section id="new">
                    <?php include_once __DIR__ . './formacao/frm_formacao.php'; ?>
                </section>
            </div>
            <div class="tab-pane" id="esperiencia">
                <section id="new">
                    <?php include_once __DIR__ . './experiencia/frm_experienciasProficionais.php'; ?>
                </section>
            </div>
        </div>
    </form>
</div><!--nav-tabs-custom-->     