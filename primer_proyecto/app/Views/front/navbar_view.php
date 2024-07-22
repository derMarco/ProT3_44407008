<!-- barra de navegacion --> 
 <?php
 $session = session();
 $nombre = $session->get('nombre');
 $perfil = $session->get('perfil_id');
 ?>


    <?php if(session()->perfil_id == 1):?>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar_header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!--- logo -->
            <img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo de la empresa" width="75" height="30" class="img-fluid mb-3"/>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class=" btn btn-secondary active btnUser btn-sm">
      <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navegador" href="registrarse">REGISTRARSE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href="login">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href=" <?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Session</a>
        </li>
      </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar bg-primary" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
<!-- fin de barra de navegacion--> 
    <?php elseif (session()->perfil_id == 2):?>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar_header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!--- logo -->
            <img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo de la empresa" width="75" height="30" class="img-fluid mb-3"/>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class=" btn btn-secondary active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      </div>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navegador" href="sobre_nosotros">SOBRE NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href=" <?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Session</a>
        </li>
      </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar bg-primary" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
<!-- fin de barra de navegacion--> 
    <?php else:?>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar_header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!--- logo -->
            <img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo de la empresa" width="75" height="30" class="img-fluid mb-3"/>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navegador" href="sobre_nosotros">SOBRE NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href="acerca_de">ACERCA DE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href="registrarse">REGISTRARSE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navegador" href="login">LOGIN</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar bg-primary" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
<!-- fin de barra de navegacion--> <?php endif;?>