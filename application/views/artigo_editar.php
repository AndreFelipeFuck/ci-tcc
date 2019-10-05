<?php 
	include "cabeca.php";
?>
<head>
<?php 
     $teste = isset($_SESSION['alunos']);
      $teste1 = isset($_SESSION['professores']);?>
 <!-- ALUNO -->
<?php if($teste == TRUE){?>
			<title>Atom |Editar Artigo</title>

			  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
			    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js)"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
		
			 <!-- -->
			   <!--  <script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script> -->
    			<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    			<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    			<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
</head>	

			<div class="espaco2"></div>
				<div class="conteinerCad" id="sombra">
					<form  action="<?php echo site_url('artigos/artigo_update')?>" method="post" enctype = "multipart/form-data">
						<input type="hidden" value="<?= $perfil->codArtigo?>" name="codArtigo"/>
						<h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Editar Artigo:</h1>
						<br>
						<div class="form-group">
						    <label for="exampleFormControlInput1">Titulo do Artigo</label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $perfil->titulo;?>" name="titulo" value ="<?= $perfil->titulo?>">
						 </div>
						 <div class="espaco2"></div>
						 <div class="form-group"><!-- Para resolver -->
						 <?php if ($perfil->imgArtigo == null){?>
									<div style="width: 100%; height: 2px; border-top: solid 2px #17a2b8;"></div><?php
								}else{
					               ?>
					            <label for="exampleFormControlFile1" style="padding-left: 1%; border-left: solid 5px  #17a2b8; padding-bottom: 0.5%;">Alterar Imagem:</label>
					            <figure>
									<img src="<?php echo base_url("upload/artigos/$perfil->imgArtigo")?>" style="width: 100%; border-radius: 3px;">
								</figure>
								<div class="form-group">
									<label for="exampleFormControlFile1">Selecione outra imagem:</label>
						    	<input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
								</div>
						<?php }?>
						</div>
						<div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;""></div>
						<div class="espaco2"></div>
						  <div class="form-group" id="texto">
						    <label for="exampleFormControlInput1">Alterar texto:</label>
						    <textarea name="corpo" id="summernote"><?php echo $perfil->corpo;?></textarea>
						     <script>
						      $('#summernote').summernote({
						        placeholder: 'Digite seu texto aqui..',
						        tabsize: 2,
						        height: 100
						      });
						    </script>
						 </div>
						  <div class="form-group">
							 <label for="exampleFormControlInput1">Alterar resumo:</label>
							  <textarea name="resumo" placeholder="Teoria evolucionista fundamentada nas ideias do naturalista inglês Charles Robert Darwin 1809-1882" id="ta-resumo"><?php echo $perfil->resumo?></textarea>
					 	</div>
						 <div>
						 <div class="form-group">
						   
						 </div>
						 <div class="form-group">
						 <?php if ($perfil->imgArtigo == null):?>
					          	<div class="form-group">
									<label for="exampleFormControlFile1">Escolha uma imagem:</label>
						    		<input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
								</div>
						<?php endif ?>
					        	<div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;""></div>
					        	<div class="espaco2"></div>
						 <?php if ($perfil->uploadArtigo == null):?>
							 	<label style="padding-left: 1%; border-left: solid 5px  #17a2b8;">PDF</label>
							 	<div>
							 		<label for="exampleFormControlFile1">Alterar pdf:</label>
						    		<input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadArtigo">
							 	</div>
						<?php endif ?>
						 	
						</div>
						 <div class="form-group">
						 	<label for="Escl-Mat">Alterar Matéria:</label>
						  	   	<select class="form-control" id="Escl-Mat" name="disciplina_codDisciplina">
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
							 		<option value="13" <?=($perfil->nomeDisciplina == 'Informática')?'selected':''?>>Informatica</option>
							 		<option value="14" <?=($perfil->nomeDisciplina == 'Química')?'selected':''?>>Química(tec)</option>
					  			</select>
						</div>
						<div class="espaco2"></div> <br>
						<button type="submit" class="btn" id="visu" value="confirmaArt">Confirmar</button>
						<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
					</form>
				</div>
			</form>
		</div>
					<div class="espaco2"></div>
						<div class="conteinerZonaAlert" id="sombra2">
							<h3 style="border-bottom: solid 2px #e44747; margin-bottom: 2%; padding-bottom: 1%;">Zona de Risco!</h3>
							<div id="contZA-info">
								<div>
									 <button class="btn" id="perigo"  onclick="delete_img(<?php echo $perfil->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir imagem do artigo</button> 
								</div>
								<br>
								<div>
						 			<button class="btn" id="perigo"  onclick="delete_pdf(<?php echo $perfil->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir o pdf</button>
						 		</div>
							</div>
							<div id="contZA-img" align="center">
								<figure><img src="<?php echo base_url('assets/bootstrap/img/cuidado.png')?>" width="120" height="120"></figure>
								<p style="color: #878585;">Atenção! Suas alterações aqui são sem volta.</p>
							</div>
						</div>		
				
