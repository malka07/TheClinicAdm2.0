﻿<?php
	 require "../metodos.php";
 $_GET['id_pago'] ;	
	echo "<input type='hidden' name='id_pago' value=" .$_GET['id_pago'] .">"; 

?>

<body background="../img/tek.jpg" style="background-size:cover";>
  <div class="col-sm-2"><h2>
	<img border="0" src="../img/atras.png" width="42" height="42" title="Volver a Administración" 
	onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	<label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>

	<div class="container">
	  <div class="py-5 text-center">
	
	  <div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <hr>
  <div class="row">
</div>	  

	
  <div class="py-5 text-center"><h4>
	<p class="text-danger"><strong>IMPORTANTE!: Al eliminar el pago, se eliminarán 
	DEFINITIVAMENTE todos los datos relacionados a éste item. 
	La eliminación de datos sólo podrá ser revertida con la recuperación del backup 
	correspondiente, en el caso que existiese.</p><strong></h4>
  </div>


<a href="borra2.php?id_pago=<?PHP echo $_GET['id_pago']; ?>">	 
<hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-warning btn-lg btn-block col-sm-5" type="button">Si,Deseo Eliminar El Pago / servicio</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>
</div>

</html>












  