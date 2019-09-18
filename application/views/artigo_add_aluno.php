<?php 
	include "cabeca.php";
?>
<div class="espaco2"></div>
	<div class="conteinerCadArt">
		<form  action="<?php echo site_url('artigos/artigo_add')?>" method="post" enctype = "multipart/form-data">
			<input type="hidden" value="<?= $perfil->codAluno?>" name="alunos_codAluno"/>
			<input type="hidden" value="null" name="professores_codProfessor"/>
			<h1>Cadastro de Artigo:</h1>
			<br>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Titulo do Artigo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex:'Lamarckismo e Darwinismo'" name="titulo" required>
			 </div>
			  <div class="form-group" id="texto">
			    <label for="exampleFormControlInput1">Texto do Artigo:</label>
			    <textarea name="corpo" required></textarea>
			 </div>
			 <div>
			 	<div class="form-group">
			    <label for="exampleFormControlFile1">Escolha uma imagem:</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgArtigo">
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
			<div class="form-group">
			 	<label for="Escl-Mat">Coautores:</label>
			 	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Outros autores ou contribuidores.."S>
			</div>
			<div class="espaco2"></div> <br>
			<button type="submit" class="btn btn-primary" value="confirmaArt">Confirmar</button>
			<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
		</form>		
	</div>
<?php 
	include "rodape.php";
?>