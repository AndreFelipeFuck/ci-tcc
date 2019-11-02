<?php if($_SESSION['alunos'] == $_GET['codAluno']){?>
<?php  include "cabeca.php";?>
		<div class="espaco2"></div>
			<div class="conteinerCad" id="sombra">
				<h5 class="text-danger"><?php  echo  validation_errors();  ?></h5>
				<form action="<?php echo site_url('alunos/aluno_update_perfil')?>" method="post" enctype = "multipart/form-data">
					<input type="hidden" value="<?= $perfil->codAluno?>" name="codAluno"/>
					<h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Editar Perfil:</h1>
					<div class="fotoPerfilEdit">
						<?php
			                if ($perfil->imgAluno == null) {
			                    ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="rounded-circle img-fluid" alt="smaple image"></figure><?php
			                }else{
			                    ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$perfil->imgAluno")?>" class="rounded-circle img-fluid" alt="smaple image"></figure><?php
			                 }
			            ?>
		        	</div>
		           	<div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
		           	<div class="espaco2"></div>
					<div class="form-group">
					    <label for="exampleFormControlInput1">Alterar imagem:</label>
					    <input type="file" class="form-control-file" id="exampleFormControlInput1" name="imgAluno" value="">
					    <br>
						<button class="btn" id="perigo" onclick="delete_img(<?php echo $perfil->codAluno;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir Imagem</button>
					</div>
					<div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
					 <div class="espaco2"></div>
					<div class="form-group">
					    <label for="exampleFormControlInput1">Alterar Nome:</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Josef Oliveira" name="nomeAluno" value="<?= $perfil->nomeAluno?>">
					 </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Alterar E-mail:</label>
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
					    <label for="exampleFormControlInput1">Alterar Data:</label>
					    <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc" value="<?= $perfil->dataNasc ?>">
					 </div>
					 <div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
					 <div class="espaco2"></div>
						 <span>Alterar Curso:</span>
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
					 <span>Alterar Ano Letivo:</span>
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

					<div class="espaco2"></div><br>
					<button type="submit" class="btn" id="bot-azul">Confirmar</button>
					<button type="reset" class="btn" id="cancelar">Cancelar</button>
				</form>
			</div>
			<div class="espaco2"></div>
			<div class="conteinerZonaAlert" id="sombra2">
				<h3 style="border-bottom: solid 2px #e44747; margin-bottom: 2%; padding-bottom: 1%;">Zona de Risco!</h3>
				<div id="contZA-info">
					<div>
						<button class="btn" id="perigo" onclick="delete_aluno(<?php echo $perfil->codAluno;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir Perfil</button>
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



<?php  	include "rodape.php";?>


    <script>
    $(document).ready( function () {
    $('#codAluno').DataTable();
    } );
    var save_method; //for save method string
    var table;
    function add_aluno()
    {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_aluno(codAluno)
    {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    //Ajax Load data from ajax
    $.ajax({
    url : "<?php echo site_url('alunos/ajax_edit')?>/" + codAluno,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="codAluno"]').val(data.codAluno);
    $('[name="nomeAluno"]').val(data.nomeAluno);
    $('[name="email"]').val(data.email);
    $('[name="dataNasc"]').val(data.dataNasc);
    $('[name="anoLetivo"]').val(data.anoLetivo);
    $('[name="curso"]').val(data.curso);
    $('[name="imgAluno"]').val(data.imgAluno);



    $('#modal_form').modal('show'); // show bootstrap modal when complete
    loaded
    $('.modal-title').text('Edit Aluno'); // Set title to Bootstrap modal
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
    url = "<?php echo site_url('alunos/aluno_add')?>";
    }else{
    url = "<?php echo site_url('alunos/aluno_update_perfil')?>";
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


    function delete_aluno(codAluno)
    {
    if(confirm('Voce quer deletar seu perfil?'))
    {
    // ajax delete data from database
    $.ajax({
    url : "<?php echo site_url('alunos/aluno_delete')?>/" + codAluno,
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



    function delete_img(codAluno)
    {
    if(confirm('Voce quer deletar a imagem de perfil?'))
    {
    // ajax delete data from database
    $.ajax({
    url : "<?php echo site_url('alunos/aluno_delete_img')?>/" + codAluno,
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