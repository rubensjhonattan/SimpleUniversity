<!DOCTYPE html>
<html>
<head>
  <?php 
    function addStyle()
    {
      echo "<link rel='.stylesheet' type='text/css' href='frame/view/css/estilo.css'>";
    }
    addStyle();
  ?>

	<title>Sistema Universitário</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Universidade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alunos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		    <a class="dropdown-item" href="?modulo=viewStudent&acao=viewStudent">Ver Alunos</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="?modulo=viewStudent&acao=addStudent">Adicionar Aluno</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cursos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		    <a class="dropdown-item" href="#"></a>
		    <a class="dropdown-item" href="?modulo=viewCourse&acao=viewCourse">Ver Cursos</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="?modulo=viewCourse&acao=addCourse">Adicionar Curso</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<?php
  require_once 'loadfiles.php';
  $ctrl = new controller();
  echo "<link rel='stylesheet' type='text/css' href='frame/view/css/estilo.css'>";
?>

</body>
</html>