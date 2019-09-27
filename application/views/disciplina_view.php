<?php
include "cabeca.php";
?>
<header>
    <title>Atom | </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/animate.css')?>">
</header>
<div class="espaco2"></div>
 <div class="conteinerDiscPage" id="sombra">
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner0">
        <div style="margin-bottom: 1%;">
            <div id="logoDisc" style="background-color:#17a2b8;">
                <figure><img src="<?php echo base_url('assets//bootstrap/img/bio.png')?>" width="100" height="100" alt="smaple image" class="animated-rotateIn" style="animation-delay: 3s;"></figure>
            </div>
            <div id="tituloDisc" style="background-color:#17a2b8;"><h1 style="color: #fff">Artigos de <?php echo $disciplinas->nomeDisciplina?></h1></div>
        </div>
        <?php foreach($artigos as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->corpo?></p>
                        <label>Postado pelo aluno:<h4 id="nomeAutor"><?php echo $artigo->nomeAluno;?></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
     <?php foreach($artigosProfessor as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->corpo?></p>
                        <label>Postado pelo professor:<h4 id="nomeAutor"><?php echo $artigo->nomeProfessor;?></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
   </section>
    
</div>