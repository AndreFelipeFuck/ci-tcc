<?php include 'cabeca.php';?>
<?php 
    $artigos = array_merge($artigos_aluno, $artigos_professor);

      usort($artigos,

         function( $a, $b ) {

             if( $a ->dataArtigo == $b ->dataArtigo ) return 0;

             return ( ( $a->dataArtigo > $b->dataArtigo ) ? -1 : 1 );
         }
    );
  //print_r($artigos);
  $teste = isset($_SESSION['professores']);
  if($teste == TRUE){
?>
<dir class="espaco2"></dir>
<div class="conteinerTelaAdmin" id="sombra">
    <h1 style="font-size: 35px; border-bottom: solid 2px #17a2b8; margin-bottom: 2%; padding-bottom: 1%;">Tela de admin</h1>
    <table id="" class="table table-striped table-bordered" >

        <thead>
        <tr>
            <th>Imagem</th>
            <th>Nome</th> 
            <th>Resumo</th>
            <th>Data do Artigo</th>
            <th>Usuário</th>
            <th>Ação</th>

        </tr>
        </thead>
        <tbody>

        <?php foreach($artigos as $artigo){?>
                <tr>
                    <td>    
                        <?php
                                if($artigo->imgArtigo == null){?>
                                    <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>"  class="imgAd">
                            <?php
                                }else{?>
                                    <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>" class="imgAd">
                          <?php }?>
                    </td>
                    <td><?php echo $artigo->titulo ?></td>
                    <td><?php echo $artigo->resumo?></td>
                    <td><?php echo $artigo->dataArtigo?></td>
                    <td>
                         <?php if (isset($artigo->alunos_codAluno) == TRUE): ?>
                 
                               <h4 id="nomeAutor2"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>" style="color: #17a2b8;"><?php echo $artigo->nomeAluno;?></a></h4>
                        
                         <?php endif ?>

                        <?php if (isset($artigo->professores_codProfessor) == TRUE):?>
                         
                           <h4 id="nomeAutor2"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>" style="color: #28a745;"><?php echo $artigo->nomeProfessor;?></a></h4>
                            
                        <?php endif ?>
                    </td>
                    <td>
                        <button class="btn btn-danger" onclick="delete_artigo(<?php echo $artigo->codArtigo;?>)"><i class="glyphicon glyphicon-remove"></i>EXCLUIR</button>
                    </td>
                </tr>
        <?php }?>

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
    
    function delete_artigo(codArtigo)
    {
        if(confirm('Voce quer deletar este artigo?'))
        {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('artigos/artigo_delete')?>/" + codArtigo,
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
