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
		onclick=location.href='../clinicos/'; onKeyPress=location.href='../clinicos/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Medicos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from clinicos order by id_clinico";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $clinicos[] = $resultado;
    }
   

?>

          <div class="col-md-6 mb-4">
            <label for="nombre_clinico">Nombre</label>
            <input type="text" class="form-control" name="nombre_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Medico.
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido_clinico">Apellido</label>
            <input type="text" class="form-control" name="apellido_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Medico.
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="edad_clinico">Edad</label>
            <input type="text" class="form-control" name="edad_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Medico.
            </div>
          </div>
  

           <div class="col-md-6 mb-4">
            <label for="domicilio_clinico">Domicilio</label>
            <input type="text" class="form-control" name="domicilio_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Domicilio Del Medico.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="telefono_clinico">Telefono</label>
            <input type="text" class="form-control" name="telefono_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Telefono Del Medico.
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="fech_nac_clinico">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fech_nac_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Medico.
            </div>
          </div>
       
        
        <div class="col-md-6 mb-4">
            <label for="email_clinico">Email</label>
            <input type="text" class="form-control" name="email_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Medico.
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
