<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Recibos</title>

</head>

<body>
<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from recibos order by id_rec";
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
      
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha Recibo</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre Integrante</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Descripcion</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >liquidacion $</font></i></td>	    
	  </tr>


	<?php $long = count($recibos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['fech_rec'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['nom_rec'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['desc_rec'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['liqui_rec'];?></font></i></td>	
	
	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
