<?php  include "cabeca.php";?>
<div class="espaco2"></div>


	<section class="conteiner4" >
			<section class="intPerfil">
				<div class="fotoPerfil"><img src="assets/bootstrap/img/user.png"></div>
				<div class="nomePerfil"><h2><?php echo $perfil->nomeCompleto;?></h2></div>
			</section>
			<section class="intPerfil2">
				<article class="artPerfil"><h2><?php echo $perfil->dataNasc;?></article>
				<article class="artPerfil"><h2><?php echo $perfil->anoLetivo;?></article>
				<article class="artPerfil"><h2><?php echo $perfil->curso;?></article>
				<article class="artPerfil"><h2><?php echo $perfil->email;?><h2></article>

				<button class="btn btn-success" onclick="edit_aluno(<?php echo $perfil->codAluno;?>)"><i class="glyphicon glyphicon-pencil"></i>EDITAR</button>

            	<button class="btn btn-danger" onclick="delete_aluno(<?php echo $perfil->codAluno;?>)"><i class="glyphicon glyphicon-remove"></i>EXCLUIR</button>
			</section>



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
    $('[name="nomeCompleto"]').val(data.nomeCompleto);
    $('[name="email"]').val(data.email);
    $('[name="dataNasc"]').val(data.dataNasc);
    $('[name="anoLetivo"]').val(data.anoLetivo);
    $('[name="curso"]').val(data.curso);



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

    
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Aluno Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-
                        label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="codAluno"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nome Completo</label>
                            <div class="col-md-9">
                                <input name="nomeCompleto" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">E-mail</label>
                            <div class="col-md-9">
                                <input name="email" placeholder="Seu email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nova senha</label>
                            <div class="col-md-9">
                                <input name="novaSenha" placeholder="Sua senha" class="form-control" type="password">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Confirmar nova senha</label>
                            <div class="col-md-9">
                                <input name="novaSenhaconf" placeholder="Sua senha" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Data</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" id="exampleFormControlInput2" name="dataNasc">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" id="btnSave" onclick="save()" class="btn btn-
                        primary">Save</button>

                <button type="button" class="btn btn-danger" data-
                        dismiss="modal">Cancel</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

   

<?php  include "rodape.php";