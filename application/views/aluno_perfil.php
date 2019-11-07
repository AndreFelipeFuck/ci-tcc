<?php  include "cabeca.php";
//print_r($_SESSION);
$dataNasc = explode(" ", $perfil->dataNasc);
$dataNasc = explode("-", $dataNasc[0]);
$dataNasc = array_reverse($dataNasc);
$dataNasc = implode("/", $dataNasc);
?>
<head>
    <title>Atom | <?php echo $perfil->nomeAluno;?></title>
</head>
<div class="espaco2"></div>
    <div class="conteinerPerfil" id="sombra">
            <section class="fotoPerfil">
                <div class="view overlay">
                    <?php
                    if ($perfil->imgAluno == null) {
                       ?><figure class="img-rounded rounded-circle img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class=" rounded-circle img-fluid" alt="smaple image"></figure><?php
                    }else{
                        ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$perfil->imgAluno")?>" class="rounded-circle img-fluid" alt="smaple image"></figure><?php
                    }
                ?>
                    <div class="mask flex-center rgba-black-strong">
                        <p class="white-text"><!--Editar foto--></p>
                    </div>
                </div>
            </section>
            <section class="InfoPerfil">
                <div id="nomePerfil">
                    <h2 id="nomeFont"><?php echo $perfil->nomeAluno;?></h2>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #17a2b8;">Email:</label>
                    <h6><?php echo $perfil->email;?></h6>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #17a2b8;">Data de Nascimento:</label>
                    <h6><?php echo $dataNasc;?></h6>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #17a2b8;">Curso:</label>
                    <h6><?php echo $perfil->curso;?></h6>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #17a2b8;">Ano Letivo:</label>
                    <h6><?php echo $perfil->anoLetivo;?></h6>
                </div>
                <div id="infoAlign">
                    <h4><span class="badge badge-secondary" style="background-color:#17a2b8;">Aluno</span></h4>
                    <?php 
                    if(!empty($_SESSION['alunos'])):
                        if($_SESSION['alunos'] == $_GET['codAluno']):?>
                            <a href="<?php echo site_url('alunos/aluno_editar/')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn" style=" background-color:#17a2b8; border-radius: 49%; padding:10px;"><img src="<?php echo base_url('assets/bootstrap/img/config.png')?>" width="30" height="30"></a>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </section>
        <div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div><br><br>
                <div id="infoAlign">
                       <?php 
                        if(!empty($_SESSION['alunos'])):
                                if($_SESSION['alunos'] == $_GET['codAluno']):?>
                                    <a href="<?php echo site_url('alunos/artigos_add')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn" style="background-color: #17a2b8; color: #fff;">Novo artigo</a>
                                    <a href="<?php echo site_url('alunos/artigos_view')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn" style="background-color: #17a2b8; color: #fff;">Visualizar Artigos</a>
                            <?php endif; ?>
                        <?php endif; ?>
                </div>
                <br><br>
    <?php foreach($artigos as $artigo):?>
             
                    <div class="contPerfil">
            <?php if($artigo->imgArtigo == null){?>
                        <figure><img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>"></figure><?php
                }else{
                        ?><figure><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>"></figure>
            <?php }?>
                    <div>
                        <h5 id="textTitulo"><?php echo $artigo->titulo;?></h5>
                        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visualizar</a>
                    </div>        

                    </div>    
        <?php endforeach?>
    </div>
    </section>
    

<?php  include "rodape.php";