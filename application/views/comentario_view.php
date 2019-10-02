<?php include 'cabeca.php' ?>

<body>
	<div class="espaco2"></div>
	<div class="conteinerComent" id="sombra">
		<h1 style="font-size: 30px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Comentarios:</h1>
		<div style="padding: 1.5%; border-radius: 3px; margin: 1%;">
			<section class="fotoPerfilComent">
				<div>
					<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
				</div>
			</section>
			<div class="elementoComent">
				<h5>Aluno Exemplo</h5>
				<div>
					<textarea style="height: 10%; max-height: 20%;" placeholder="Deixe um comentario..."></textarea>
				</div>
				<div style="margin-top: 0.8%;">
					<button class="btn" id="visu">Publicar</button>
					<button class="btn" id="perigo">Cancelar</button>
				</div>
			</div>
		</div>
		<div style="border: solid 1px rgba(68, 120, 132, .1); padding: 1.5%; border-radius: 3px; margin: 1%;">
			<section class="fotoPerfilComent">
				<div>
					<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
				</div>
			</section>
			<div class="elementoComent">
				<h5>Aluno Exemplo</h5>
				<div>
					<section style="height: 10%; max-height: 20%; border: solid 1px rgba(68, 120, 132, .2); padding: 1.5%; border-radius: 3px;" placeholder="Deixe um comentario..."><h6>Mano muito bom esse artigo, tá top</h6></section>
				</div>
			</div>	
		</div>
	</div>
<?php include 'rodape.php' ?>

