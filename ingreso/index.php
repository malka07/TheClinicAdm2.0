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
		onclick=location.href='../'; onKeyPress=location.href='../'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Usuarios</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }
   
    $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }

?>

          <div class="col-md-6 mb-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Usuario.
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Usuario.
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="edad">Edad</label>
            <input type="text" class="form-control" name="edad_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Usuario.
            </div>
          </div>
  
          <div class="col-md-6 mb-4">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Usuario.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_usuario">Email</label>
            <input type="text" class="form-control" name="email_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Usuario.
            </div>
          </div>

          <div class="col-md-6 mb-4">
          <label for="contraseña_usuario">Contraseña</label>
            <input type="text" class="form-control" name="contraseña_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Contraseña Del Usuario.
            </div>
          </div>

           <div class="col-md-6 mb-4">
            <label for="domicilio">Direccion</label>
            <input type="text" class="form-control" name="domicilio_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Direccion Del Usuario.
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="fecha_nac">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Integrante.
            </div>
          </div>
       
        
        <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="notas_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Alguna Nota Adicional.
            </div>
          </div>
        
          <div class="col-md-6 mb-4">
           
            <input type="hidden" class="form-control" name="permiso_usuario" placeholder="" value="2" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Permiso Del Usuario.
            </div>
          </div>

  
     

</div>
    </div>
     <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
      </form>
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