<!-- PROFESSOR -->
<?php }elseif($teste1 == TRUE){?>
				<title>Atom |Editar Artigo</title>

			  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
			    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js)"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
		
			 <!-- -->
			   <!--  <script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script> -->
    			<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    			<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    			<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
    		</head>	

			<div class="espaco2"></div>
				<div class="conteinerCadArt" id="sombra">
					<form  action="<?php echo site_url('artigos/artigo_update')?>" method="post" enctype = "multipart/form-data">
						<input type="hidden" value="<?= $perfil->codArtigo?>" name="codArtigo"/>
						<h1>Editar Artigo:</h1>
						<br>
						<div class="form-group">
						    <label for="exampleFormControlInput1">Titulo do Artigo</label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $perfil->titulo;?>" name="titulo" value ="<?= $perfil->titulo?>">
						 </div>
						 <div class="espaco2"></div>
						 <div class="form-group"><!-- Para resolver -->
						 <?php if ($perfil->imgArtigo == null){?>
									<div style="width: 100%; height: 2px; border-top: solid 2px #17a2b8;"></div><?php
								}else{
					               ?>
					            <figure >
									<img src="<?php echo base_url("upload/artigos/$perfil->imgArtigo")?>" style="width: 80%;">
								</figure>
								<div class="form-group">
									<label for="exampleFormControlFile1">Alterar a imagem:</label>
						    		<input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
								</div>
								<br>
						<?php }?>
						</div>
						<div class="espaco2"></div>
						  <div class="form-group" id="texto">
						    <label for="exampleFormControlInput1">alterar texto:</label>
						    <textarea name="corpo" id="summernote"><?php echo $perfil->corpo;?></textarea>
						     <script>
						      $('#summernote').summernote({
						        placeholder: 'Digite seu texto aqui..',
						        tabsize: 2,
						        height: 100
						      });
						    </script>
						 </div>
						  <div class="form-group">
							 <label for="exampleFormControlInput1">Alterar resumo:</label>
							  <textarea name="resumo" placeholder="Teoria evolucionista fundamentada nas ideias do naturalista inglês Charles Robert Darwin 1809-1882"><?php echo $perfil->resumo?></textarea>
					 	</div>
						 <div>
						 <div class="form-group">
						   
						 </div>
						 <div class="form-group">
						 <?php if ($perfil->imgArtigo == null):?>
					          	<div class="form-group">
									<label for="exampleFormControlFile1">Escolher uma imagem:</label>
						    		<input type="file" name="imgArtigo" class="form-control-file" id="exampleFormControlFile1">
								</div>
						<?php endif ?>
					          	
						 	<br>
						 <?php if ($perfil->uploadArtigo == null):?>
							 	<label style=" padding-left: 1%; border-left: solid 5px #17a2b8">PDF</label>
							 	<div>
							 		<label for="exampleFormControlFile1">Alterar pdf:</label>
						    		<input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadArtigo">
							 	</div>
						<?php endif ?>
						 	
						</div>
						 <div class="form-group">
						 	<label for="Escl-Mat">Matérias:</label>
						  	   	<select class="form-control" id="Escl-Mat" name="disciplina_codDisciplina">
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
							 		<option value="13" <?=($perfil->nomeDisciplina == 'Informática')?'selected':''?>>Informatica</option>
							 		<option value="14" <?=($perfil->nomeDisciplina == 'Química')?'selected':''?>>Química(tec)</option>
					  			</select>
						</div>
						<div class="espaco2"></div> <br>
						<button type="submit" class="btn btn-primary" value="confirmaArt">Confirmar</button>
						<button type="submit" class="btn btn-secundary" value="cancelarArt">Cancelar</button>
					</form>
				</div>
			</form>
		</div>
					<div class="espaco2"></div>
						<div class="conteinerZonaAlert" id="sombra2">
							<h3 style="border-bottom: solid 2px #e44747; margin-bottom: 2%; padding-bottom: 1%;">Zona de Risco!</h3>
							<div id="contZA-info">
								<div>
									 <button class="btn" id="perigo"  onclick="delete_img(<?php echo $perfil->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir imagem do artigo</button> 
								</div>
								<br>
								<div>
						 			<button class="btn" id="perigo"  onclick="delete_pdf(<?php echo $perfil->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir o pdf</button>
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
<?php 
	include "rodape.php";
?>

  <script>
	    $(document).ready( function () {
	    $('#codArtigo').DataTable();
	    } );
	    var save_method; //for save method string
	    var table;

	    function delete_img(codArtigo)
	    {
	    if(confirm('Voce quer deletar a imagem do artigo?'))
	    {
	    // ajax delete data from database
	    $.ajax({
	    url : "<?php echo site_url('artigos/artigo_delete_img')?>/" + codArtigo,
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

	    function delete_pdf(codArtigo)
	    {
	    if(confirm('Voce quer deletar a versão pdf do seu artigo?'))
	    {
	    // ajax delete data from database
	    $.ajax({
	    url : "<?php echo site_url('artigos/artigo_delete_pdf')?>/" + codArtigo,
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

    