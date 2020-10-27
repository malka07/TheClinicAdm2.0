<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<body background="../img/usuarios2.jpg" style="background-size:cover";>

<div class="col-sm-2"><h2>
<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
    onclick=location.href='../usuarios/'; onKeyPress=location.href='../usuarios/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
</h2></div>

  <div class="container">
 <div class="py-5 text-center">
  <div class="row">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
</div>

<div class="col-md-12 order-md-1">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta de Usuarios</h4>
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
<DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre del usuario
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido del usuario
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="edad">Edad</label>
            <input type="text" class="form-control" name="edad_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la edad del usuario
            </div>
          </div>
  
          <div class="col-md-6 mb-4">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el DNI del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_usuario">Email</label>
            <input type="text" class="form-control" name="email_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el Email del usuario
            </div>
          </div>

          <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="contraseña_usuario" placeholder="" value="0" required>
            <div class="invalid-feedback">
              Faltó ingresar la contraseña del usuario
            </div>
          </div>

           <div class="col-md-6 mb-4">
            <label for="domicilio">Dirección</label>
            <input type="text" class="form-control" name="domicilio_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la dirección del usuario
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="fecha_nac">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha de nacimiento del usuario
            </div>
          </div>
       
        
        <div class="col-md-6 mb-4">
            <label for="notas">Notas</label>
            <textarea class="form-control" name="notas_usuario> placeholder="" value="" required></textarea>
            <div class="invalid-feedback">
              Faltó ingresar alguna nota adicional
            </div>
          </div>
        
          <div class="col-md-6 mb-4">
           <label for="permiso_usuario">Permiso</label>
           <select class="custom-select d-block w-100" name="id_permiso" required>
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
    </div>
     <hr class="mb-4">
     <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Guardar</button>
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
