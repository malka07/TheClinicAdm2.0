<?php
	require "../conexion.php";
	require "../metodos.php";

$sql = "delete from tareas where id_tar=" . $_GET['id_tar'] ;		
?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Eliminar Tareas / Servicios.</p>
  </div>
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../tareas/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Tarea Eliminada Correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../tareas">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



