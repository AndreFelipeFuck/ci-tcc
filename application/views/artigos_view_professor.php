<?php include 'cabeca.php';?>
<div class="espaco2"></div>
    <div class="conteinerArtConfig" id="sombra">       
            <h1 style="font-size: 35px; border-bottom: solid 2px #28a745; margin-bottom: 2%; padding-bottom: 1%;">Artigos Postados</h1>
             <!--<h3>No momento a <?php echo $contar->resultado?> artigos</h3>-->
            <a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $_GET['codProfessor']?>" class="btn btn-info">Novo artigo</a>
            <div class="espaco2"></div>
                    <?php foreach($artigos as $artigo){?>
                        <article class="vidCont">
                        <?php if($artigo->professores_codProfessor == $_GET['codProfessor']):?>
                                <?php
                                        if($artigo->imgArtigo == null){?>
                                            <img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>" class="card-img-top" alt="..."><?php
                                        }else{
                                            ?><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>" class="card-img-top" alt="...">
                                <?php }?>

                                <div>
                                    <h5><?php echo $artigo->titulo;?></h5>
                                    <p><?php echo $artigo->corpo;?></p>
                                    <br>
                                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                                    <a class="btn btn-success" href="<?php echo site_url('artigos/artigo_editar')?>?codArtigo=<?php echo $artigo->codArtigo;?>">Artigo editar</a>
                                    <button class="btn btn-danger" onclick="delete_artigo(<?php echo $artigo->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>

                     
                                  </div>
                      <?php endif?>           
                    <?php }?>
        <p> <?php  ?> </p>
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
     window.location.href = "<?php echo site_url('professores/artigos_view/')?>?codProfessor=<?php echo $_GET['codProfessor'];?>"
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    alert('Erro ao deletar');
    }
    });
    }
    }
</script>
    
