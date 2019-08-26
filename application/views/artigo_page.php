<?php 
	include "cabeca.php";
?>

<div class="espaco2"></div>
	<div class="conteinerTelaArt">
		<div class="tituloArt">
			<h1 id="nomeArtigo"><?php echo $perfil->titulo;?></h1>
		</div>
		<figure>
			<img src="img\eng.png">
		</figure>
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
			<label>Por<h4 id="nomeAutor">Exemplo Autor</h4></label>
		</div>
		<div class="nomeMateria">
			<label>Matéria: </label>
			<h4 id="nomeMateria">Exemplo Matéria</h4>
		</div>
	</div>

<?php 
	include "rodape.php";
?>