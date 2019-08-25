<?php 
	include "cabeca.php";
 ?>
 <div class="espaco2"></div>
	<section class="conteinerOpi">
		<div class="divOpi">
			<h1>Cadastre-se no Atom como:</h1>
			<br>
			<div>
				<a href="<?php echo site_url('home/aluno_add')?>"><button type="submit" class="btn btn-outline-info" id="botao">Aluno</button></a>
			</div>
			<h3>ou</h3>
			<br>
			<div>
				<a href="<?php echo site_url('home/professor_add')?>"><button type="submit" class="btn btn-outline-success" id="botao">Professor</button></a>
			</div>
		</div>
		
	</section>

<?php 
	include "rodape.php";
?>