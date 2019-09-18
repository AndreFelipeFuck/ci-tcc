<?php  include "cabeca.php";?>
<div class="espaco2"></div>
    <div class="conteinerPerfil" id="sombra">
            <section class="fotoPerfil">
                <div class="view overlay">
                    <?php
                    if ($perfil->imgAluno == null) {
                       ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class="img-fluid" alt="smaple image"></figure><?php
                    }else{
                        ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/alunos/$perfil->imgAluno")?>" class="img-fluid" alt="smaple image"></figure><?php
                    }
                ?>
                    <div class="mask flex-center rgba-black-strong">
                        <p class="white-text"><!--Editar foto--></p>
                    </div>
                </div>
            </section>
            <section class="InfoPerfil">
                <div id="nomePerfil">
                    <h2 id="nomeFont"><?php echo $perfil->nomeAluno;?></h2>
                </div>
                <div id="infoAlign">
                    <label>Email:</label>
                    <h6><?php echo $perfil->email;?></h6>
                </div>
                <div id="infoAlign">
                    <label>Data de Nascimento:</label>
                    <h6><?php echo $perfil->dataNasc;?></h6>
                </div>
                <div id="infoAlign">
                    <label>Curso:</label>
                    <h6><?php echo $perfil->curso;?></h6>
                </div>
                <div id="infoAlign">
                    <label>Ano Letivo:</label>
                    <h6><?php echo $perfil->anoLetivo;?></h6>
                </div>
                <div id="infoAlign">
                    <h4><span class="badge badge-secondary" style="background-color:#17a2b8;">Aluno</span></h4>
                    <a href="<?php echo site_url('alunos/aluno_editar/')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn btn-success">Editar Perfil</a>
                    <button class="btn btn-danger" onclick="delete_aluno(<?php echo $perfil->codAluno;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>

                    <a href="<?php echo site_url('alunos/artigos_add')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn btn-warning">Novo artigo</a>
                    <a href="<?php echo site_url('alunos/artigos_view')?>?codAluno=<?php echo $perfil->codAluno;?>" class="btn btn-warning">Visualizar Artigos</a>

                </div>
            </section>
        <div style="width: 90%; border-bottom: solid 2px #17a2b8; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
             <!--<section>
                <div><h2 style="width: 35%; font-size: 35px; border-bottom: solid 2px #17a2b8; margin-top: 2%; margin-bottom: 2%; padding-bottom: 1%;">Postagens:</h2></div>
            </section>
           <section style="padding: 1%;">
                <div class="contPerfil">
                <figure><img src="img\artigo.png"></figure>
                <h5>Artigo nome</h5>
                </div>
                <div class="contPerfil">
                <figure><img src="img\artigo.png"></figure>
                <h5>Artigo nome</h5>
                </div>
                <div class="contPerfil">
                <figure><img src="img\artigo.png"></figure>
                <h5>Artigo nome</h5>
                </div>
                <div class="contPerfil">
                <figure><img src="img\artigo.png"></figure>
                <h5>Artigo nome</h5>
                </div>
                <div class="contPerfil">
                <figure><img src="img\artigo.png"></figure>
                <h5>Artigo nome</h5>
                </div>
            </section>-->
    </div>
	</section>
	<script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

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
    if(confirm('Voce quer deletar o aluno?'))
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
    </script>

<?php  include "rodape.php";