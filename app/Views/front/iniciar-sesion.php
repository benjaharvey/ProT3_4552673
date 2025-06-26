<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href= "<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/miestilo.css') ?>">
    <title>Inicio de sesión</title>
</head>
<body>

<header>

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand">
        <img src="assets/img/logoaeroclub.png" alt="logo" width="90px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">

          <button type="button" class="btn boton-inicio" aria-current="page">
            <a class="nav-link active" aria-current="page" href="<?php  echo base_url('principal') ?>">Inicio</a>
          </button>

        </li>

        <li class="nav-item">

          <button type="button" class="btn boton-sobre-nosotros">
            <a class="nav-link active" aria-current="page" href="<?php  echo base_url('miembros-aeroclub') ?>">Acerca de</a>
          </button>

        </li>

        <li class="nav-item dropdown">

           <button type="button" class="btn boton-servicios">
              <a class="nav-link dropdown-toggle" href="<?php  echo base_url('servicios') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
            </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php  echo base_url('servicios') ?>">Escuela de vuelo</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('servicios') ?>">Simulador de vuelo</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('servicios') ?>">Vuelos sobre la Ciudad de Corrientes</a></li>
          </ul>
          </button>
        </li>
      </ul>


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search"/>
        <button class="btn boton-buscar" type="submit">Buscar</button>

        <button type="button" class="btn boton-inicio-sesion">
          <a class="nav-link active" aria-current="page" href="<?php  echo base_url('iniciar-sesion') ?>">Iniciar Sesión</a>
        </button>

        <button type="button" class="btn boton-registro">
          <a class="nav-link active" aria-current="page" href="<?php  echo base_url('registrar') ?>">Registrarse</a>
        </button>

      </form>
    </div>
  </div>
</nav>
        
</header>

<main>
    <h1>Inicio de sesión</h1>
    <p class="subtitulo-registro">¡Bienvenido devuelta! Estamos encantados de volver a verte</p>

        <div class="container mt-5 registro-aeroclub">
  <div class="card">
    <div class="card-header text-center">
      <h4>Iniciar sesión</h4>
    </div>
    <div class="card-body rounded-4 shadow">

<form action="<?= base_url('/enviarlogin') ?>" method="post">
  <div class="mb-3">
    <label for="email_usuario" class="form-label">Email</label>
    <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="ejemplo@gmail.com" required>
  </div>

  <div class="mb-3">
    <label for="pass_usuario" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="pass_usuario" name="pass_usuario" placeholder="Contraseña (mínimo 5 caracteres)" required>
  </div>

  <button type="submit" class="btn me-2 boton-registrar">Iniciar sesión</button>
  <button type="button" class="btn btn-danger">Cancelar</button>

  <?php if(session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning mt-2">
      <?= session()->getFlashdata('msg') ?>
    </div>
  <?php endif; ?>
</form>


    </div>
  </div>
</div>

</main>

<footer>
    <div class="container text-center">
  <div class="row">
    <div class="col">
      <h3>Contactanos</h3>

      <p class= "contenido-footer"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope-at-fill me-2" viewBox="0 0 16 16">
      <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
      <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
      </svg> aeroclub.canada.quiroz@gmail.com</p>

      <p class = "contenido-footer"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone-inbound-fill me-2" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
      </svg>+54 9 379 493-1721</p>

      <p class = "contenido-footer"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram me-3" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
      </svg>aeroclubcanadaquiroz</p>

    </div>
    <div class="col">
      <h3>Horarios</h3>

      <p class="contenido-footer"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock-fill me-2" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
      </svg>LUNES A JUEVES: 16:00 - 22:00</p>

      <p class="contenido-footer"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock-fill me-2" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
      </svg>VIERNES A DOMINGO: 12:00 - 00:00</p>
    </div>
  </div>
</div>

    <p class ="derechos-autor">2025 Aeroclub Cañada Quiroz. Todos los derechos reservados. Hecho por Benjamín J.A. Harvey para Talentos Digitales 2025 -- DNI: 45526737</p>

</footer>

<script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>