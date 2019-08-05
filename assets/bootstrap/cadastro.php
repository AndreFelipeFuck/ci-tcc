<?php  
	
	include "cabeca.php";

?>
<div class="espaco2"></div>
	<section class="conteinerCad">
		<form class="formulario">
			<h1>Cadastro:</h1>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nome Completo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira">
			 </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">E-mail</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@gmail.com">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1">
			    <small id="senhaHelp" class="form-text text-muted">A senha deve ter no minimo 8 caracteres</small>
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Comfirmar Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Data</label>
			    <input type="date" class="form-control" id="exampleFormControlInput2">
			 </div>
				 <span>Curso</span>
				 <br>
				 <div class="form-curso">
				 	<input type="radio" name="curso">
				 	<label>Agropecuária</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso">
				 	<label>Informática</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso">
				 	<label>Química</label>
				 </div>
				<!--
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>Agrimensura</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>B. Agronomia</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>MedVet</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>BSI</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>L. Ciências Agrícolas</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>L. Química</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>T. Redes de Computadores</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>E. Aquicultura</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>E. Edu. Matemática</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>M. Produção e Sanidade Mental Animal</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" id="form-radio">
				 	<label>M. Tecnológia e Ambiente</label>
				 </div>
			-->
			<div class="espaco2"></div>
			 <span>Ano Letivo</span>
				 <br>
				 <div class="form-ano">
				 	<input type="radio" name="ano">
				 	<label>Primeiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="ano">
				 	<label>Segundo</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="ano">
				 	<label>Terceiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="ano">
				 	<label>Superior</label>
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

<?php  
	
	include "rodape.php";

?>