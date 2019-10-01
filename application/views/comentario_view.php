<?php include 'cabeca.php' ?>

<body>
	<div class="conteinerComent" id="sombra">
		<h1 style="font-size: 30px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Comentarios:</h1>
		<div>
			<section class="fotoPerfilComent">
				<div>
					<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
				</div>
			</section>
			<div class="elementoComent">
				<h5>Aluno Exemplo</h5>
				<div>
					<textarea style="height: 10%;"></textarea>
				</div>
			</div>
			<div class="publicarComent">
				<div>
					<button class="btn" id="visu">Publicar</button>
					<div style="height: 1%;"></div>
					<button class="btn" id="perigo">Cancelar</button>
				</div>
			</div>
			
		</div>
	</div>
<?php include 'rodape.php' ?>

