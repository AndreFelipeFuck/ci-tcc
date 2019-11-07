<?php  include "cabeca.php";
//print_r($_SESSION);
print_r($perfil);
$dataNasc = explode(" ", $perfil->dataNasc);
$dataNasc = explode("-", $dataNasc[0]);
$dataNasc = array_reverse($dataNasc);
$dataNasc = implode("/", $dataNasc);
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
                       ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url('assets/bootstrap/img/user.png')?>" class=" rounded-circle img-fluid" alt="smaple image"></figure><?php
                    }else{
                        ?><figure class="img-rounded img-responsive"><img src="<?php echo base_url("upload/professores/$perfil->imgProfessor")?>" class=" rounded-circle img-fluid" alt="smaple image"></figure><?php
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
                    <h6><?php echo $dataNasc;?></h6>
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
                  if(!empty($_SESSION['professores'])):
                    if($_SESSION['professores'] == $_GET['codProfessor']):?>
                        <a href="<?php echo site_url('professores/professor_editar/')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color:#28a745; border-radius: 49%; padding:10px;"><img src="<?php echo base_url('assets/bootstrap/img/config.png')?>" width="30" height="30"></a>
                    <?php endif ?>
                    <?php if($perfil->admin == 1):?>
                         <a href="<?php echo site_url('professores/professor_admin/')?>?codProfessor=<?php echo $perfil->codProfessor;?>&codDisciplina=<?php echo $perfil->codDisciplina;?>" class="btn" style="background-color:red; border-radius: 49%; padding:10px;"><img src="<?php echo base_url('assets/bootstrap/img/config.png')?>" width="30" height="30"></a>

                         <a href="<?php echo site_url('professores/professor_admin/')?>?codProfessor=<?php echo $perfil->codProfessor;?>&nomeDisciplina=<?php echo $perfil->nomeDisciplina;?>" class="btn" style="background-color:yellow; border-radius: 49%; padding:10px;"><img src="<?php echo base_url('assets/bootstrap/img/config.png')?>" width="30" height="30"></a>

                     <?php endif?>
                <?php endif; ?>
            </section>
        <div style="width: 90%; border-bottom: solid 2px #28a745; display: inline-block; margin-left: 5%; margin-right: 5%; margin-top: 2%; opacity: 0.3;"></div>
            <br><br>
            <div id="infoAlign">
                <?php 
                    if(!empty($_SESSION['professores'])):
                            if($_SESSION['professores'] == $_GET['codProfessor']):?>
                                <a href="<?php echo site_url('professores/artigos_add')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color: #28a745; color: #fff;">Novo artigo</a>

                                 <a href="<?php echo site_url('professores/artigos_view')?>?codProfessor=<?php echo $perfil->codProfessor;?>" class="btn" style="background-color: #28a745; color: #fff;">Visualizar Artigos</a>
                    <?php endif;?>
                <?php endif; ?>
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
<?php  include "rodape.php";