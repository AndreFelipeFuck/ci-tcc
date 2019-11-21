<?php 
	include "cabeca.php";
?>
<?php if($_SESSION['professores'] == $_GET['codProfessor']){?>
		<head>

		<title>Atom | Cadastro de Artigo</title>	
		</head>


		<div class="espaco2"></div>
			<div class="conteinerCadArt" id="sombra">
				<form  action="<?php echo site_url('artigos/artigo_add')?>" method="post" enctype = "multipart/form-data">
					<input type="hidden" value="<?= $perfil->codProfessor?>" name="professores_codProfessor"/>
					<input type="hidden" value="<?= $perfil->codProfessor?>" name="professores_codProfessor"/>
					<input type="hidden" value="<?= $perfil->codDisciplina?>" name="disciplina_codDisciplina"/>
					<h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Cadastro de Artigo:</h1>
					<div class="form-group">
					    <label for="exampleFormControlInput">Titulo do Artigo</label>
					    <input type="text" class="form-control" id="exampleFormControlInput" placeholder="Ex:'Lamarckismo e Darwinismo'" name="titulo" required>
					 </div>
					  <div class="form-group" id="texto">
					    <label for="exampleFormControlInput1">Texto do Artigo:</label>
					    <textarea name="corpo" id="summernote" required></textarea>
					    <script>
					      $('#summernote').summernote({
									height: 500,
					        placeholder: 'Digite seu texto aqui..',
					        tabsize: 2,
					      });
					     
					    </script>
					 </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Faça um pequeno resumo do que voce escreveu:</label>
					    <textarea name="resumo" placeholder="Teoria evolucionista fundamentada nas ideias do naturalista inglês Charles Robert Darwin 1809-1882" maxlength="380" id="ta-resumo" required></textarea>
					 </div>
					 <div>
					 	<div class="form-group">
					    <label for="exampleFormControlFile1" style="padding-left: 1%; border-left: solid 5px #17a2b8;">Escolha uma imagem:</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgArtigo">
					  </div>
					   <div>
					 	<div class="form-group">
					    <label for="exampleFormControlFile1" style="padding-left: 1%; border-left: solid 5px #17a2b8;">Inclua uma versão em pdf:</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadArtigo">
					  </div>
					 </div>
					 <!-- <div class="form-group">
					 	<label for="Escl-Mat">Matérias:</label>
					  	<select class="form-control" id="Escl-Mat" style="width: 12%;" name="disciplina_codDisciplina" required>
					    	<option value="1">Biologia</option>
					 		<option value="2">Física</option>
					 		<option value="3">Química</option>
					 		<option value="4">Geografia</option>
					 		<option value="5">História</option>
					 		<option value="6">Pr.Textual</option>
					 		<option value="15">Portugues</option>
					 		<option value="7">Matemática</option>
					 		<option value="8">Inglês</option>
					 		<option value="9">Espanhol</option>
					 		<option value="10">Filosofia</option>
					 		<option value="11">Sociologia</option>
					 		<option value="12">Agropecuária</option>
					 		<option value="13">Informatica</option>
					 		<option value="14">Química(tec)</option>
					  	</select>
					</div> -->
					
					<div class="espaco2"></div> <br>
					<button type="submit" class="btn" id="bot-verde" value="confirmaArt">Confirmar</button>
					<button type="submit" class="btn" id="cancelar" value="cancelarArt">Cancelar</button>
				</form>		
			</div>
		</form>
	</div>
<?php }else{?>

		<meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>

<?php 
	include "rodape.php";
?>