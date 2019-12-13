<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Practico.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="perfil/estiloPerfil.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>perfil</title>
  </head>
  <body>

      <h1>Mi perfil</h1>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <section  class="perfil">
          <div class="card" style="width: 18rem;">
            <img src="../imagenes/perfil.jpg" alt="yo" style=width:50px; height:50px;>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <a href="#" class="btn btn-primary">Cerrar Sesión</a>
            </div>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#Inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Datos">Mis Datos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Compras">Mis Compras</a>
              </li>
            </ul>
          </div>
        </section>
        <section class="contenido">
          <p>Mis Compras</p>
            <div class="Compras col-sm-12" >
              <span id="CRealizadas" class="alert alert-success col-sm-4" role="alert">Compras realizadas: 0</span>
              <span id="CProcesadas" class="alert alert-darkl col-sm-4" role="alert">Compras en proceso: 0</span>
              <span id="CRechazadas" class="alert alert-danger col-sm-4" role="alert">Compras rechazadas: 0</span>
            </div>
          <p>Que puedo hacer en mi cuenta?</p>
        </section>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
