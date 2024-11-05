<?php session_start();?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="formularioPaciente.php">Cadastrar paciente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SESSION["funcao"] != "1"){echo "disabled";}?>" aria-current="page" href="">Criar receita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SESSION["funcao"] != "2"){echo "disabled";}?>" aria-current="page" href="">Administrar receita</a>
        </li>
    </div>
  </div>
</nav>