<?php include 'cabeca.php';?>
<div class="espaco2"></div>
<div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

         
  <section class="conteiner0">
        <h1>Artigos</h1>
        <h3>No momento a <?php echo $contar?> artigo(s)</h3>
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
                    <p><?php echo $artigo->resumo ?></p>
                <label>Postado pelo aluno:<h4 id="nomeAutor"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>"><?php echo $artigo->nomeAluno;?></a></h4></label>
                <br>
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
                    <p><?php echo $artigo->resumo?></p>
                        <label>Postado pelo professor:<h4 id="nomeAutor"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>"><?php echo $artigo->nomeProfessor;?></a></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
   </section>
    
</div>
    
<!--
       <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn"><article class="vidCont">
            <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
            <div>
                <h3><?php echo $artigo->titulo;?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </article></a>
        <br>
-->
    