<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css2/registrousuario.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery/registroequipo.js"></script>
    <title>Registro </title>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-primary">
            <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> 
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
             <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="ConsultaMysql/cerrarsession.php">Salir</a>
            </li>
          </ul>   
         </nav> 
         <br>
         <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
    <h2> Completar tus datos </h2>
    </div>
    <div class="col col-lg-2">
    </div>
    <div class="col col-lg-4">
    
    </div>
  </div>
   
    <br>
    <br>
    <div class="container-fluid None ">     
      <div class="mx-auto shadow p-4 mb-4 bg-light" style="width:550px;height:220px">
      <form class="needs-validation form-row"  novalidate id="RegistroU" method="GET"  action="" name="RegistroU">
  
      <div class="form-group col-md-6">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" maxlength="43"  title="Ingrese Nombre" placeholder="Nombre" required>     
    <div class="invalid-tooltip" >
          Complete Espacio.
        </div>
  </div>
  <div class="form-group col-md-6">
    <label for="Apellido">Apellido:</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido"  maxlength="43"  title="Ingrese Apellido" required>
    <div class="invalid-tooltip" >
          Complete Espacio.
        </div>
  </div>
 
  <div class="form-group col-md-6">
    <label for="correo">correo:</label>
    <input type="text" class="form-control" id="correo" name="correo" placeholder="correo"  maxlength="43"  title="Ingrese correo"required>
    <div class="invalid-tooltip" >
          Complete Espacio.
        </div>
  </div>
  <div class="form-group col-md-6">
    <label for="Clave">Clave:</label>
    <input type="text" class="form-control" id="Clave" name="Clave" placeholder="Clave"  maxlength="43"  title="Ingrese Clave"required>
    <div class="invalid-tooltip">
          Complete Espacio.
        </div>
  </div>
</br>
</br>
</br>

 
</div>


  
  <!--
  <div class="col-md-10 mb-1">
    <label for="Apellido">Vuelve a escribir la contaseña:</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido"  maxlength="43"  title="Ingrese Apellido"required>
    <div class="invalid-tooltip" >
          Complete Espacio.
        </div>

  </div> -->

  
 
</form> 
</br>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-1">
    </div>
    <div class="col col-lg-2">
    <button type="submit" class="btn btn-primary">Continuar</button>
    </div>
    <div class="col col-lg-4">
    Al registrarme, declaro que soy mayor de edad y acepto los Términos y 
    condiciones y las Políticas de privacidad de Mercado ARKI y
     Mercado pago arki
    </div>
  </div>

</div>
      </div>
    
     
      <!-- fin del container-->

        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>        
        </body>
  </html>
    