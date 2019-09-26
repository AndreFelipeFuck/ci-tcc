<?php 
	include "cabeca.php";
?>
<head>
<?php 
     $teste = isset($_SESSION['alunos']);
      $teste1 = isset($_SESSION['professores']);?>
<?php if($teste == TRUE){?>
			<title>Atom |Editar Artigo</title>

			  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
			    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

			<div class="espaco2"></div>
				<div class="conteinerCadArt" id="sombra">
					<form  action="<?php echo site_url('artigos/artigo_update')?>" method="post" enctype = "multipart/form-data">
						<input type="hidden" value="<?= $perfil->codArtigo?>" name="codArtigo"/>
						<h1>Cadastro de Artigo:</h1>
						<br>
						<div class="form-group">
						    <label for="exampleFormControlInput1">Titulo do Artigo</label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $perfil->titulo;?>" name="titulo" value ="<?= $perfil->titulo?>" required>
						 </div>
						  <div class="form-group" id="texto">
						    <label for="exampleFormControlInput1">Texto do Artigo:</label>
						    <textarea name="corpo" id="summernote" required><?php echo $perfil->corpo;?></textarea>
						     <script>
						      $('#summernote').summernote({
						        placeholder: 'Digite seu texto aqui..',
						        tabsize: 2,
						        height: 100
						      });
						    </script>
						 </div>
						 <div>
						 	<div class="form-group">
						    <label for="exampleFormControlFile1">Escolha uma imagem:</label>
						    <input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						 </div>
						 <div class="form-group">
						 	<label for="Escl-Mat">Matérias:</label>
						  	<select class="form-control" id="Escl-Mat" required>
						  		<option value="nenhuma">Nenhuma</option>
						    	<option value="biologia">Biologia</option>
						 		<option value="fisica">Física</option>
						 		<option value="filosofia">Filosofia</option>
						 		<option value="geografia">Geografia</option>
						 		<option value="historia">História</option>
						 		<option value="ingles">Inglês</option>
						 		<option value="matematica">Matemática</option>
						 		<option value="portugues">Português</option>
						 		<option value="quimica">Química</option>
						 		<option value="sociologia">Sociologia</option>
						 		<option value="agroTec">Agropecuária</option>
						 		<option value="infoTec">Informatica</option>
						 		<option value="quimiTec">Química(Tec)</option>
						  	</select>
						</div>
						<div class="espaco2"></div> <br>
						<button type="submit" class="btn btn-primary" value="confirmaArt">Confirmar</button>
						<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
					</form>		
				</div>
<?php }if($teste1 == TRUE){?>
				<title>Atom |Editar Artigo</title>

				  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
				    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
				    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
				    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
				    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
				    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

				<div class="espaco2"></div>
					<div class="conteinerCadArt" id="sombra">
						<form  action="<?php echo site_url('artigos/artigo_update')?>" method="post" enctype = "multipart/form-data">
							<input type="hidden" value="<?= $perfil->codArtigo?>" name="codArtigo"/>
							<h1>Cadastro de Artigo:</h1>
							<br>
							<div class="form-group">
							    <label for="exampleFormControlInput1">Titulo do Artigo</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $perfil->titulo;?>" name="titulo" value ="<?= $perfil->titulo?>" required>
							 </div>
							  <div class="form-group" id="texto">
							    <label for="exampleFormControlInput1">Texto do Artigo:</label>
							    <textarea name="corpo" id="summernote" required><?php echo $perfil->corpo;?></textarea>
							     <script>
							      $('#summernote').summernote({
							        placeholder: 'Digite seu texto aqui..',
							        tabsize: 2,
							        height: 100
							      });
							    </script>
							 </div>
							 <div>
							 	<div class="form-group">
							    <label for="exampleFormControlFile1">Escolha uma imagem:</label>
							    <input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
							  </div>
							 </div>
							 <div class="form-group">
							 	<label for="Escl-Mat">Matérias:</label>
							  	<select class="form-control" id="Escl-Mat" required>
							  		<option value="nenhuma">Nenhuma</option>
							    	<option value="biologia">Biologia</option>
							 		<option value="fisica">Física</option>
							 		<option value="filosofia">Filosofia</option>
							 		<option value="geografia">Geografia</option>
							 		<option value="historia">História</option>
							 		<option value="ingles">Inglês</option>
							 		<option value="matematica">Matemática</option>
							 		<option value="portugues">Português</option>
							 		<option value="quimica">Química</option>
							 		<option value="sociologia">Sociologia</option>
							 		<option value="agroTec">Agropecuária</option>
							 		<option value="infoTec">Informatica</option>
							 		<option value="quimiTec">Química(Tec)</option>
							  	</select>
							</div>
							<div class="espaco2"></div> <br>
							<button type="submit" class="btn btn-primary" value="confirmaArt">Confirmar</button>
							<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
						</form>		
					</div>
<?php }else{?>

		<meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>
<?php 
	include "rodape.php";
?>