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
		onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Pagos</h4>
      <form class="needs-validation" novalidate action="grabar2.php" method="post">
	  
<?php 
   require "../conexion.php";

    $sql = "SELECT * from pagos order by id_pago";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pagos[] = $resultado;
    }

    $sql = "SELECT * from insumos order by id_insumo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $insumos[] = $resultado;
    }
   

?>

          <div class="col-md-6 mb-4">
            <label for="fecha_pago">Fecha</label>
            <input type="date" class="form-control" name="fecha_pago" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Pago.
            </div>
          </div>
        

        <div class="col-md-6 mb-4">
           <label for="descripcion">Descripcion</label>
           <select class="custom-select d-block w-100" name="descripcion_pago" required>
           <?php 
				     $long = count($insumos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$insumos[$i]['descripcion_insumo'] ."," .$clinicos[$i]['cantidad_insumo'] .">";
                 echo $insumos[$i]['descripcion_insumo'];
               
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Insumo.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="cantidad_insumo">Cantidad</label>
            <input type="text" class="form-control" name="cantidad_insumo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Cantidad.
            </div>
          </div>
     

          <div class="col-md-6 mb-4">
            <label for="liqui_pago">Liquidacion</label>
            <input type="text" class="form-control" name="liqui_pago" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La liquidacion.
            </div>
          </div>
     

     
          <p align="center"> <font face="Verdana" size="5" color="#666666"><u>Insumos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Cantidad</font></i></td>	  
	  

	  </tr>


	<?php $long = count($insumos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['id_insumo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['descripcion_insumo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['cantidad_insumo'];?></font></i></td>
	
	</tr>

  <?php  } ?>
  </table>
  </center>

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
