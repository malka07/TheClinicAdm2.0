<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Recibos</title>

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
		onclick=location.href='../archivo/'; onKeyPress=location.href='../archivo/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from recibos order by id_recibo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $recibos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Recibos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha Del Recibo</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Descripcion</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Medico</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Liquidacion</font></i></td>	    
	  </tr>


	<?php $long = count($recibos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['id_recibo'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['fecha_recibo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['descripcion_recibo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['clinico_recibo'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['liqui_recibo'];?></font></i></td>	
	
  </tr>

  <?php  } ?>
  </table>
  </center>

  
</div>

</body>

</html>
