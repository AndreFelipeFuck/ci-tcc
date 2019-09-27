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
						  <div class="form-group">
							 <label for="exampleFormControlInput1">Faça um pequeno resumo do que voce escreveu:</label>
							  <textarea name="resumo" placeholder="Teoria evolucionista fundamentada nas ideias do naturalista inglês Charles Robert Darwin 1809-1882" required><?php echo $perfil->resumo?></textarea>
					 	</div>
						 <div>
						 	<div class="form-group">
						    <label for="exampleFormControlFile1">Escolha uma imagem:</label>
						    <input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						 </div>
						 <div class="form-group">
						 	<label for="Escl-Mat">Matérias:</label>
						  	   	<select class="form-control" id="Escl-Mat" name="disciplina_codDisciplina" required>
							  	 	<option value="16" <?=($perfil->nomeDisciplina == 'Nenhuma')?'selected':''?>>Nenhuma</option>
							    	<option value="1" <?=($perfil->nomeDisciplina == 'Biologia')?'selected':''?>>Biologia</option>
							 		<option value="2" <?=($perfil->nomeDisciplina == 'Física')?'selected':''?>>Física</option>
							 		<option value="3">Química</option>
							 		<option value="4" <?=($perfil->nomeDisciplina == 'Geografia')?'selected':''?>>Geografia</option>
							 		<option value="5"<?=($perfil->nomeDisciplina == 'História')?'selected':''?>>História</option>
							 		<option value="6"<?=($perfil->nomeDisciplina == 'Pr.Textual')?'selected':''?>>Pr.Textual</option>
							 		<option value="15"<?=($perfil->nomeDisciplina == 'Portugues')?'selected':''?>>Portugues</option>
							 		<option value="7"<?=($perfil->nomeDisciplina == 'Matemática')?'selected':''?>>Matemática</option>
							 		<option value="8"<?=($perfil->nomeDisciplina == 'Inglês')?'selected':''?>>Inglês</option>
							 		<option value="9"<?=($perfil->nomeDisciplina == 'Espanhol')?'selected':''?>>Espanhol</option>
							 		<option value="10" <?=($perfil->nomeDisciplina == 'Filosofia')?'selected':''?>>Filosofia</option>
							 		<option value="11" <?=($perfil->nomeDisciplina == 'Sociologia')?'selected':''?>>Sociologia</option>
							 		<option value="12" <?=($perfil->nomeDisciplina == 'Agropecuária')?'selected':''?>>Agropecuária</option>
							 		<option value="13" <?=($perfil->nomeDisciplina == 'Informatica')?'selected':''?>>Informatica</option>
							 		<option value="14" <?=($perfil->nomeDisciplina == 'Química')?'selected':''?>>Química(tec)</option>
					  			</select>
						</div>
						<div class="espaco2"></div> <br>
						<button type="submit" class="btn btn-primary" value="confirmaArt">Confirmar</button>
						<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
					</form>		
				</div>
<?php }elseif($teste1 == TRUE){?>
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
							  <div class="form-group">
								 <label for="exampleFormControlInput1">Faça um pequeno resumo do que voce escreveu:</label>
								  <textarea name="resumo" placeholder="Teoria evolucionista fundamentada nas ideias do naturalista inglês Charles Robert Darwin 1809-1882" required><?php echo $perfil->corpo?></textarea>
					 		</div>
							 <div>
							 	<div class="form-group">
							    <label for="exampleFormControlFile1">Escolha uma imagem:</label>
							    <input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
							  </div>
							 </div>
							 <div class="form-group">
							 	<label for="Escl-Mat">Matérias:</label>
							     		   	<select class="form-control" id="Escl-Mat" name="disciplina_codDisciplina" required>
							  	 	<option value="16" <?=($perfil->nomeDisciplina == 'Nenhuma')?'selected':''?>>Nenhuma</option>
							    	<option value="1" <?=($perfil->nomeDisciplina == 'Biologia')?'selected':''?>>Biologia</option>
							 		<option value="2" <?=($perfil->nomeDisciplina == 'Física')?'selected':''?>>Física</option>
							 		<option value="3">Química</option>
							 		<option value="4" <?=($perfil->nomeDisciplina == 'Geografia')?'selected':''?>>Geografia</option>
							 		<option value="5"<?=($perfil->nomeDisciplina == 'História')?'selected':''?>>História</option>
							 		<option value="6"<?=($perfil->nomeDisciplina == 'Pr.Textual')?'selected':''?>>Pr.Textual</option>
							 		<option value="15"<?=($perfil->nomeDisciplina == 'Portugues')?'selected':''?>>Portugues</option>
							 		<option value="7"<?=($perfil->nomeDisciplina == 'Matemática')?'selected':''?>>Matemática</option>
							 		<option value="8"<?=($perfil->nomeDisciplina == 'Inglês')?'selected':''?>>Inglês</option>
							 		<option value="9"<?=($perfil->nomeDisciplina == 'Espanhol')?'selected':''?>>Espanhol</option>
							 		<option value="10" <?=($perfil->nomeDisciplina == 'Filosofia')?'selected':''?>>Filosofia</option>
							 		<option value="11" <?=($perfil->nomeDisciplina == 'Sociologia')?'selected':''?>>Sociologia</option>
							 		<option value="12" <?=($perfil->nomeDisciplina == 'Agropecuária')?'selected':''?>>Agropecuária</option>
							 		<option value="13" <?=($perfil->nomeDisciplina == 'Informatica')?'selected':''?>>Informatica</option>
							 		<option value="14" <?=($perfil->nomeDisciplina == 'Química')?'selected':''?>>Química(tec)</option>
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