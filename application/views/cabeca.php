<html>
<head>
   

    
    <!--Le CSS ==========================================================-->
         <link rel="stylesheet"  href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
         <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css')?>">
         <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
         <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/pagination.css')?>">
          <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/jquery-ui.css')?>"> 
     
    <!-- ==============================================================-->

    <!--Le JS ==========================================================-->
      <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.js')?>"></script>
       <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>

       <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-ui.js')?>"></script>
      	<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-ui.min.js')?>"></script>   

    	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    	<!-- <script src="<?php echo base_url('assets/bootstrap/js/custom.js')?>"></script> -->
    	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
           <script src="<?php echo base_url('assets/bootstrap/js/pagination.js')?>"></script>
    <!-- ==============================================================-->
  		<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="pragma" content="no-cache" />
        <meta charset="utf-8">
 
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="sombra2">
		  <a class="navbar-brand" href="<?php echo site_url('')?>"><img src="<?php echo base_url('assets/bootstrap/img/logo.png')?>" class="imglogo"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('')?>">Home<span class="sr-only">(current)</span></a>
		      </li>
               
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('disciplinas')?>">Disciplinas</a>
		       <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('artigos/artigos_listar') ?>">Artigos</a>
		      </li>
		     <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('home/sobre') ?>">Sobre</a>
		      </li>
		    </ul>
		    <div class="row">
			     <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('home/resultado')?>" method = "get">
			     	<div id="custom-search-input">
             
				     		<div class="input-group autocomplete">
				     			<input class="form-control mr-sm-2 ui-widget" type="text" name = "busca" placeholder="Pequise aqui..." aria-label="Search" id="termo">
				     		</div>
          
				    </div>
				    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
			      
			    </form>
			</div>
		    <style type="text/css">
		    	a:hover{
		    		color: #343a40;
		    	}
		    </style>
		    <form class="form-inline my-2 my-lg-0 registro">
                <?php 
                if($this->session->userdata('professores')):?>
                	<a class="regis" href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $_SESSION['professores']?>">Perfil</a>

                    <a href="<?php echo site_url('login/sairProf')?>" class="btn btn-outline-info my-2 my-sm-0">Sair</a>

                <?php elseif ($this->session->userdata('alunos')):?>
                	<a class="regis" href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $_SESSION['alunos']?>">Perfil</a>
                    <a href="<?php echo site_url('login/sair')?>" class="btn btn-outline-info my-2 my-sm-0">Sair</a>

                <?php else :?>
                	<a class="regis" href="<?php echo site_url('home/opiCad')?>">Cadastre-se</a>
                    <a href="<?php echo site_url('home/login_home')?>" class="btn btn-outline-info my-2 my-sm-0"> Entrar</a>
                <?php endif;?>
		    </form>
		  </div>
		
<script>

  $(document).ready(function() { 
    $( "#termo" ).autocomplete({
       
        source: function(request, response) {
            $.ajax({
            url: "<?php echo site_url('home/procurar/');?>",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.titulo;
               }); 
              console.log(resp);
               response(resp);
            }
            
        });
    },
    minLength: 1
 });
     $("#ui-id-1").addClass('sticky-top');
});	

</script>
</nav>
<style type="text/css">
  .ui-menu-item{
    

  }
</style>

