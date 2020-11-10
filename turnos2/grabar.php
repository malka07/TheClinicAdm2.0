<html>
<?php 
    require "../metodos.php";
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>JDL S.A - TheClinicAdm</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
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
  <body background="../img/turnos2.jpg" style="background-size:cover";>
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
    <div class="col-md"><img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <p class="lead"><h4><strong>Ingreso de Turnos y Servicios / Profesiones para la App</strong></h4></p>
  </div>

<?php

   require "../conexion.php";

   $sql = "insert into turnos(
    fecha_turno,horario_turno,paciente_turno,clinico_turno,comentarios_turno)
    values" 
    . "('".$_POST['fecha_turno'] 	. "'," 
    . "'" .$_POST['horario_turno'] 	. "',"	
    . "'" .$_POST['paciente_turno'] 	. "',"	
    . "'" .$_POST['clinico_turno'] 	. "',"	
    . "'" .$_POST['comentarios_turno'] 	. "' "	
    . ")";
  
// echo $sql;

$fehor=FALSE;
    $sql2 = "SELECT fecha_turno, horario_turno, paciente_turno, clinico_turno, comentarios_turno FROM turnos ";
    $query = $mysqli->query($sql2);
    while($resultado = $query->fetch_assoc()) {
        if($_POST['fecha_turno']==$resultado['fecha_turno'] && $_POST['horario_turno']==$resultado['horario_turno']){
          echo "<h4 class='mb-4'>Horario ya tomado. Vuelva a ingresar otro horario. </h4>"; 
          $fehor=TRUE;
        }
    } 
   
    if($fehor==FALSE){
      $mysqli->query($sql);
      echo "  <a href='../turnos2/'> <div class='col-md-12 order-md-1'>";
      echo    "<h4 class='mb-4'>Datos guardados correctamente</h4> </a>";
    }
    else{
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
 
         

$mysqli->close();
		
?>
<a href="javascript:history.go(-3)">	 <hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-4" type="submit">Volver</button>
        </div>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>


