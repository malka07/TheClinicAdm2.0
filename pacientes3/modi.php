<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




$sql = "UPDATE pacientes SET nombre_paciente='" . ($_POST['nombre_paciente']) 				."'," .
    "apellido_paciente='" 		. $_POST['apellido_paciente']									."'," .			
    "dni_paciente='" 		. $_POST['dni_paciente']									."'," .			
    "domicilio_paciente='" 		. $_POST['domicilio_paciente']									."'," .			
    "telefono_paciente='" 		. $_POST['telefono_paciente']									."'," .			
    "edad_paciente='" 		. $_POST['edad_paciente']									."'," .			
    "provincia_paciente='" 		. $_POST['provincia_paciente']									."'," .			
    "barrio_paciente='" 		. $_POST['barrio_paciente']									."'," .			
    "fech_nac_paciente='" 		. $_POST['fech_nac_paciente']									."'," .			
    "historia_paciente='" 		. $_POST['historia_paciente']									."'," .			
    "obra_soc_paciente='" 		. $_POST['obra_soc_paciente']									."'," .			
    "medico_paciente='" 		. $_POST['medico_paciente']									."'," .			
		"email_paciente='" 	. $_POST['email_paciente']								."'" .			
		" where id_paciente =" . ($_POST['id_paciente']) ;							
            
 
?>								

<body background="../img/turnos2.jpg" style="background-size:cover";>
<div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <p class="lead"><h4><strong>Modificación de Historiales y Servicios / Profesiones</strong></h4></p>
  </div>

 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../pacientes/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="javascript:history.go(-3)">	 <hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button>
        </div>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>




