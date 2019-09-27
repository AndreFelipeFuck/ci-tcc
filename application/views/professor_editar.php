<?php  include "cabeca.php"; ?>
<div class="espaco2"></div>
	<section class="conteinerCadProf" id="sombra">
		<form method="post" action="<?php echo site_url('professores/professor_update_perfil')?>" enctype = "multipart/form-data">
			<input type="hidden" value="<?= $perfil->codProfessor?>" name="codProfessor"/>
			<h1 style="font-size: 35px; border-bottom: solid 2px #28a745; margin-bottom: 2%; padding-bottom: 1%;">Editar Perfil:</h1>
			<?php
                if ($perfil->imgProfessor == null) {
                    ?><div class="fotoPerfil"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>"></div><?php
                }else{
                    ?><div class="fotoPerfil"><img src="<?php echo base_url("upload/professores/$perfil->imgProfessor")?>"></div><?php
                 }
            ?>
            <div style="height: 12%;"></div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Alterar imagem:</label>
			    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgProfessor">
			 </div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nome Completo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeProfessor" value="<?= $perfil->nomeProfessor?>">
			 </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">E-mail</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@gmail.com" name="email" value="<?= $perfil->email?>">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Alterar a senha, caso ache necessário:</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
			    <small id="senhaHelp" class="form-text text-muted">A senha deve ter no minimo 8 caracteres</small>
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Comfirmar Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1" name="senhaconf">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlInput1">Data</label>
			    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc" value="<?= $perfil->dataNasc?>">
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
			<textarea class="curriculo" placeholder="Conte-nos mais sobre sua formação..." name="miniCurriculo"><?= $perfil->miniCurriculo?></textarea>
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
	<div class="espaco2"></div>
	<div class="conteinerZonaAlert" id="sombra2">
		<h3 style="border-bottom: solid 2px #e44747; margin-bottom: 2%; padding-bottom: 1%;">Zona de Risco!</h3>
		<div id="contZA-info">
			<div>
				<button class="btn btn-danger" onclick="delete_professor(<?php echo $perfil->codProfessor;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir Perfil</button>
			</div>
		</div>
		<div id="contZA-img" align="center">
			<figure><img src="<?php echo base_url('assets/bootstrap/img/cuidado.png')?>" width="120" height="120"></figure>
			<p style="color: #878585;">Atenção! Suas alterações aqui são sem volta.</p>
		</div>
	</div>

<?php 

	include "rodape.php"; 

?>