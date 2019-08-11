<?php include 'cabeca.php';?>
<div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

    <thead>
    <tr>

    <th>NOME</th>
    <th>EMAIL</th>
    <th>CURSO</th>
    <th>ANO LETIVO</th>
    <th>DATA NASCIMENTO</th>
    <th>AÇÃO</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($alunos as $aluno){?>
    <tr>
        <?php //if($aluno->codAluno == 7){//?>
            <td><?php echo $aluno->nomeCompleto;?></td>
            <td><?php echo $aluno->email;?></td>
            <td><?php echo $aluno->curso;?></td>
            <td><?php echo $aluno->anoLetivo;?></td>
            <td><?php echo $aluno->dataNasc;?></td>
            <td>
              
            <button class="btn btn-success" onclick="edit_aluno(<?php echo $aluno->codAluno;?>)"><i class="glyphicon glyphicon-pencil"></i>EDITAR</button>

            <button class="btn btn-danger" onclick="delete_aluno(<?php echo $aluno->codAluno;?>)"><i class="glyphicon glyphicon-remove"></i>EXCLUIR</button>

            <a href="<?php echo site_url('alunos/aluno_perfil/')?>?codAluno=<?php echo $aluno->codAluno; // ta meio estranho, tenho que perguntar para o professor?>" class="btn btn-warning">SAIBA MAIS</a>
            </td>
            </tr>
        <?php //    }?>    
    <?php }?>
   
    </table>
</div>
    
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
    $('[name="senha"]').val(data.senha);


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
                            <label class="control-label col-md-3">Nome</label>
                            <div class="col-md-9">

                                <input name="nomeCompleto" placeholder="Book ISBN" class="form-
    control" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">email</label>
                            <div class="col-md-9">

                                <input name="email" placeholder="Book_title" class="form-
    control" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">senha</label>
                            <div class="col-md-9">

                                <input name="senha" placeholder="Book Author" class="form-control" type="password">
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
