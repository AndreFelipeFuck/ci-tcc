<html>
<head>
	<title>Atom | Home</title>
   

    
    <!--Le CSS ==========================================================-->
         <link rel="stylesheet"  href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
         <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <!-- ==============================================================-->

    <!--Le JS ==========================================================-->
    <!-- ==============================================================-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
 
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/bootstrap/img/logo.png')?>" class="imglogo"></a>
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
		      <!--</li>
		       <li class="nav-item">
		        <a class="nav-link" href="#">Videos</a>
		      </li>-->
		       <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('artigos/artigos_listar') ?>">Artigos</a>
		      </li>
		     <li class="nav-item">
		        <a class="nav-link" href="#">Sobre</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Pequise aqui..." aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		    <form class="form-inline my-2 my-lg-0 registro">
                <?php 
                if($this->session->userdata('professores')):?>
                	<a class="regis" href="<?php echo site_url('professores/professor_perfil')?>?codProfessor=<?php echo $_SESSION['professores']; ?>">Perfil</a>
                    <a href="<?php echo site_url('login/sairProf')?>" class="btn btn-outline-success my-2 my-sm-0">Sair</a>

                <?php elseif ($this->session->userdata('alunos')):?>
                	<a class="regis" href="<?php echo site_url('alunos/aluno_perfil')?>?codAluno=<?php echo $_SESSION['alunos'] ?>">Perfil</a>
                    <a href="<?php echo site_url('login/sair')?>" class="btn btn-outline-success my-2 my-sm-0">Sair</a>

                <?php else :?>
                	<a class="regis" href="<?php echo site_url('home/opiCad')?>">Cadastre-se</a>
                    <a href="<?php echo site_url('home/login_home')?>" class="btn btn-outline-success my-2 my-sm-0"> Entrar</a>
                <?php endif;?>
		    </form>
		  </div>
		</nav>


