<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>JDL S.A - Materiales</title>

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
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Ingreso De Pacientes y Servicios / Profesiones para la App.</p>
  </div>

    
      
	  
<?php
 require "../conexion.php";
 $sql = "insert into pacientes(
  nombre_paciente,apellido_paciente,dni_paciente,domicilio_paciente,telefono_paciente,edad_paciente,provincia_paciente,barrio_paciente,fech_nac_paciente,historia_paciente,obra_soc_paciente,medico_paciente,email_paciente)
  values" 
  . "('".$_POST['nombre_paciente'] 	. "'," 
  . "'" .$_POST['apellido_paciente'] 	. "',"
  . "'" .$_POST['dni_paciente'] 	. "',"	
  . "'" .$_POST['domicilio_paciente'] 	. "',"
  . "'" .$_POST['telefono_paciente'] 	. "',"
  . "'" .$_POST['edad_paciente'] 	. "',"
  . "'" .$_POST['provincia_paciente'] 	. "',"
  . "'" .$_POST['barrio_paciente'] 	. "',"
  . "'" .$_POST['fech_nac_paciente'] 	. "',"
  . "'" .$_POST['historia_paciente'] 	. "',"
  . "'" .$_POST['obra_soc_paciente'] 	. "',"
  . "'" .$_POST['medico_paciente'] 	. "',"
  . "'" .$_POST['email_paciente'] 	. "' "	
  . ")";
  
// echo $sql;

if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../pacientes/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos guardados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
		
?>
<a href="../pacientes">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - YO Lugano</p>
 <!--   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>


