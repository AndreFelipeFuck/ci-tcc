<?php include 'cabeca.php';?>
<div class="espaco2"></div>
<div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner2">
        <h1>Artigos</h1>
        <br>
    <?php foreach($artigos as $artigo){?>
        <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn"><article class="vidCont">
            <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
            <div>
                <h3><?php echo $artigo->titulo;?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </article></a>
        <br>
    <?php }?>
    <p> <?php echo $links; ?> </p>
   </section>
    
</div>
    
   

    