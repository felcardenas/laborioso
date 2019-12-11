<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos2.css">
  </link>
  <script src="https://kit.fontawesome.com/fa068e4c93.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/iconosinfondo.png" />



  <title>Bienvenid@ a Laborioso</title>
</head>

<body>
  
  <div class="container cabecera" style=" height:250px;">

    <!--  <img src="img/logo.png" alt="" class="img-fluid pt-5">-->
    <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <img src="img/minilogo.png" alt="" class="img-fluid mt-4" style="height:70px; width:300px;">
      </div> -->
    <div class="row justify-content-center">

      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-none d-md-block">
    <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" > -->
        <!-- <div class="row logologo mt-3">
          <div class="col-12 logo"> LABORIOSO </div>
          <div class="col-12 pielogo">exámenes preocupacionales</div>
        </div> -->

            
        
           <img src="img/logosinfondo.png" alt="" class="img-fluid" style="height:auto; width:200px;margin-top:15px;">  
         
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
      <img src="img/logoazul.png" alt="" class="img-fluid mr-5" style="height:auto; margin-top:50px;"> 
      </div>

      
      <div class="col-12 col-sm-12 col-lg-4 col-xl-4 d-none d-lg-block">
      <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block d-xl-block d-lg-block"> -->
         <img src="img/contacto.png" alt="" class="img-fluid float-right " style="height:auto; margin-top:70px;"> 
        <!-- <div class="col-12"><i class="fas fa-phone-alt icono"></i>+569-12345678</div>
        <div class="col-12"><i class="fas fa-map-marker-alt icono"></i>Dirección: Evergreen Terrace #742</div>
        <div class="col-12"><i class="far fa-envelope icono"></i>Correo electrónico: contacto@laboriosa.cl</div> -->
      </div>

    </div>



  </div>

  
  
  <div class="container-fluid menu" style="padding-top:5px; padding-bottom:5px">

    <div class="row justify-content-center">

      <a href="#" id="inicio" class="inicio elementomenu">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">INICIO</div>
      </a>

      <a href="#" id="quienessomos" class="quienessomos elementomenu">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">QUIENES SOMOS</div>
      </a>

      <a href="#" id="examenes" class="examenes elementomenu">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">EXÁMENES</div>
      </a>

      <a href="#" id="revisarexamenes" class="revisarexamenes elementomenu">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">REVISAR EXÁMENES</div>
      </a>

      <a href="#contacto" id="contacto" class="contacto elementomenu">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">CONTACTO</div>
      </a>


    </div>

  </div>

  
  <div class="container-fluid separador-blanco"></div>
  <div class="container-fluid separador-verde"></div>
  <div class="container-fluid separador-blanco"></div>
  

  <div class="container mt-5 mb-5" id="contenido">

    <?php include 'inicio.php' ?>

  </div>

  
  <div class="container-fluid separador-verde"></div>
  <div class="container-fluid separador-verde"></div>
  <div class="container-fluid separador-blanco"></div>
  <div class="container-fluid separador-verde"></div>

 
  <?php include 'contacto.php'; 
        
  ?>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>



</body>

</html>