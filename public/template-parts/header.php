<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL ?>/assets/css/style.css">
  

  <title>Acquista</title>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/Sito-Ecommerce/">Healty</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL ?>public/?page=homepage">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>public/?page=contatti">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>public/?page=chisiamo">Chi Siamo!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>public/?page=servizi">Servizi</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="true">Area Riservata</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Login</a>
              <a class="dropdown-item" href="#">Registrati</a>
              <a class="dropdown-item" href="#">Esci</a>
            </div>
          </li>
        </ul>
      </div>
    </div>  
  </nav>


  