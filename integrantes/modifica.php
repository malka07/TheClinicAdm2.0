<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
							onclick=location.href='../integrantes/'; 
							onKeyPress=location.href='../integrantes/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_int=".$_GET['id_int'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_int=".$_GET['id_int'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos Del Integrante</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from integrantes where id_int = " . $_GET['id_int'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $integrantes[] = $resultado;
     }  
     
	
	echo "<input type='hidden' name='id_int' value=" .$_GET['id_int'] .">"; 
?>  
	  
        
          <div class="col-md-6 mb-4">
            <label for="nom_int">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nom_int" placeholder="" value=<?php echo "'".$integrantes[0]['nom_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Integrante.
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="ape_int">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="ape_int" placeholder="" value=<?php echo "'".$integrantes[0]['ape_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Integrante.
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="edad_int">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_int" placeholder="" value=<?php echo "'".$integrantes[0]['edad_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Integrante.
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="direc_int">Direccion:</label>
            <input type="text" class="form-control" id="direccion" name="direc_int" placeholder="" value=<?php echo "'".$integrantes[0]['direc_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Direccion Del Integrante.
            </div>
          </div>

          
          <div class="col-md-6 mb-4">
            <label for="fech_int">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha" name="fech_int" placeholder="" value=<?php echo "'".$integrantes[0]['fech_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Integrante.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="nota_int">Notas:</label>
            <input type="text" class="form-control" id="nota" name="nota_int" placeholder="" value=<?php echo "'".$integrantes[0]['nota_int']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Alguna Nota.
            </div>
          </div>
		</div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Modificar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
