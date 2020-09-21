<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Insumos</title>

</head>

<body>
<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../insumos/'; onKeyPress=location.href='../insumos/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from insumos order by id_insumo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $insumos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Insumos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	    <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Descripcion</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Precio</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Cantidad</font></i></td> 
    
	  </tr>


	<?php $long = count($insumos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['id_insumo'];?></font></i></td>
	  <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['fecha_insumo'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['descripcion_insumo'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['precio_insumo'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $insumos[$i]['cantidad_insumo'];?></font></i></td>
   
    

	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
