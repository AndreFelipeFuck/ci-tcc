<?php  
	
	include "cabeca.php";

?>
<div class="espaco2"></div>
	<section class="conteinerCad">
		<h5 class="text-danger"><?php  echo  validation_errors(); ?><h5>
		<form class="formulario"  action="<?php echo site_url('alunos/aluno_add')?>" method="post" enctype = "multipart/form-data">
			<h1>Cadastro:</h1>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nome Completo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeAluno">
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
				 <span>Curso</span>
				 <br>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Agropecuária">
				 	<label>Agropecuária</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Informática">
				 	<label>Informática</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Química">
				 	<label>Química</label>
				 </div>

			<div class="espaco2"></div>
			 <span>Ano Letivo</span>
				 <br>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Primeiro">
				 	<label>Primeiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Segundo">
				 	<label>Segundo</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Terceiro">
				 	<label>Terceiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Superior">
				 	<label>Superior</label>
				 </div>
			<div class="espaco2"></div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Envie uma imagem de voce</label>
			    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgAluno">
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
<div class="espaco2"></div><br>
<?php  include "rodape.php";?>