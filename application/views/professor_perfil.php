<?php  include "cabeca.php";
//print_r($_SESSION);
?>
<head>
    <title>Atom | <?php echo $perfil->nomeProfessor;?></title>
</head>
<div class="espaco2"></div>
<br>
    <div class="conteinerPerfil" id="sombra">
            <section class="fotoPerfil">
                <div class="view overlay">
                <?php
                    if ($perfil->imgProfessor == null) {
                       ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure><?php
                    }else{
                        ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/professores/$perfil->imgProfessor")?>" class="img-fluid" alt="smaple image"></figure><?php
                    }
                ?>
                    <div class="mask flex-center rgba-black-strong">
                        <p class="white-text"><!--Editar Foto--></p>
                    </div>
                </div>
            </section>
            <section class="InfoPerfil">
                <div id="nomePerfilProf">
                    <h2 id="nomeFont"><?php echo $perfil->nomeProfessor;?></h2>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #28a745;">Email:</label>
                    <h6><?php echo $perfil->email;?></h6>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #28a745;">Data de Nascimento:</label>
                    <h6><?php echo $perfil->dataNasc;?></h6>
                </div>
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #28a745;">Leciona na disciplina:</label>
                    <h6><?php echo $perfil->nomeDisciplina;?></h6>
                </div>
            <!--
                <div id="infoAlign">
                    <label>Institucao:</label>
                    <h6><?php echo $perfil->institucao;?></h6>
                </div>
            -->
                <div id="infoAlign">
                    <label style="padding-left: 1%; border-left: solid 3px #28a745;">Mini curriculo:</label>
                    <h6><?php echo $perfil->miniCurriculo;?></h6>
                </div>
                <div id="infoAlign">
                    <h4><span class="badge badge-secondary" style="background-color:#28a745;">Professor</span></h4>
                </div>
                  <?php 
                    $teste = isset($_SESSION['professores']);
                    if($teste == TRUE):?>
                        <a href="<?php echo site_url('professores/professor_editar/')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color:#28a745; border-radius: 49%; padding:10px;"><img src="<?php echo base_url('assets/bootstrap/img/config.png')?>" width="30" height="30"></a>

                <!--<a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn btn-warning">Novo artigo</a>

                <a href="<?php echo site_url('professores/artigos_view')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn btn-warning">Visualizar Artigos</a>-->
            <?php endif ?>

            </section>
        <div style="width: 90%; border-bottom: solid 2px #28a745; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
            <br><br>
            <div id="infoAlign">
                <?php 
                            $teste = isset($_SESSION['professores']);
                            if($teste == TRUE):?>
                                <a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color: #28a745; color: #fff;">Novo artigo</a>

                                 <a href="<?php echo site_url('professores/artigos_view')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color: #28a745; color: #fff;">Visualizar Artigos</a>
                            <?php endif ?>
                </div>
                <br><br>
    <?php foreach($artigos as $artigo):?>
             
                    <div class="contPerfil">
            <?php if($artigo->imgArtigo == null){?>
                        <figure><img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>"></figure><?php
                }else{
                        ?><figure><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>"></figure>
        <?php   } ?>
                        <h5><?php echo $artigo->titulo;?></h5>
                        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visualizar</a>
                               

                    </div>    
    <?php endforeach?>
    </div>
    </div>

	</section>
		<script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>

    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

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
    </script>

    


   

<?php  include "rodape.php";