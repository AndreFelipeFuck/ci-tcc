<?php include 'cabeca.php';?>
<div class="espaco2"></div>
<div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner0">
        <h1>Artigos</h1>
        <a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $_GET['codProfessor']?>" class="btn btn-warning">Novo artigo</a>
        <br>
                <?php foreach($artigos as $artigo){?>
                    <div class="card mb-3">
                    <?php if($artigo->professores_codProfessor == $_GET['codProfessor']):?>
                            <?php
                                    if($artigo->imgArtigo == null){?>
                                        <img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>" class="card-img-top" alt="..."><?php
                                    }else{
                                        ?><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>" class="card-img-top" alt="...">
                            <?php }?>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $artigo->titulo;?></h5>
                                <p class="card-text"><?php echo $artigo->corpo;?></p>
                                <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                                <a class="btn btn-success" href="<?php echo site_url('artigos/artigo_editar')?>?codArtigo=<?php echo $artigo->codArtigo;?>">Artigo editar</a>
                                <button class="btn btn-danger" onclick="delete_artigo(<?php echo $artigo->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>

                 
                              </div>
                            </div>
                  <?php endif?>           
                        </div>
                <?php }?>
    <p> <?php  ?> </p>
   </section>
    
</div>
<script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script>
    $(document).ready( function () {
    $('#codArtigo').DataTable();
    } );
    var save_method; //for save method string
    var table;
     function add_artigo()
    {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
    
    function delete_artigo(codArtigo)
    {
    if(confirm('Voce quer deletar o artigo?'))
    {
    // ajax delete data from database
    $.ajax({
    url : "<?php echo site_url('artigos/artigo_delete')?>/" + codArtigo,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
     window.location.href = ""<?php echo site_url('professores/professor_editar/')?>?codProfessor=<?php echo $artigo->professores_codProfessor;?>""
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Erro ao deletar');
    }
    });
    }
    }
</script>
    
