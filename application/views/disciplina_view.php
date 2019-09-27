<?php
include "cabeca.php";

$tipo = array(
  'Nenhuma' => "background-color:#838383;",
    'Biologia'=>"background-color:#28a745;",
    'Física'=>"background-color:#17a2b8;",
    'Química'=>"background-color:#8f3d8f;",
    'Geografia'=>"background-color:#dc3545;",
    'História'=>"background-color:#fd7e14;",
    'Pr.Textual'=>"background-color:#5d3011;",
    'Portugues'=>"background-color:#ffc84d;",
    'Matemática'=>"background-color:#173f5f;",
    'Inglês'=>"background-color:#007bff;",
    'Espanhol'=>"background-color:#ffc107;",
    'Filosofia'=>"background-color:#e83e8c;",
    'Sociologia'=>"background-color:#763c7d;",
    'Agropecuária'=>"background-color:#49b108;",
    'Informatica'=>"background-color:#425f8c;",
    'Química(tec)'=>"background-color:#a25ec5;",
);
$estilo = 0;

foreach ($tipo as $key => $value) {
    if ($key == $disciplinas->nomeDisciplina) {
       $estilo = $value;
       break;
    }
}


?>
<header>
    <title>Atom | Artigos de <?php echo $disciplinas->nomeDisciplina?></title>
</header>
<div class="espaco2"></div>
 <div class="conteinerDiscPage" id="sombra">
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner0">
        <div style="margin-bottom: 1%;">
            <div id="logoDisc" style="<? echo $estilo; ?>">
                <figure class="img-rounded img-responsive"><img src="<?php echo base_url("assets/bootstrap/img/$disciplinas->imgDisciplina")?>" width="100" height="100" alt="smaple image"></figure>
            </div>
            <div id="tituloDisc" style="<? echo $estilo; ?>"><h1 style="color: #fff">Artigos de <?php echo $disciplinas->nomeDisciplina?></h1></div>
        </div>
        <?php foreach($artigos as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->resumo?></p>
                        <label>Postado pelo aluno:<h4 id="nomeAutor"><a href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $artigo->alunos_codAluno?>"><?php echo $artigo->nomeAluno;?></a></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
     <?php foreach($artigosProfessor as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->resumo?></p>
                       <label>Postado pelo professor:<h4 id="nomeAutor"><a href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $artigo->professores_codProfessor?>"><?php echo $artigo->nomeProfessor;?></a></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
   </section>
    
</div>
</table>
</div>
<?php include "rodape.php"; ?>