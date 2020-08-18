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
		onclick=location.href='../integrantes/'; onKeyPress=location.href='../integrantes/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Integrantes</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from integrantes order by id_int";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $integrantes[] = $resultado;
    }
   

?>

          <div class="col-md-6 mb-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nom_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Integrante.
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="ape_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Integrante.
            </div>
          </div>
      
        
        <div class="col-md-6 mb-4">
            <label for="edad">Edad</label>
            <input type="text" class="form-control" name="edad_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Integrante.
            </div>
          </div>
  

           <div class="col-md-6 mb-4">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direc_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Direccion Del Integrante.
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="fecha">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fech_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Integrante.
            </div>
          </div>
       
        
        <div class="col-md-6 mb-4">
            <label for="notas">Notas</label>
            <input type="text" class="form-control" name="nota_int" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Nota Adicional.
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
