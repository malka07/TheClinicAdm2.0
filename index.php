<!doctype html>
<html>
  <head>
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>JDL S.A - TheClinicAdm</title>


    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body background="./img/mains.jpg">
    <div class="container">
  <div class="py-5 text-center">
  <div class="row">

  


  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="./img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-sm-3 text-white "><h2>JDL S.A</h2></div>

 
    <p class="col-sm-5 text-white ">Servicios Medicos E Informaticos.</p>

    <div class="col-md-12 order-md-2">
      <h4 class="lead text-white ">Login</h4></div>  
    
      </div>
   
<?php 
   require "conexion.php";

  $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }   

    
    
?>

<div class="container">
      <form class="form-horizontal" action="login.php" method="POST">
        <div class="form-group">
          
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dni_usuario" placeholder="DNI" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control" name="contraseña_usuario" placeholder="Contraseña" required>
          </div>
        </div>
      
        <div class="col-md-6 mb-4">
           <input type="hidden" class="form-control" name="permiso_usuario" required>
           <?php 
				     $long = count($usuarios);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$usuarios[$i]['id_usuario'] .">";				
				     echo "</option>";
             }
				   ?>



       
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success btn-lg btn-block">Ingresar</button>
    </div>
</div>

<a href="../ingreso/">	 <hr class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-success btn-lg btn-block" >Crear Usuario</button>


  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
     
      

 
    <p class="mb-1 text-white ">&copy; 2020 - JDL S.A</p>
   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
