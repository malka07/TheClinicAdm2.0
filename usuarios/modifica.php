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
							onclick=location.href='../usuarios/'; 
							onKeyPress=location.href='../usuarios/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_usuario=".$_GET['id_usuario'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_usuario=".$_GET['id_usuario'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos Del Usuario</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from usuarios where id_usuario = " . $_GET['id_usuario'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $usuarios[] = $resultado;
     }  
     
	
	echo "<input type='hidden' name='id_usuario' value=" .$_GET['id_usuario'] .">"; 
?>  
	  
        
          <div class="col-md-6 mb-4">
            <label for="nombre_usuario">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['nombre_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Usuario.
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="apellido_usuario">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['apellido_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Usuario.
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="edad_usuario">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['edad_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Usuario.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="dni_usuario">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['dni_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Usuario.
            </div>
          </div>
         
          <div class="col-md-6 mb-4">
            <label for="domicilio_usuario">Direccion:</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['domicilio_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Domicilio Del Usuario.
            </div>
          </div>

          
          <div class="col-md-6 mb-4">
            <label for="fecha_nac_usuario">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['fecha_nac_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Usuario.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="notas_usuario">Notas:</label>
            <input type="text" class="form-control" id="notas" name="notas_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['notas_usuario']."'" ?> required>
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