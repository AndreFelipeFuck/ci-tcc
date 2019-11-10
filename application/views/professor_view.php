<?php include 'cabeca.php';?>
<?php if ($admin->admin != 1) {
    ?><meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" /><?php
}?>
<?php 
  $teste = isset($_SESSION['professores']);
  if($teste == TRUE){
?>
<div class="espaco2"></div>
<div class="conteinerTelaAdmin" id="sombra">
     <h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Professores de <?php echo $admin->nomeDisciplina?> </h1>
    <table id="" class="table table-striped table-bordered" >

        <thead>
        <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($professores as $professor){?>
            <?php if($_SESSION['professores'] != $professor->codProfessor):?>
                <tr>
                    <td>
                    <?php
                        if ($professor->imgProfessor == null) {
                           ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class=" rounded-circle img-fluid" alt="smaple image"></figure><?php
                        }else{
                            ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/professores/$professor->imgProfessor")?>" class=" rounded-circle img-fluid" alt="smaple image"></figure><?php
                        }
                    ?>
                    </td>
                    <td><a href="<?php echo site_url('professores/professor_perfil/')?>?codProfessor=<?php echo $professor->codProfessor;?>"><?php echo $professor->nomeProfessor;?></a></td>
                    <td><?php echo $professor->email;?></td>
                    <td>
                        <a class="btn btn-danger" onclick="delete_professor(<?php echo $professor->codProfessor;?>)" style="color: #fff;"><i class="glyphicon glyphicon-remove" ></i>EXCLUIR</a>
                    </td>
                </tr>
            <?php endif?>
        <?php }?>

        </tbody>    
    </table>
</div>

<?php }else{?>

        <meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>
<?php include "rodape.php"; ?>


<script>
    $(document).ready( function () {
        $('#codProfessor').DataTable();
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
                $('.modal-title').text('Editar Professor'); // Set title to Bootstrap modal
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
            url = "<?php echo site_url('professores/professor_update')?>";
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
        if(confirm('Voce quer deletar o professor?'))
        {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('professores/professor_delete_admin')?>/" + codProfessor,
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

