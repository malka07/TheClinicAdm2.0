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
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Usuario</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from pacientes order by id_paciente";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pacientes[] = $resultado;
    }
   
    $sql = "SELECT * from logins order by id_login";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $logins[] = $resultado;
      }
     

?>

          <div class="col-md-6 mb-4">
            <label for="nombre_paciente">Nombre</label>
            <input type="text" class="form-control" name="nombre_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Paciente.
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido_paciente">Apellido</label>
            <input type="text" class="form-control" name="apellido_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="dni_paciente">D.N.I</label>
            <input type="text" class="form-control" name="dni_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Paciente.
            </div>
          </div> 
        
          <div class="col-md-6 mb-4">
            <label for="domicilio_paciente">Direccion</label>
            <input type="text" class="form-control" name="domicilio_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Domicilio Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="telefono_paciente">Telefono</label>
            <input type="text" class="form-control" name="telefono_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Telefono Del Paciente.
            </div>
          </div>
        
        <div class="col-md-6 mb-4">
            <label for="edad_paciente">Edad</label>
            <input type="text" class="form-control" name="edad_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Paciente.
            </div>
          </div>
  
          <div class="col-md-6 mb-4">
            <label for="provincia_paciente">Provincia</label>
            <input type="text" class="form-control" name="provincia_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Provincia Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="barrio_paciente">Barrio</label>
            <input type="text" class="form-control" name="barrio_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Barrio Del Paciente.
            </div>
          </div>
           
          <div class="col-md-6 mb-4">
            <label for="fech_nac_paciente">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fech_nac_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Paciente.
            </div>
          </div>
       
          <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="historia_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Numero De Historial.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="obra_soc_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Obra Social Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="medico_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Un Medico Del Paciente.
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="email_paciente">Email</label>
            <input type="text" class="form-control" name="email_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Paciente.
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
