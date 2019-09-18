<?php  include "cabeca.php"; ?>
<div class="espaco2"></div>
	<section class="conteinerCadProf">
		<form class="formulario" method="post" action="<?php echo site_url('professores/professor_add')?>" enctype = "multipart/form-data">
			<h1>Cadastro:</h1>
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
			    <label for="exampleFormControlInput1">Comfirmar Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senhaconf">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Data</label>
			    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc">
			 </div>
			 <span>Docente da área:</span>
				 <br>
				 <div class="form-info">
				 	<input type="radio" name="area" value="Ensino Medio">
				 	<label>Ensino Medio</label>
				 </div>
				 <div class="form-info">
				 	<input type="radio" name="area" value="Ensino Técnico">
				 	<label>Ensino Técnico</label>
				 </div>
				 <div class="form-info">
				 	<input type="radio" name="area" value="Ensino Superior">
				 	<label>Ensino Superior</label>
				 </div>
			<div class="espaco2"></div>
			<span>Mini Curriculo:</span>
			<br>
			<div>
			<textarea class="curriculo" placeholder="Conte-nos mais sobre sua formação..." name="miniCurriculo"></textarea>
			</div>
			<div class="espaco2"></div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Envie uma imagem de voce</label>
			    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgProfessor">
			 </div>
			<div class="espaco2"></div>
			<div>
				<label><input type="checkbox" name="termos"> Concordo com os <a href="">Termos de Uso</a> do site.</label>
			</div>
			<div class="espaco2"></div><br>
			<button type="submit" class="btn btn-primary">Confirmar</button>
			<button type="submit" class="btn btn-secundary">Cancelar</button>
		</form>
		
	</section>

<?php include "rodape.php"; ?>