<?php
	require "../conexion.php";
	require "../metodos.php";

$sql = "delete from clinicos where id_clinico=" . $_GET['id_clinico'] ;		
?>

<body background="../img/medico2.jpg" style="background-size:cover";>
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
    <p class="lead"><h4><strong>Eliminar Médico / Servicios</strong></h4></p>
  </div>


 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../clinicos/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Medico Eliminado Correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="javascript:history.go(-4)">	 <hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button></div>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



