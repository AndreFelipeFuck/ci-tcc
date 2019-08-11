<?php 
	include "cabeca.php";
 ?>
 <div class="espaco2"></div>
	<section class="conteinerOpi">
		<div class="divOpi">
			<h1>Cadastre-se no Atom como:</h1>
			<br>
			<form method="get" action="<?php echo site_url('home/aluno_add')?>">
				<button type="submit" class="btn btn-outline-info" id="botao">Aluno</button>
			</form>
			<h3>ou</h3>
			<br>
			<form method="get" action="<?php echo site_url('home/professor_add')?>">
				<button type="submit" class="btn btn-outline-success" id="botao">Professor</button>
			</form>
		</div>
		
	</section>

<?php 
	include "rodape.php";
?>