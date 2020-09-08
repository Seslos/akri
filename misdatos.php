<!--< ?php
session_start();
if($_SESSION['Usuario_Us']){
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css2/registrousuario.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery/registroequipo.js"></script>
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
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a> Modulo Registro Equipo</a> </li>
                    <li> <a href="registrousuario.php">Registro Usuario</a></li>
                    <li> <a href="asignarequipo.php">Asignar Equipo</a></li>
                    <li> <a  href="busquedaequipo.php" >Busqueda </a> </li>
                    
                    <li > <a class="nav-link disabled"   href="" >Registro Equipo</a> </li>                       
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
</br>
</br>
            <div class="container-fluid None ">
                <div class="container-fluid">       
        <!-- div para efecto de fondo del form-->
        <div class="mx-auto shadow col-lg-17 col-md-7 bg-white rounded" >
  <!-- comienzo del form-->
  <form class="was-validated"  novalidate id="RegistroE" method="GET" action="ConsultaMysql/AgregarEquipo.php" name="RegistroE">
 
  <div class="form-group ">
  Datos de cuenta

<br>
<br>
      <label for="usuario">usuario</label>
      <input type="text" class="col-sm-9 form-control " id="usuario"  name="usuario" maxlength="43"     placeholder="Ej:usuario"required >
      <div class="invalid-tooltip" >
          Complete Espacio.
        </div>
  </div>
  <div class="form-group">
  

      <label for="email">E-mail</label>
      <input type="text" class="col-sm-9 form-control " id="email" name="email"  maxlength="43"title="Ingrese email"placeholder="email"required>
      <div class="invalid-tooltip">
      Complete Espacio.
        </div>  
    </div>
    <br>
    <div class="form-group">
    Datos personales
    <br>
    <br>
      <label for="nomape">nombre y apellido</label>
      <input type="text" class="col-sm-9 form-control "id="nomape" min="100" max="300"  name="nomape"title="Ingrese Internet Protocol(ip) "placeholder="Ej:172.16.1.1 hasta 172.16.255.254."  required >  
      <div class="invalid-tooltip" >
      Complete Espacio.
        </div>      
    </div>

  <div class="form-group">
      <label for="telefono">telefono</label>
      <input type="text" class="col-sm-9 form-control " id="telefono"  name="telefono" maxlength="17"   title="Ingrese Medio Access Control(Mac) "placeholder="Ej:0a:1b:2c:4d:5e:6f."  required> 
      <div class="invalid-tooltip">
      Complete  Espacio.
        </div>
        <br>
    </div>
    <div class="form-group">
      <label for="mac">Medio Access Control(Mac)</label>
      <input type="text" class="col-sm-9 form-control " id="mac"  name="mac" maxlength="17"   title="Ingrese Medio Access Control(Mac) "placeholder="Ej:0a:1b:2c:4d:5e:6f."  required> 
      <div class="invalid-tooltip">
      Complete  Espacio.
        </div>
        <br>
    </div>

    <div class="form-group">
      <label for="TipoEquipo"> domicilio </label>
      <input type="text" class="col-sm-9 form-control " id="TipoEquipo"  name="TipoEquipo" maxlength="17"   title="Tipo de Equipo "placeholder="Ej:Laptop,Table"  required>    
      <div class="invalid-tooltip">
      Complete  Espacio.
        </div>
    </div>
    <div class="form-group">
      <label for="mac">Medio Access Control(Mac)</label>
      <input type="text" class="col-sm-9 form-control " id="mac"  name="mac" maxlength="17"   title="Ingrese Medio Access Control(Mac) "placeholder="Ej:0a:1b:2c:4d:5e:6f."  required> 
      <div class="invalid-tooltip">
      Complete  Espacio.
        </div>
        <br>
    </div>

  <div class="form-row text-center">
      <div class="col-11">
          <input type="submit" class="btn btn-primary " id="registro" name="registro" title="Registrar" value="Registrar" >
      </div>
    </div>
  </form>
  </div> 
      </div>
      <!-- fin del container-->
    </div>
    <!-- /#page-content-wrapper -->
  </div>
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
        <br>
        <br>
        <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">Footer Content</h5>
      <p>Here you can use rows and columns to organize your footer content.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/%22%3E MDBootstrap.com"</a>
</div>
<!-- Copyright -->

</footer>
</body>

  </html>
        <!-- < ?php  }? > -->