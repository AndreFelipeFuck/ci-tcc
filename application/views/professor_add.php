<?php  include "cabeca.php"; ?>
<head>
	<title>Atom | Cadastro de Professor</title>
</head>

<div class="espaco2"></div>
	<section class="conteinerCadProf" id="sombra">
		<form style="padding: 1%;" method="post" action="<?php echo site_url('professores/professor_add')?>" enctype = "multipart/form-data">
			<h1 style="font-size: 35px; border-bottom: solid 2px #28a745; margin-bottom: 2%; padding-bottom: 1%;">Cadastro:</h1>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nome Completo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeProfessor">
			 </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">E-mail</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@gmail.com" name="email">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
			    <small id="senhaHelp" class="form-text text-muted">A senha deve ter no minimo 8 caracteres</small>
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Confirmar Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senhaconf">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput2">Data de nascimento</label>
			    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc">
			 </div>
			 <span>Docente da área:</span>
				 <br>
				  	 <select class="form-control" id="Escl-Mat" style="width: 20%;" name="disciplina_codDisciplina" required>
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
			<div class="espaco2"></div>
			<span>Mini Curriculo:</span>
			<br>
			<div>
			<textarea class="curriculo" placeholder="Conte-nos mais sobre sua formação..." name="miniCurriculo"></textarea>
			</div>
			<div class="espaco2"></div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Envie uma imagem de perfil:</label>
			    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgProfessor">
			 </div>
			<div class="espaco2"></div>
			<div>
				<label><input type="checkbox" name="termos"> Concordo com os <a href="">Termos de Uso</a> do site.</label>
			</div>
			<div class="espaco2"></div><br>
			<button type="submit" class="btn" id="bot-verde">Confirmar</button>
			<button type="submit" class="btn" id="cancelar">Cancelar</button>
		</form>
		
	</section>

<?php include "rodape.php"; ?>