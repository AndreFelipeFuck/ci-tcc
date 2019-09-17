<?php include 'cabeca.php';?>
<div class="espaco2"></div>
<div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner0">
        <h1>Artigos</h1>
        <br>
    <?php foreach($artigos as $artigo){?>
        <div class="card mb-3">
            <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/eng.png')?>" class="card-img-top" alt="..."><?php
                    }else{
                        ?><img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>" class="card-img-top" alt="...">
            <?php }?>

            <div class="card-body">
                <h4 class="card-title"><?php echo $artigo->titulo;?></h4>
                <p class="card-text"><?php echo $artigo->corpo;?></p>
                <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
              </div>
            </div>
             
          
        </div>
    <?php }?>
    <p> <?php  ?> </p>
   </section>
    
</div>
    
<!--
       <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn"><article class="vidCont">
            <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
            <div>
                <h3><?php echo $artigo->titulo;?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </article></a>
        <br>
-->
    