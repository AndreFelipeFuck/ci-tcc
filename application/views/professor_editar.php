<?php  include "cabeca.php"; ?>
<?php 
     $teste = isset($_SESSION['professores']);?>
<?php if($teste == TRUE){?>
	
	<div class="espaco2"></div>
		<section class="conteinerCadProf" id="sombra">
			<form method="post" action="<?php echo site_url('professores/professor_update_perfil')?>" enctype = "multipart/form-data">
				<input type="hidden" value="<?= $perfil->codProfessor?>" name="codProfessor"/>
				<h1 style="font-size: 35px; border-bottom: solid 2px #28a745; margin-bottom: 2%; padding-bottom: 1%;">Editar Perfil:</h1>
                    <div class="fotoPerfilEdit">
        				<?php
        	                if ($perfil->imgProfessor == null) {
        	                    ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="rounded-circle img-fluid" alt="smaple image"></figure><?php
        	                }else{
        	                    ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/professores/$perfil->imgProfessor")?>" class="rounded-circle img-fluid" alt="smaple image"></figure><?php
        	                 }
        	            ?>
                    </div>
                <div style="width: 90%; border-bottom: solid 2px #28a745; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
				<div class="form-group">
                    <div class="espaco2"></div>
    				    <label for="exampleFormControlInput1">Alterar imagem:</label>
    				    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgProfessor">
                        <br>
                        <button class="btn btn-danger" id="perigo" onclick="delete_img(<?php echo $perfil->codProfessor;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir Imagem</button> 

				 </div>
                <div style="width: 90%; border-bottom: solid 2px #28a745; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
                <div class="espaco2"></div>
				<div class="form-group">
				    <label for="exampleFormControlInput1">Alterar Nome:</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeProfessor" value="<?= $perfil->nomeProfessor?>">
				 </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Alterar E-mail:</label>
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
				    <label for="exampleFormControlInput1">Alterar Data:</label>
				    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc" value="<?= $perfil->dataNasc?>">
				 </div>
                <div style="width: 90%; border-bottom: solid 2px #28a745; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
                <div class="espaco2"></div>
                <div class="form-group">
                    <label for="Escl-Mat">Alterar Matéria:</label>
                    <select class="form-control" id="Escl-Mat" style="width: 20%;" name="disciplina_codDisciplina" required>
                        <option value="16" <?=($perfil->nomeDisciplina == 'Nenhuma')?'selected':''?>>Nenhuma</option>
                        <option value="1" <?=($perfil->nomeDisciplina == 'Biologia')?'selected':''?>>Biologia</option>
                        <option value="2" <?=($perfil->nomeDisciplina == 'Física')?'selected':''?>>Física</option>
                        <option value="3">Química</option>
                        <option value="4" <?=($perfil->nomeDisciplina == 'Geografia')?'selected':''?>>Geografia</option>
                        <option value="5"<?=($perfil->nomeDisciplina == 'História')?'selected':''?>>História</option>
                        <option value="6"<?=($perfil->nomeDisciplina == 'Pr.Textual')?'selected':''?>>Pr.Textual</option>
                        <option value="15"<?=($perfil->nomeDisciplina == 'Portugues')?'selected':''?>>Portugues</option>
                        <option value="7"<?=($perfil->nomeDisciplina == 'Matemática')?'selected':''?>>Matemática</option>
                        <option value="8"<?=($perfil->nomeDisciplina == 'Inglês')?'selected':''?>>Inglês</option>
                        <option value="9"<?=($perfil->nomeDisciplina == 'Espanhol')?'selected':''?>>Espanhol</option>
                        <option value="10" <?=($perfil->nomeDisciplina == 'Filosofia')?'selected':''?>>Filosofia</option>
                        <option value="11" <?=($perfil->nomeDisciplina == 'Sociologia')?'selected':''?>>Sociologia</option>
                        <option value="12" <?=($perfil->nomeDisciplina == 'Agropecuária')?'selected':''?>>Agropecuária</option>
                        <option value="13" <?=($perfil->nomeDisciplina == 'Informatica')?'selected':''?>>Informatica</option>
                        <option value="14" <?=($perfil->nomeDisciplina == 'Química')?'selected':''?>>Química(tec)</option>
                    </select>
                </div>
				<div class="espaco2"></div>
				<span>Alterar Mini Curriculo:</span>
				<br>
				<div>
				<textarea class="curriculo" placeholder="Conte-nos mais sobre sua formação..." name="miniCurriculo"><?= $perfil->miniCurriculo?></textarea>
				</div>
				<div class="espaco2"></div><br>
					<button type="submit" class="btn" id="bot-verde">Confirmar</button>
					<button type="submit" class="btn" id="cancelar">Cancelar</button>
				</form>
		</section>
		<div class="espaco2"></div>
		<div class="conteinerZonaAlert" id="sombra2">
			<h3 style="border-bottom: solid 2px #e44747; margin-bottom: 2%; padding-bottom: 1%;">Zona de Risco!</h3>
			<div id="contZA-info">
				<div>
					<button class="btn btn-danger" id="perigo" onclick="delete_professor(<?php echo $perfil->codProfessor;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir Perfil</button>
				</div>   
			</div>
			<div id="contZA-img" align="center">
				<figure><img src="<?php echo base_url('assets/bootstrap/img/cuidado.png')?>" width="120" height="120"></figure>
				<p style="color: #878585;">Atenção! Suas alterações aqui são sem volta.</p>
			</div>
		</div>
				

<?php }else{?>

		<meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>
<?php include "rodape.php"; ?>

    <script>
    $(document).ready( function () {
    $('#codProfess').DataTable();
    } );
    var save_method; //for save method string
    var table;
    function add_professor()
    {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_professor(codProfessor)
    {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    //Ajax Load data from ajax
    $.ajax({
    url : "<?php echo site_url('professores/ajax_edit')?>/" + codProfessor,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="codProfessor"]').val(data.codProfessor);
    $('[name="nomeProfessor"]').val(data.nomeProfessor);
    $('[name="email"]').val(data.email);
    $('[name="senha"]').val(data.senha);


    $('#modal_form').modal('show'); // show bootstrap modal when complete
    loaded
    $('.modal-title').text('Edit Professor'); // Set title to Bootstrap modal
    title
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Erro no ajax');
    }
    });
    }
    function save()
    {
    var url;
    if(save_method == 'add')
    {
    url = "<?php echo site_url('professores/professor_add')?>";
    }else{
    url = "<?php echo site_url('professores/professor_update_perfil')?>";
    }
    // ajax adding data to database
    $.ajax({
    url : url,
    type: "POST",
    data: $('#form').serialize(),
    dataType: "JSON",
    success: function(data)
    {
    //if success close modal and reload ajax table
    $('#modal_form').modal('hide');
    location.reload();// for reload a page
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Error adding / update data');
    }
    });
    }


    function delete_professor(codProfessor)
    {
    if(confirm('Voce quer deletar seu perfil?'))
    {
    // ajax delete data from database
    $.ajax({
    url : "<?php echo site_url('professores/professor_delete')?>/" + codProfessor,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
     window.location.href = "<?php echo site_url('home')?>"
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Erro ao deletar');
    }
    });
    }
    }

    function delete_img(codProfessor)
    {
    if(confirm('Voce quer deletar a imagem de perfil?'))
    {
    // ajax delete data from database
    $.ajax({
    url : "<?php echo site_url('professores/professor_delete_img')?>/" + codProfessor,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
      location.reload();
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Erro ao deletar');
    }
    });
    }
    }
    </script>

