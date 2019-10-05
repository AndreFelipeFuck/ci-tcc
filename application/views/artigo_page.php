<?php 
	include "cabeca.php";
	$teste = isset($_SESSION);
	//print_r($comentarios);
?>

<div class="espaco2"></div>
	<div class="conteinerTelaArt" id="sombra">
		<div class="tituloArt">
			<h1 id="nomeArtigo"><?php echo $perfil->titulo;?></h1>
		</div>
		<div class="publicacao">
			<label>Postado em:</label>
			<label id="hora"> <?php echo $perfil->dataArtigo?></label>
		</div>
	<?php
          if ($perfil->imgArtigo == null){?>
				<div style="width: 100%; height: 2px; border-top: solid 2px #17a2b8;"></div><?php
			}else{
               ?>
            <figure>
				<img src="<?php echo base_url("upload/artigos/$perfil->imgArtigo")?>">
			</figure>
			
	<?php }?>
		
		<div>
			<article class="corpoArt">
				<?php echo $perfil->corpo;?>
			</article>
		</div>
		<?php if(isset($perfil->uploadArtigo)):?>
			<div>
				<a href="<?php echo base_url("upload/pdf/$perfil->uploadArtigo")?>" download>Dowload do arquivo em pdf</a>
			</div>
		<? endif ?>
		<div class="espaco2"></div>
		<div class="nomeAutor">
			<?php if(isset($perfil->nomeProfessor)){?>
				<label>Postado pelo professor:<h4 id="nomeAutor">
					<a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $perfil->professores_codProfessor?>"><?php echo $perfil->nomeProfessor;?></a>
						
					</h4></label>
			<?php }if(isset($perfil->nomeAluno)){?>
				<label>Postado pelo aluno:<h4 id="nomeAutor">
					<a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $perfil->alunos_codAluno?>"><?php echo $perfil->nomeAluno;?></a>
					
				</h4></label>
			<?php } ?>
		</div>
		<div class="nomeMateria">
			<label>Disciplinas: </label>
			<h4 id="nomeMateria"><a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=<?php echo $perfil->disciplina_codDisciplina?>"><?php echo $perfil->nomeDisciplina?></a></h4>
		</div>       
	</div>
	<div class="espaco2"></div>
	<div class="conteinerComent" id="sombra">
		<h1 style="font-size: 30px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Comentarios:</h1>

	<?php if($teste == 1):?>	
		<div style="padding: 1.5%; border-radius: 3px; margin: 1%;">
			<?php if(isset($aluno)){?>
				<form action="<?php echo site_url('comentarios/comentario_add')?>" method="post">
					<input type="hidden" value="<?= $perfil->codArtigo?>" name="artigo_codArtigo"/>
					<input type="hidden" value="<?= $aluno->codAluno?>" name="alunos_codAluno"/>
					<input type="hidden" value="0" name="professores_codProfessor"/>
					<section class="fotoPerfilComent">
			
					<?php if ($aluno->imgAluno == null) {?>
							<div>
								<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
							</div>
						<?php }else{?>
							<div>
								?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$aluno->imgAluno")?>"></figure>
							</div><?php
							}?>
					</section>
					<div class="elementoComent">
						<h5><? echo $aluno->nomeAluno ?></h5>
						<div>
							<textarea style="height: 10%; max-height: 20%;" placeholder="Deixe um comentario..." name="comentario"></textarea>
						</div>
						<div style="margin-top: 0.8%;">
							<button type="submit" class="btn" id="visu">Publicar</button>
							<button class="btn" id="perigo">Cancelar</button>
						</div>
					</div>
				</form>
			
			<?php }if(isset($professor)){?>
			<section class="fotoPerfilComent">	
			<?php	if ($professor->imgProfessor == null) {?>
					<div>
						<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
					</div>
				<?php }else{?>
					<div>
						?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$professor->imgProfessor")?>"></figure>
					</div><?php
				}?>
			</section>
			<div class="elementoComent">
				<h5>Aluno Exemplo</h5>
				<div>
					<textarea style="height: 10%; max-height: 20%;" placeholder="Deixe um comentario..."></textarea>
				</div>
				<div style="margin-top: 0.8%;">
					<button class="btn" id="visu">Publicar</button>
					<button class="btn" id="perigo">Cancelar</button>
				</div>
			</div>
		<?php } ?>
		</div>

	<?php endif ?>
	
		
			<?php foreach ($comentarios as $key => $comentario) {?>
				<div style="border: solid 1px rgba(68, 120, 132, .1); padding: 1.5%; border-radius: 3px; margin: 1%;">
					<section class="fotoPerfilComent">
						<?php if ($comentario->imgAluno == null) {?>
							<div>
								<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>
							</div>
						<?php }else{?>
							<div>
								?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$comentario->imgAluno")?>"></figure>
							</div><?php
							}?>
					</section>
					<div class="elementoComent">
						<h5><?php echo $comentario->nomeAluno ?></h5>
						<div>
							<section style="height: 10%; max-height: 20%; border: solid 1px rgba(68, 120, 132, .2); padding: 1.5%; border-radius: 3px;" placeholder="Deixe um comentario..."><h6><?php echo $comentario->comentario ?></h6></section>
						</div>
					</div>
				</div><?php	
			}?>
			
	
	</div>
<?php 
	include "rodape.php";
?>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

<script>
    $(document).ready( function () {
    $('#codAluno').DataTable();
    } );
    var save_method; //for save method string
    var table;
    function comentario_add()
    {
    $.ajax({
    url : "<?php echo site_url('alunos/ajax_edit')?>/" + codAluno,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="codAluno"]').val(data.codAluno);
    $('[name="nomeAluno"]').val(data.nomeAluno);
    $('[name="email"]').val(data.email);
    $('[name="senha"]').val(data.senha);
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
    url = "<?php echo site_url('alunos/aluno_update')?>";
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
    
</script>
 
