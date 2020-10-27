<?php
	  require "../metodos.php";
 $_GET['id_turno'] ;	
	  echo "<input type='hidden' name='id_turno' value=" .$_GET['id_turno'] .">"; 

?>

<body background="../img/tek.jpg" style="background-size:cover";>
  <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>

	<div class="container">
	  <div class="py-5 text-center">
 
	  <div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h3>JDL S.A</h3></div>
  <hr>
  <div class="row">
</div>
	
  <div class="py-5 text-center"><h4>
	<p class="text-danger"><strong>IMPORTANTE!: Al eliminar el turno, se eliminarán 
	DEFINITIVAMENTE todos los datos relacionados a este ítem. 
	La eliminación de datos sólo podrá ser revertida con la recuperación del backup 
	correspondiente, en el caso que existiese.</p><strong></h4>
  </div>
 
<a href="borra.php?id_turno=<?PHP echo $_GET['id_turno']; ?>">	 
<hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-warning btn-lg btn-block col-sm-5" type="button">Si, deseo eliminar el Turno / servicio</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>


</html>












  