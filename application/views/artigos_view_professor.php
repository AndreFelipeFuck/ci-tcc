<?php include 'cabeca.php';?>
<?php if($_SESSION['professores'] == $_GET['codProfessor']){?>
    <div class="espaco2"></div>
        <div class="conteinerArtConfig" id="sombra">       
                <h1 style="font-size: 35px; border-bottom: solid 2px #28a745; margin-bottom: 2%; padding-bottom: 1%;">Artigos Postados</h1>
                <!--<h3>No momento a <?php echo $contar->resultado?> artigos</h3>-->
                <a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $_GET['codProfessor']?>" class="btn btn-success">Novo artigo</a>
                <div class="espaco2"></div>
                        <?php foreach($artigos as $artigo){?>
                            
                            <?php if($artigo->professores_codProfessor == $_GET['codProfessor']):?>
                                <article class="vidCont">
                                    <?php
                                            if($artigo->imgArtigo == null){?>
                                                <img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>" class="card-img-top" alt="..."><?php
                                            }else{
                                                ?><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>" class="card-img-top" alt="...">
                                    <?php }?>

                                    <div>
                                        <h5><?php echo $artigo->titulo;?></h5>
                                        <p id="limiteLinhas"><?php echo $artigo->corpo;?></p>
                                        <br>
                                        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visulizar</a>
                                        <a class="btn" id="bot-verde" href="<?php echo site_url('artigos/artigo_editar')?>?codArtigo=<?php echo $artigo->codArtigo;?>">Artigo editar</a>
                                        <button class="btn" id="cancelar" onclick="delete_artigo(<?php echo $artigo->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>Excluir</button>

                        
                                    </div>
                                    </article>
                        <?php endif?>           
                        <?php }?>
            <p> <?php  ?> </p>
        </div>
<?php }else{?>
    <meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>
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
    
