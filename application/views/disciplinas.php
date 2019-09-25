<?php 
	include "cabeca.php";
?>
<div class="espaco2"></div>
	<div class="conteinerMtr" id="sombra">
		<h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Materias</h1>
		<br>
		<h4 style="border-bottom: solid 2px #17a2b8; width: 8.5%;">Integrado:</h4>
		<div class="contMtr">
			
			<div>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=1"><button class="btn" id="btn-ex01"><img src="<?php echo base_url('assets/bootstrap/img/bio.png')?>"><br><h4>Biologia</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=2"><button class="btn" id="btn-ex0"><img src="<?php echo base_url('assets/bootstrap/img/fisica.png')?>"><br><h4>Física</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=3"><button class="btn" id="btn-ex"><img src="<?php echo base_url('assets/bootstrap/img/quimi.png')?>"><br><h4>Química</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=4"><button class="btn" id="btn-ex2"><img src="<?php echo base_url('assets/bootstrap/img/geo.png')?>"><br><h4>Geografia</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=5"><button class="btn" id="btn-ex3"><img src="<?php echo base_url('assets/bootstrap/img/historia.png')?>"><br><h4>História</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=15"><button class="btn" id="btn-ex4"><img src="<?php echo base_url('assets/bootstrap/img/port.png')?>"><br><h4>Português</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=6"><button class="btn" id="btn-ex5"><img src="<?php echo base_url('assets/bootstrap/img/pt.png')?>"><br><h4>Pr.Textual</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=7"><button class="btn" id="btn-ex6"><img src="<?php echo base_url('assets/bootstrap/img/mat.png')?>"><br><h4>Matemática</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=8"><button class="btn" id="btn-ex7"><img src="<?php echo base_url('assets/bootstrap/img/ing.png')?>"><br><h4>Inglês</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=9"><button class="btn" id="btn-ex8"><img src="<?php echo base_url('assets/bootstrap/img/esp.png')?>"><br><h4>Espanhol</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=10"><button class="btn" id="btn-ex9"><img src="<?php echo base_url('assets/bootstrap/img/filo.png')?>"><br><h4>Filosofia</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=11"><button class="btn" id="btn-ex10"><img src="<?php echo base_url('assets/bootstrap/img/soci.png')?>"><br><h4>Sociologia</h4></button></a>
				<div class="espaco2"></div>
				<br>
				<h4 style=" border-bottom: solid 2px #17a2b8; width: 7.3%;">Técnico:</h4>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=12"><button class="btn" id="btn-ex11"><img src="<?php echo base_url('assets/bootstrap/img/agro.png')?>"><br><h4>Agropecuária</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=13"><button class="btn" id="btn-ex12"><img src="<?php echo base_url('assets/bootstrap/img/info.png')?>"><br><h4>Informática</h4></button></a>
					<a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=14"><button class="btn" id="btn-ex13"><img src="<?php echo base_url('assets/bootstrap/img/qui.png')?>"><br><h4>Química</h4></button></a>
			</div>
		</div>
	</div>

<?php 
	include "rodape.php";
?>