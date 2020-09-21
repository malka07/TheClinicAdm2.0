<?php
	 require "../metodos.php";
	 
 $_GET['id_insumo'] ;	
	echo "<input type='hidden' name='id_insumo' value=" .$_GET['id_insumo'] .">"; 

?>


  <body class="bg-light">
    <div class="container">
	  <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
							onclick=location.href='../insumos/'; 
							onKeyPress=location.href='../insumos/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>
	
  <div class="py-5 text-center">
	<p class="text-danger" >IMPORTANTE!: Al eliminar el Insumo ,se eliminarán 
	DEFINITIVAMENTE todos los datos relacionados a éste item. 
	La eliminación de datos solo podrá ser revertida con la recuperación del backup 
	correspondiente, en el caso que existiese.</p>

  </div>
 
<a href="borra.php?id_insumo=<?PHP echo $_GET['id_insumo']; ?>">	 
<hr class="mb-4">
        <button class="btn btn-warning btn-lg btn-block" type="button">Si,Deseo Eliminar El Insumo / servicio</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>


</html>












  