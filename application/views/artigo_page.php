<?php 
	include "cabeca.php";
	$teste = isset($_SESSION);
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
			<div style="padding-left: 1%;">
				<span>PDF: <a href="<?php echo base_url("upload/pdf/$perfil->uploadArtigo")?>" style="color: #17a2b8;" download>Dowload do arquivo em pdf</a></span>
			</div>
		<?php endif ?>
		<div class="espaco2"></div>
		<div class="nomeAutor">
			<?php if(isset($perfil->nomeProfessor)){?>
				<label>Postado pelo professor:<h4 id="nomeAutor">
					<a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $perfil->professores_codProfessor?>" style="color: #28a745;"><?php echo $perfil->nomeProfessor;?></a>
						
					</h4></label>
			<?php }if(isset($perfil->nomeAluno)){?>
				<label>Postado pelo aluno:<h4 id="nomeAutor">
					<a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $perfil->alunos_codAluno?>" style="color: #17a2b8;"><?php echo $perfil->nomeAluno;?></a>
					
				</h4></label>
			<?php } ?>
		</div>
		<div class="nomeMateria">
			<label>Disciplinas: </label>
			<h4 id="nomeMateria"><a href="<?php echo site_url('disciplinas/disciplina_view/')?>?codDisciplina=<?php echo $perfil->disciplina_codDisciplina?>" style="color: #17a2b8;"><?php echo $perfil->nomeDisciplina?></a></h4>
		</div>       
	</div>
	<div class="espaco2"></div>
	
		<div class="conteinerComent" id="sombra">	
		<h1 style="font-size: 30px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Comentarios:</h1>	

 	<?php if($teste == 1):?>		
		<div style="padding: 1.5%; border-radius: 3px; margin: 1%;">	
			<?php if(isset($aluno)):?>	
				<form action="#" method="post" id ="comentar">	
					<input type="hidden" value="<?= $perfil->codArtigo?>" name="artigo_codArtigo"/>	
					<input type="hidden" value="<?= $aluno->codAluno?>" name="com_alunos_codAluno"/>	
					<input type="hidden" value="0" name="professores_codProfessor"/>	
					<section class="fotoPerfilComent">	

 					<?php if ($aluno->imgAluno == null){?>	
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
						<h5><?php echo $aluno->nomeAluno ?></h5>	
						<div>	
							<textarea style="height: 10%; max-height: 20%;" placeholder="Deixe um comentario..." name="comentario"></textarea>	
						</div>	
						<div style="margin-top: 0.8%;">	
							<button type="submit" class="btn" id="visu" onclick="save()">Publicar</button>	
							<button class="btn" id="perigo">Cancelar</button>	
						</div>	
					</div>	
				</form>	
			<?php endif ?>	

 			<?php if(isset($professor)):?>	
				<form action="#" method="post" id ="comentar">	
						<input type="hidden" value="<?= $perfil->codArtigo?>" name="artigo_codArtigo"/>	
						<input type="hidden" value="<?= $professor->codProfessor?>" name="com_professores_codProfessor"/>	
						<input type="hidden" value="0" name="professores_codProfessor"/>	
						<section class="fotoPerfilComent">	

	 					<?php if ($professor->imgProfessor == null){?>	
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
							<h5><?php echo $professor->nomeProfessor ?></h5>	
							<div>	
								<textarea style="height: 10%; max-height: 20%;" placeholder="Deixe um comentario..." name="comentario"></textarea>	
							</div>	
							<div style="margin-top: 0.8%;">	
								<button type="submit" class="btn" id="visu" onclick="save()">Publicar</button>	
								<button class="btn" id="perigo">Cancelar</button>	
							</div>	
						</div>	
					</form>	

		<?php endif ?>	
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
							<h5><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $comentario->codAluno?>" style="color: #17a2b8;"><?php echo $comentario->nomeAluno;?></a></h5>	
							<div class="conteudo" id="comentario1">	
							<section style="height: 10%; max-height: 20%; border: solid 1px rgba(68, 120, 132, .2); padding: 1.5%; border-radius: 3px;" placeholder="Deixe um comentario..."><h6><?php echo $comentario->comentario ?></h6></section>	
					</div>	
	<?php	
		if (isset($_SESSION['alunos']) == TRUE):	
			if($comentario->codAluno == $_SESSION['alunos']):?>	
						<div class="conteudo" id="comentario1">	
										<button class="btn btn-success editar"><i class="glyphicon glyphicon-pencil"></i>Editar</button>	
		            					<button class="btn btn-danger"  onclick="delete_comentario(<?php echo $comentario->codComentario;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>	
						</div>	
						<div  class="conteudo escondido" id="comentario2">	
								<form action="<?php echo site_url('comentarios/comentario_update')?>" id ="editar">	
									<input type="hidden" value="<?php echo $comentario->codComentario ?>" name="codComentario"/>	
									<div class="elementoComent">	
										<div>	
											<textarea style="height: 10%; max-height: 20%;" name="comentario"><?php echo $comentario->comentario ?></textarea>	
										</div>	
										<div style="margin-top: 0.8%;">	
											<button type="submit" class="btn" id="visu" onclick="comentario_update()">Alterar</button>	

 										</div>	
									</div>	
								</form>	
								<button class="btn cancelar" id="perigo">Cancelar</button>	

 						</div>	
	<?php		
		endif;			
			endif;?>	

 					</div>	
				</div><?php		
			}?>	


 			<?php foreach ($comentarios_professor as $key => $comentario) {?>	
				<div style="border: solid 1px rgba(68, 120, 132, .1); padding: 1.5%; border-radius: 3px; margin: 1%;">	
					<section class="fotoPerfilComent">	
						<?php if ($comentario->imgProfessor == null) {?>	
							<div>	
								<figure><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure>	
							</div>	
						<?php }else{?>	
							<div>	
								?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$comentario->imgProfessor")?>"></figure>	
							</div><?php	
							}?>	
					</section>	
					<div class="elementoComent">	
							<h5><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $comentario->codProfessor?>" style="color: #28a745;"><?php echo $comentario->nomeProfessor;?></a></h5>	
							<div class="conteudo" id="comentario1">	
							<section style="height: 10%; max-height: 20%; border: solid 1px rgba(68, 120, 132, .2); padding: 1.5%; border-radius: 3px;" placeholder="Deixe um comentario..."><h6><?php echo $comentario->comentario ?></h6></section>	
					</div>	
	<?php	
		if (isset($_SESSION['professores']) == TRUE):	
			if($comentario->codProfessor == $_SESSION['professores']):?>	
						<div class="conteudo" id="comentario1">	
										<button class="btn btn-success editar"><i class="glyphicon glyphicon-pencil"></i>Editar</button>	
		            					<button class="btn btn-danger"  onclick="delete_comentario(<?php echo $comentario->codComentario;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>	
						</div>	
						<div  class="conteudo escondido" id="comentario2">	
								<form action="<?php echo site_url('comentarios/comentario_update')?>" id ="editar">	
									<input type="hidden" value="<?php echo $comentario->codComentario ?>" name="codComentario"/>	
									<div class="elementoComent">	
										<div>	
											<textarea style="height: 10%; max-height: 20%;" name="comentario"><?php echo $comentario->comentario ?></textarea>	
										</div>	
										<div style="margin-top: 0.8%;">	
											<button type="submit" class="btn" id="visu" onclick="comentario_update()">Alterar</button>	

 										</div>	
									</div>	
								</form>	
								<button class="btn cancelar" id="perigo">Cancelar</button>	

 						</div>	
	<?php		
		endif;			
			endif;?>	

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
    var save_method; 	
    var table;	
 	$(document).ready(function(){	
		$(".editar").click(function(){	
			$('.conteudo').addClass('escondido');	
			$("#comentario2").removeClass('escondido');		
		})	
	})	
 	$(document).ready(function(){	
		$(".cancelar").click(function(){	
			$('.conteudo').addClass('escondido');	
			$("#comentario1").removeClass('escondido');		
		})	
	})	
 		
	    function save(){	
		    $.ajax({	
			    url : "<?php echo site_url('comentarios/comentario_add')?>",	
			    type: "POST",	
			    data: $('#comentar').serialize(),	
			    dataType: "JSON",	
			   success: function(data){	
			      location.reload();	
			    },	
			    error: function (jqXHR, textStatus, errorThrown){	
			    	alert('Erro ao adicionar o seu comentario');	
			    }	
		    });	
		}	
 		  function comentario_update(){	
		    $.ajax({	
			    url : "<?php echo site_url('comentarios/comentario_update')?>",	
			    type: "POST",	
			    data: $('#editar').serialize(),	
			    dataType: "JSON",	
			   success: function(data){	
			      location.reload();	
			    },	
			    error: function (jqXHR, textStatus, errorThrown){	
			    	alert('Erro ao alterar o comentario');	
			    }	
		    });	
		}	
 		function delete_comentario(codComentario)	
	    {	
	    if(confirm('Voce quer deletar o seu comentario?'))	
	    {	
	    // ajax delete data from database	
	    $.ajax({	
	    url : "<?php echo site_url('comentarios/comentario_delete')?>/" + codComentario,	
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


 
