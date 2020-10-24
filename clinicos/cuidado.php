<?php
	 require "../metodos.php";
 $_GET['id_clinico'] ;	
	echo "<input type='hidden' name='id_clinico' value=" .$_GET['id_clinico'] .">"; 

?>

<body background="../img/tek.jpg" style="background-size:cover";>
  <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver a Clínicos" 
			  onclick=location.href='../clinicos/'; onKeyPress=location.href='../clinicos/'; style='cursor:pointer';/>
        <label for="boton_atras"><h6>Atrás</h6></label>
    </h2></div>
    
    <div class="container">
	  <div class="py-5 text-center">
    
	  <div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  
  <div class="row">
</div>
	
  <div class="py-5 text-center"><h4>
	<p class="text-danger"><strong>IMPORTANTE!: Al eliminar el médico, se eliminarán 
	DEFINITIVAMENTE todos los datos relacionados a este ítem. 
	La eliminación de datos sólo podrá ser revertida con la recuperación del backup 
	correspondiente, en el caso que existiese.</p><strong></h4>

  </div>

 
<a href="borra.php?id_clinico=<?PHP echo $_GET['id_clinico']; ?>">	 
<hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-warning btn-lg btn-block col-sm-5" type="button">Si, deseo eliminar al Médico / servicio</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>


</html>












  