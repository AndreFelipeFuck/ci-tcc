<?php  
	
	include "cabeca.php";

?>
<div class="espaco2"></div>
	<section class="conteinerCad">
		<h5 class="text-danger"><?php  echo  validation_errors();  ?><h5>
		<form class="formulario"  action="<?php echo site_url('alunos/aluno_update_perfil')?>" method="post" enctype = "multipart/form-data">
			<input type="hidden" value="<?= $perfil->codAluno?>" name="codAluno"/>
			<h1>Editar Perfil:</h1>
			<?php
                if ($perfil->imgAluno == null) {
                    ?><div class="fotoPerfil"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>"></div><?php
                }else{
                    ?><div class="fotoPerfil"><img src="<?php echo base_url("upload/alunos/$perfil->imgAluno")?>"></div><?php
                 }
            ?>
            <br><br><br><br><br>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Alterar imagem:</label>
			    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgAluno" value="">
			 </div>
			 <div class="espaco2"></div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nome Completo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeCompleto" value="<?= $perfil->nomeCompleto?>">
			 </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">E-mail</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@gmail.com" name="email" value="<?= $perfil->email ?>">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Alterar a senha, caso ache necessário:</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
			    <small id="senhaHelp" class="form-text text-muted">A senha deve ter no minimo 8 caracteres</small>
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Comfirmar senha:</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senhaconf">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Data</label>
			    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc" value="<?= $perfil->dataNasc ?>">
			 </div>
				 <span>Curso</span>
				 <br>

		<?php if($perfil->curso == "Agropecuária"):?>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Agropecuária" checked>
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

		<?php elseif($perfil->curso == "Informática"): ?>
				<div class="form-curso">
				 	<input type="radio" name="curso" value="Agropecuária">
				 	<label>Agropecuária</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Informática" checked>
				 	<label>Informática</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Química">
				 	<label>Química</label>
				 </div>
		<?php elseif($perfil->curso == "Química"): ?>
			<div class="form-curso">
				 	<input type="radio" name="curso" value="Agropecuária">
				 	<label>Agropecuária</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Informática" >
				 	<label>Informática</label>
				 </div>
				 <div class="form-curso">
				 	<input type="radio" name="curso" value="Química" checked>
				 	<label>Química</label>
				 </div>
		<?php endif ?>


			<div class="espaco2"></div>
			 <span>Ano Letivo</span>
				 <br>
		<?php if($perfil->anoLetivo == "Primeiro"):?>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Primeiro" checked>
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
		<?php elseif($perfil->anoLetivo == "Segundo"): ?>
			 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Primeiro">
				 	<label>Primeiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Segundo" checked>
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
		<?php elseif($perfil->anoLetivo == "Terceiro"): ?>
			 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Primeiro">
				 	<label>Primeiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Segundo">
				 	<label>Segundo</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Terceiro" checked>
				 	<label>Terceiro</label>
				 </div>
				 <div class="form-ano">
				 	<input type="radio" name="anoLetivo" value="Superior">
				 	<label>Superior</label>
				 </div>
		<?php endif ?>

			
			<div class="espaco2"></div>
			<div>
				<label><input type="checkbox" name="termos"> Concordo com os <a href="">Termos de Uso</a> do site.</label>
			</div>
			<div class="espaco2"></div><br>
			<button type="submit" class="btn btn-primary">Confirmar</button>
			<button type="reset" class="btn btn-secundary">Cancelar</button>
		</form>

	</section>

<?php  //include "rodape.php";?>