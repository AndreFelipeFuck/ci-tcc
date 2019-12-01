<?php 
	include "cabeca.php";

 ?>
<header>
    <title>Atom | Home</title>
</header>
<div class="espaco2"></div>

	<div class="conteiner0">
	 	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo base_url('assets/bootstrap/img/slide3.png')?>" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url('assets/bootstrap/img/slide2.png')?>" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block" id="slideLegend">
			    <h1>Junte-se a nós!</h1>
			    <h5>Compartilhe seus trabalhos com a gente e ajude outras pessoas!</h5>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url('assets/bootstrap/img/slide1.png')?>" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>


	<section class="conteiner1" >

		<nav class="navbar navbar-light" id="sombra2">
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=1" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets//bootstrap/img/bio.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Biologia</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=2" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/fisica.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Física</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=10" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/filo.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Filosofia</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=4" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/geo.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Geografia</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=5" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/historia.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>História</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=8" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/ing.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Inglês</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=7" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/mat.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Matemática</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=15" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/port.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Potuguês</h6>
		  </a>
		  <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=3" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/quimi.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Química</h6>
		  </a>
		   <a class="navbar-brand" href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=11" align="middle" id="navItem">
		    <img src="<?php echo base_url('assets/bootstrap/img/soci.png')?>" width="30" height="30" class="d-inline-block align-top" alt="">
		    <h6>Sociologia</h6>
		  </a>
		</nav>	
	</section>
<?php
	$artigos = array_merge($artigos, $artigosProfessor);

      usort($artigos,

         function( $a, $b ) {

             if( $a ->dataArtigo == $b ->dataArtigo ) return 0;

             return ( ( $a->dataArtigo < $b->dataArtigo ) ? -1 : 1 );
         }
    );

  // print_r($artigos); 

   
?>
<div class="espaco2"></div>
	<div style="width: 80%; background-color:#fff; margin: 0 auto;" id="sombra">
		<div style="padding-right: 20%; padding-left: 20%; padding-top: 1%; padding-bottom: 1%; display: inline-block;">
			<img src="<?php echo base_url("assets/bootstrap/img/apresent.png")?>" style="width: 30%; height: 28%; float: left; ">
			<h5 style="padding-left: 35%; padding-top: 8%; ">O Atom é um sistema de publicação de artigos,que tem como objetivo faciltar sua aprendizagem! <b>Junte-se e venha aprender com a gente!</b></h5>
		</div>
	</div>
<div class="espaco2"></div>
    <div class="conteinerArtView" id="sombra">     
      <section class="conteiner0">
            <h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Artigos Recentes</h1>
           <?php if (empty($artigos)):?>
                 <article class="vidCont">
                    <section id="BlockNoResult">
                        <div class="img-responsive">
                          <img src="<?php echo base_url("assets/bootstrap/img/semResultado.png")?>" class="img-fluid" alt="smaple image">
                          <h5>Desculpe, no momento não há nenhum artigo no momento.</h5>
                        </div>
                    </section>
                 </article>
            <?php endif ?>
            <?php foreach($artigos as $artigo):?>
                <?php if (isset($artigo->alunos_codAluno) == TRUE): ?>
                     <article class="vidCont">
                            <?php
                                if($artigo->imgArtigo == null){?>
                                    <img src="<?php echo base_url('assets/bootstrap/img/semImagem.png')?>">
                            <?php
                                }else{?>
                                    <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
                          <?php }?>
                            <div class="divInfo">
                                <h3><?php echo $artigo->titulo?></h3>
                                <p id="limiteLinhas"><?php echo $artigo->resumo?></p>
                                <label style="margin-right: 10%;">Postado pelo aluno:<h4 id="nomeAutor2"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>" style="color: #17a2b8;"><?php echo $artigo->nomeAluno;?></a></h4></label>
                                 <label >Disciplina:<h4 id="nomeAutor2"><a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=<?php echo $artigo->codDisciplina?>" style="color: #17a2b8;"><?php echo $artigo->nomeDisciplina;?></a></h4></label>
                            </div>
                                <div class="divCont">
                                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu";>Visualizar</a>
                                </div>
                        </article>
                    <br>
                <?php endif ?>

                <?php if (isset($artigo->professores_codProfessor) == TRUE):?>
                         <article class="vidCont">
                            <?php
                                if($artigo->imgArtigo == null){?>
                                    <img src="<?php echo base_url('assets/bootstrap/img/semImagem.png')?>">
                            <?php
                                }else{?>
                                    <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
                          <?php }?>
                            <div class="divInfo">
                                <h3><?php echo $artigo->titulo?></h3>
                                <p id="limiteLinhas"><?php echo $artigo->resumo?></p>
                                    <label style="margin-right: 10%;">Postado pelo professor:<h4 id="nomeAutor2"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>" style="color: #28a745;"><?php echo $artigo->nomeProfessor;?></a></h4></label>
                                    <label >Disciplina:<h4 id="nomeAutor2"><a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=<?php echo $artigo->codDisciplina?>" style="color: #17a2b8;"><?php echo $artigo->nomeDisciplina;?></a></h4></label>
                            </div>
                                <div class="divCont">
                                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visualizar</a>
                                </div>
                         </article>
                     <br>
                <?php endif ?>

                       
             <?php endforeach?>
        </section>
        
    </div>
	

<?php include "rodape.php"; ?>
