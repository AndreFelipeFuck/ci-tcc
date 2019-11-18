<?php
include "cabeca.php";

$tipo = array(
  'Nenhuma' => "background-color:#838383;",
    'Biologia'=>"background-color:#28a745;",
    'Física'=>"background-color:#17a2b8;",
    'Química'=>"background-color:#8f3d8f;",
    'Geografia'=>"background-color:#dc3545;",
    'História'=>"background-color:#fd7e14;",
    'Pr.Textual'=>"background-color:#ffc84d;;",
    'Portugues'=>"background-color:#F2975A;",
    'Matemática'=>"background-color:#356BB0;",
    'Inglês'=>"background-color:#007bff;",
    'Espanhol'=>"background-color:#ffc107;",
    'Filosofia'=>"background-color:#e83e8c;",
    'Sociologia'=>"background-color:#AC65BE;",
    'Agropecuária'=>"background-color:#49b108;",
    'Informática'=>"background-color:#425f8c;",
    'Química(tec)'=>"background-color:#a25ec5;"
);
$estilo = 0;

foreach ($tipo as $key => $value) {
    if ($key == $disciplinas->nomeDisciplina) {
       $estilo = $value;
       break;
    }
}

$artigos = array_merge($artigos_aluno, $artigos_professor);

      usort($artigos,

         function( $a, $b ) {

             if( $a ->dataArtigo == $b ->dataArtigo ) return 0;

             return ( ( $a->dataArtigo > $b->dataArtigo ) ? -1 : 1 );
         }
    );
// echo '<pre>';
//  print_r($artigos);
// echo '</pre>';

?>
<header>
    <title>Atom | Artigos de <?php echo $disciplinas->nomeDisciplina?></title>
</header>
 <div  class = "espaco2"></div>
<div class="conteinerArtView" id="sombra">     
        <section class="conteiner0">
              <div>
                <div id="logoDisc" style="<?php echo $estilo; ?>">
                    <figure class="img-rounded img-responsive"><img src="<?php echo base_url("assets/bootstrap/img/$disciplinas->imgDisciplina")?>" width="100" height="100" class="img-fluid" alt="smaple image"></figure>
                </div>
                <div id="tituloDisc" style="<?php echo $estilo; ?>"><h1 style="color: #fff">Artigos de <?php echo $disciplinas->nomeDisciplina?></h1><cite style="color: #fff"></cite></div>
              </div>
              <div class="espaco2"></div>

            <?php if (empty($artigos)):?>
                 <article class="vidCont">
                    <section id="BlockNoResult">
                        <div><figure class="img-responsive"><img src="<?php echo base_url("assets/bootstrap/img/bio.png")?>" class="img-fluid" alt="smaple image"></figure></div>
                        <div><h5>Não há nenhum artigo sobre <?php echo $disciplinas->nomeDisciplina?>...</h5></div>
                    </section>
                 </article>
            <?php endif ?>
            <?php foreach($artigos as $artigo):?>
                <?php if (isset($artigo->alunos_codAluno) == TRUE): ?>
                     <article class="vidCont">
                            <?php
                                if($artigo->imgArtigo == null){?>
                                    <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                            <?php
                                }else{?>
                                    <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
                          <?php }?>
                            <div class="divInfo">
                                <h3><?php echo $artigo->titulo?></h3>
                                <p id="limiteLinhas"><?php echo $artigo->resumo?></p>
                                <label>Postado pelo aluno:<h4 id="nomeAutor2"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>" style="color: #17a2b8;"><?php echo $artigo->nomeAluno;?></a></h4></label>
                            </div>
                                <div class="divCont">
                                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu";>Visualizar</a>
                                </div>
                        </article>
                    <br>
                <?php endif ?>

                <?php if (isset($artigo->professores_codProfessor) == TRUE):?>
                         <article class="vidCont">
                            <?php
                                if($artigo->imgArtigo == null){?>
                                    <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                            <?php
                                }else{?>
                                    <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
                          <?php }?>
                            <div class="divInfo">
                                <h3><?php echo $artigo->titulo?></h3>
                                <p id="limiteLinhas"><?php echo $artigo->resumo?></p>
                                    <label>Postado pelo professor:<h4 id="nomeAutor2"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>" style="color: #28a745;"><?php echo $artigo->nomeProfessor;?></a></h4></label>
                            </div>
                                <div class="divCont">
                                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn" id="visu">Visualizar</a>
                                </div>
                         </article>
                     <br>
                <?php endif ?>

                       
             <?php endforeach?>
        </section>
        
    </div>
<?php include "rodape.php"; ?>