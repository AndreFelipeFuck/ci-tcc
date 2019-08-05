<?php  
	
	include "cabeca.php";

?>

<div class="espaco2"></div>
	<section class="ConteinerLogin">
		<form class="formulario2">
		<div class="form2-div">
		<h1>Login</h1>
		<p class="form-text text-muted">Seja Bem-Vindo de Volta! c:</p>
			<div class="form-login">
				<label for="exampleFormControlInput1">Usuário</label>
				<input type="text" class="form-control" id="exampleFormControlInput">
			</div>
			<br>
			 <div class="form-login">
				<label for="exampleFormControlInput1">Senha</label>
				<input type="password" class="form-control" id="exampleFormControlInput">
			</div>
		</div>
		<br>
		<div>
			<label><input type="checkbox" name="lembra">Lembrar de mim</label>
		</div>
		<div class="form2-div">
			<button type="submit" class="btn btn-primary" id="botaoLogin">Login</button>
		</div>
		</form>
	</section>

<?php  
	
	include "rodape.php";

?>