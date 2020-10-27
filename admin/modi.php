<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE recibos SET fecha_recibo='" . ($_POST['fecha_recibo']) 				."'," .
    "descripcion_recibo='" 		. $_POST['descripcion_recibo']									."'," .			
    "clinico_recibo='" 		. $_POST['clinico_recibo']									."'," .		
    "liqui_recibo='" 		. $_POST['liqui_recibo']									."'" .				
		" where id_recibo =" . ($_POST['id_recibo']) ;						
								
 
?>								

<body background="../img/admin2.jpg" style="background-size:cover";>
    <div class="container">
  <div class="py-5 text-center">
    <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="62" height="62">
    <p class="lead"><h4><strong>Modificación de Recibos y Servicios / Profesiones</strong></h4></p>
  </div>

 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../admin/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

  <a href="javascript:history.go(-1)">	<hr class="mb-4">
    <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button>
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

</div>


