<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>
<head>
  <meta http-equiv="Content-Language" content="es">
  <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Listado de Usuarios</title>
</head>

<body background="../img/usuarios2.jpg" style="background-size:cover";>
  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú"
      onclick=location.href='../usuarios/'; onKeyPress=location.href='../usuarios/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>

  <div class="container">
  <div class="py-5 text-center">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead"><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>
  <div class="row">
  </h2></div>

    <div class="col-sm-2 offset-md-1">
		<img border="0" src="../img/delete.png" width="48" height="48" title="Eliminar" 
            <?php echo " onclick=location.href='" 
												. "cuidado.php?id_usuario=".$_GET['id_usuario'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_usuario=".$_GET['id_usuario'] . "'"; ?>												
						style='cursor:pointer';/>
            <label for="boton_eliminar"><h6>Eliminar registro</h6></label>
		</h2></div>
    <div class="col-sm-2"></div>
  <div class="col-sm-2"><h2></h2></div>
</div>

    <div class="col-md-12 order-md-1">
    <DIV ALIGN=center>
      <h4 class="mb-4">Modificar datos del usuario</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">

	  
<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from usuarios where id_usuario = " . $_GET['id_usuario'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $usuarios[] = $resultado;
     }  
     
     
     $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }  
	
	echo "<input type='hidden' name='id_usuario' value=" .$_GET['id_usuario'] .">"; 
?>  
	  	<DIV ALIGN=center>        
          <div class="col-md-6 mb-4">
            <label for="nombre_usuario">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['nombre_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre del usuario
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="apellido_usuario">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['apellido_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido del usuario
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="edad_usuario">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['edad_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la edad del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="dni_usuario">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['dni_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el DNI del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_usuario">DNI:</label>
            <input type="text" class="form-control" id="dni" name="email_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['email_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el Email del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="contraseña_usuario">Contraseña:</label>
            <input type="text" class="form-control" id="dni" name="contraseña_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['contraseña_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la contraseña del usuario
            </div>
          </div>
         
          <div class="col-md-6 mb-4">
            <label for="domicilio_usuario">Direccion:</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['domicilio_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el domicilio del usuario
            </div>
          </div>

          
          <div class="col-md-6 mb-4">
            <label for="fecha_nac_usuario">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac_usuario" placeholder="" value=<?php echo "'".$usuarios[0]['fecha_nac_usuario']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha de nacimiento del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="notas_usuario">Notas:</label>
            <textarea class="form-control" id="notas" name="notas_usuario"><?php echo "".$usuarios[0]['notas_usuario']."" ?></textarea> 
            <div class="invalid-feedback">
              Faltó ingresar alguna nota
            </div>
          </div>

          <div class="col-md-6 mb-4">
           <label for="permiso_usuario">Permiso:</label>
           <select class="custom-select d-block w-100" name="permiso_usuario" required>
           <?php 
				     $long = count($permisos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$permisos[$i]['id_permiso'].",".$permisos[$i]['nombre_permiso'] .">";				
                 echo $permisos[$i]['nombre_permiso'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó seleccionar un permiso
            </div>
          </div>  

		</div>
        <hr class="mb-4">
        <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Modificar</button>
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
