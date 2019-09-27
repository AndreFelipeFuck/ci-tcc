<?php 
	include "cabeca.php";
?>

<div class="espaco2"></div>
	<div class="conteinerTelaArt" id="sombra">
		<div class="tituloArt">
			<h1 id="nomeArtigo"><?php echo $perfil->titulo;?></h1>
		</div>
		<div class="publicacao">
			<label>Postado em:</label>
			<label id="hora"> <?php echo $perfil->dataArtigo?></label>
		</div>
	<?php
          if ($perfil->imgArtigo == null){?>
				<div style="width: 100%; height: 2px; border-top: solid 2px #17a2b8;"></div><?php
			}else{
               ?>
            <figure>
				<img src="<?php echo base_url("upload/artigos/$perfil->imgArtigo")?>">
			</figure>
	<?php }?>
		
		<div>
			<article class="corpoArt">
				<?php echo $perfil->corpo;?>
			</article>
		</div>
		<div class="espaco2"></div>
		<div class="nomeAutor">
			<?php if(isset($perfil->nomeProfessor)){?>
				<label>Postado pelo professor:<h4 id="nomeAutor">
					<a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $perfil->professores_codProfessor?>"><?php echo $perfil->nomeProfessor;?></a>
						
					</h4></label>
			<?php }if(isset($perfil->nomeAluno)){?>
				<label>Postado pelo aluno:<h4 id="nomeAutor">
					<a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $perfil->alunos_codAluno?>"><?php echo $perfil->nomeAluno;?></a>
					
				</h4></label>
			<?php } ?>
		</div>
		<div class="nomeMateria">
			<label>Disciplinas: </label>
			<h4 id="nomeMateria"><a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=<?php echo $perfil->disciplina_codDisciplina?>"><?php echo $perfil->nomeDisciplina?></a></h4>
		</div>       
	</div>
<?php 
	include "rodape.php";
?>

 
