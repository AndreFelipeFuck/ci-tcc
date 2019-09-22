<?php 
	include "cabeca.php";
?>
<div class="espaco2"></div>
	<div class="conteinerCadArt">
		<form  action="<?php echo site_url('artigos/artigo_add')?>" method="post" enctype = "multipart/form-data">
			<input type="hidden" value="<?= $perfil->codAluno?>" name="alunos_codAluno"/>
			<input type="hidden" value="0" name="professores_codProfessor"/>
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
			  	 	<select class="form-control" id="Escl-Mat" name="disciplina_codDisiciplina" required>
			  		<option value="15" name="disciplina_codDisiciplina">Nenhuma</option>
			    	<option value="1" name="disciplina_codDisiciplina">Biologia</option>
			 		<option value="2" name="disciplina_codDisiciplina">Física</option>
			 		<option value="3" name="disciplina_codDisiciplina">Química</option>
			 		<option value="4" name="disciplina_codDisiciplina">Geografia</option>
			 		<option value="5" name="disciplina_codDisiciplina">História</option>
			 		<option value="6" name="disciplina_codDisiciplina">Pr.Textual</option>
			 		<option value="7" name="disciplina_codDisiciplina">Matemática</option>
			 		<option value="8" name="disciplina_codDisiciplina">Inglês</option>
			 		<option value="9" name="disciplina_codDisiciplina">Espanhol</option>
			 		<option value="10" name="disciplina_codDisiciplina">Filosofia</option>
			 		<option value="11" name="disciplina_codDisiciplina">Sociologia</option>
			 		<option value="12" name="disciplina_codDisiciplina">Agropecuária</option>
			 		<option value="13" name="disciplina_codDisiciplina">Informatica</option>
			 		<option value="14" name="disciplina_codDisiciplina">Química(tec)</option>
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