<?php 
	include "cabeca.php";
?>

<div class="espaco2"></div>
	<div class="conteinerTelaArt">
		<div class="tituloArt">
			<h1 id="nomeArtigo"><?php echo $perfil->titulo;?></h1>
		</div>
	<?php
          if ($perfil->imgArtigo == null){?>
			<figure>
				<img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>">
			</figure><?php
			}else{
               ?>
            <figure>
				<img src="<?php echo base_url("upload/artigos/$perfil->imgArtigo")?>">
			</figure>
	<?php }?>
		<div class="publicacao">
			<label>Publicação:</label>
			<label id="hora">exemplo hora</label>
		</div>
		<div>
			<article class="corpoArt">
				<?php echo $perfil->corpo;?>
			</article>
		</div>
		<div class="espaco2"></div>
		<div class="nomeAutor">
			<?php if(isset($perfil->nomeProfessor)){?>
				<label>Postado pelo professor:<h4 id="nomeAutor"><?php echo $perfil->nomeProfessor;?></h4></label>
			<?php }if(isset($perfil->nomeAluno)){?>
				<label>Postado pelo aluno:<h4 id="nomeAutor"><?php echo $perfil->nomeAluno;?></h4></label>
			<?php } ?>
		</div>
		<div class="nomeMateria">
			<label>Disciplinas: </label>
			<h4 id="nomeMateria">Exemplo Disciplina</h4>
		</div>       
	</div>
<?php 
	include "rodape.php";
?>

 
