<?php include 'cabeca.php'; ?>
<?php
	$listagem = array_merge($listagem_aluno, $listagem_professor);

	  usort($listagem,

	     function( $a, $b ) {

	         if( $a ->dataArtigo == $b ->dataArtigo ) return 0;

	         return ( ( $a->dataArtigo > $b->dataArtigo ) ? -1 : 1 );
	     }
	);

	 // echo '<pre>';
	 // print_r($listagem);
	 // echo '</pre>';
?>
	<div class="espaco2"></div>
	 <div class="conteinerArtView" id="sombra">     
	    <section class="conteiner0">
	            <h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Resultado da sua pesquisa</h1>

	        <?php if (empty($listagem)):?>
	        	 <article class="vidCont">
	        	 	<div>
	        	 		<h2>Não encontramos o que voce pesquisou. ;(</h2>
	        	 	</div>
	        	 </article>
	        <?php endif ?>
			<?php foreach($listagem as $artigo):?>
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
		                            <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
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
<?php include 'rodape.php'; ?>
