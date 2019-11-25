<?php 
	include "cabeca.php";
 ?>
 <header>
    <title>Atom | Cadastro-se</title>
</header>
 <div class="espaco2"></div>
	<section class="conteinerOpi">
		<div class="divOpi" id="sombra">
			<h1>Cadastre-se no Atom como:</h1>
			<br>
			<div>
				<a href="<?php echo site_url('home/aluno_add')?>"><button type="submit" class="btn btn-outline-info" id="botao">Aluno</button></a>
			</div>
			<div class="espaco2"></div>
			<h3>ou</h3>
			<div class="espaco2"></div>
			<div>
				<a href="<?php echo site_url('home/professor_add')?>"><button type="submit" class="btn btn-outline-success" id="botao">Professor</button></a>
			</div>
		</div>
	</section>

<?php 
	include "rodape.php";
?>