<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Pagos</title>

</head>
<body background="../img/admin2.jpg">
<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	</h2></div>

	<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/save.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from pagos order by id_pago";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pagos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Pagos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha Del Pago</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Descripcion</font></i></td>	  
	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Liquidacion</font></i></td>	    
	  </tr>


	<?php $long = count($recibos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pagos[$i]['id_pago'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pagos[$i]['fecha_pago'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pagos[$i]['descripcion_pago'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pagos[$i]['cantidad_pago'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pagos[$i]['liqui_pago'];?></font></i></td>	
	
  </tr>

  <?php  } ?>
  </table>
  </center>

  
</div>

</body>

</html>
