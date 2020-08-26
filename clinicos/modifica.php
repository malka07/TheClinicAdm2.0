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
							onclick=location.href='../clinicos/'; 
							onKeyPress=location.href='../clinicos/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_clinico=".$_GET['id_clinico'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_clinico=".$_GET['id_clinico'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos Del Medico</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from clinicos where id_clinico = " . $_GET['id_clinico'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $clinicos[] = $resultado;
     }  
     
	
	echo "<input type='hidden' name='id_clinico' value=" .$_GET['id_clinico'] .">"; 
?>  
	  
        
          <div class="col-md-6 mb-4">
            <label for="nombre_clinico">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['nombre_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Medico.
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="apellido_clinico">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['apellido_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Medico.
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="edad_clinico">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['edad_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Medico.
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="domicilio_clinico">Domicilio:</label>
            <input type="text" class="form-control" id="direccion" name="domicilio_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['domicilio_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Domicilio Del Medico.
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="telefono_clinico">Domicilio:</label>
            <input type="text" class="form-control" id="direccion" name="telefono_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['telefono_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Telefono Del Medico.
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="fech_nac_clinico">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha" name="fech_nac_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['fech_nac_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Medico.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_clinico">Notas:</label>
            <input type="text" class="form-control" id="email" name="email_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['email_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Clinico.
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