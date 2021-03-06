<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Galería</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="usuarios.php">Registro</a>
                </li>
              </ul>
        </nav>
    </header>
    <article>
      <!--Extencion bootstrap online-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/a1.jpg" class="d-block w-100" alt="LenguaSeñas">
          </div>
          <div class="carousel-item">
            <img src="img/a2.jpg" class="d-block w-100" alt="LenguaSeñas">
          </div>
          <div class="carousel-item">
            <img src="img/a3.jpg" class="d-block w-100" alt="LenguaSeñas">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <br>
      <center>

        <a href="https://www.pinterest.com.mx/pin/626000416932375854/" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type="button" class="btn btn-outline-primary" value="ABECEDARIO"></a>
        <a href="#" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type="button" class="btn btn-outline-secondary" value="VIDEOS"></a>
        <a href="#" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type="button" class="btn btn-outline-success" value="ABECEDARIO"></a>
        <a href="#" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type="button" class="btn btn-outline-warning" value="ABECEDARIO"></a>
        <a href="#" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type="button" class="btn btn-outline-info" value="ABECEDARIO"></a>
      </center><br>

    </article>
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-6 text-left">
                  <h6 class="text-muted lead">CONTACTO:</h6>
                  <h6 class="text-muted">
                  UNIVERSIDAD AUTÓNOMA DE CHIAPAS<br>
                  Facultad de Contaduria y Administración campus I.<br>
                  Correo: SeñasAmigas@gmail.com.<br>
                  Teléfono: 961-319-47-58.<br>
                  </h6>
              </div>
              <div class="col-xs-12 col-md-6 text-right">
              <div class="pull-right">
              <h6 class="text-muted lead">SIGUENOS</h6>
                    <div class="redes-footer">
                        <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" width="5%"></a>
                        <a href="https://twitter.com" target="_blank"><img src="img/twitter.png" width="5%"></a>
                        <a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png" width="5%"></a>
                    </div>
              </div>
              <div class="row">
                <p class="col-md-12 text-muted small text-right">
                   Señas Amigas @2021.<br>
                   Todos los derechos reservados.
                </p>
              </div>
          </div>
        </div>  
      </div>
  </footer>
</body>
</html>