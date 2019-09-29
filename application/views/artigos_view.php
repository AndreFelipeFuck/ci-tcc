<?php include 'cabeca.php';?>
<div class="espaco2"></div>
    <div class="conteinerArtView" id="sombra">     
      <section class="conteiner0">
            <h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Artigos</h1>
            <h4 style="background-color: #51C0CF; font-size: 20px; margin-bottom: 2%; width: 24%; padding: 0.5%; border-left: solid 5px #17a2b8; border-radius: 2px; color: #fff;">No momento há <?php echo $contar?> artigo(s)</h4>
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
                        <p><?php echo $artigo->resumo?></p>
                        <label>Postado pelo aluno:<h4 id="nomeAutor2"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>" style="color: #17a2b8;"><?php echo $artigo->nomeAluno;?></a></h4></label>
                        <br>
                        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu";>Visualizar</a>
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
                            <label>Postado pelo professor:<h4 id="nomeAutor2"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>" style="color: #28a745;"><?php echo $artigo->nomeProfessor;?></a></h4></label>
                        <br>
                        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visualizar</a>
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
<?php include 'rodape.php' ?>