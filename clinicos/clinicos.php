<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<body background="../img/medico2.jpg" style="background-size:cover";>

    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
    onclick=location.href='../clinicos/'; onKeyPress=location.href='../clinicos/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
  </h2></div>
  
  <div class="container">
 <div class="py-5 text-center">
  <div class="row">
	
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
</div>

    <div class="col-md-12 order-md-1">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta de Médicos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">


 
<?php 
   require "../conexion.php";

    $sql = "SELECT * from clinicos order by id_clinico";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $clinicos[] = $resultado;
    }
   

?>
<DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="nombre_clinico">Nombre</label>
            <input type="text" class="form-control" name="nombre_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre del médico
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido_clinico">Apellido</label>
            <input type="text" class="form-control" name="apellido_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido del médico
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="edad_clinico">Edad</label>
            <input type="text" class="form-control" name="edad_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la edad del médico
            </div>
          </div>
  

           <div class="col-md-6 mb-4">
            <label for="domicilio_clinico">Domicilio</label>
            <input type="text" class="form-control" name="domicilio_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el domicilio del médico
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="telefono_clinico">Teléfono</label>
            <input type="text" class="form-control" name="telefono_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el teléfono del médico
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="fech_nac_clinico">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fech_nac_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha de nacimiento del médico
            </div>
          </div>
       
        
        <div class="col-md-6 mb-4">
            <label for="email_clinico">Email</label>
            <input type="text" class="form-control" name="email_clinico" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el Email del médico
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
