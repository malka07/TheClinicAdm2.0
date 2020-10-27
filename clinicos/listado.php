<html>
<?php 
    require "../metodos.php";
?>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Medicos</title>

</head>
<body background="../img/medico2.jpg" style="background-size:cover";>

	<div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver a médicos" 
    onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>
	<div class="col-md-12 order-md-1"><br/>
	<div class="col-md-12 order-md-1"><br/>


<?php 
include "../conexion.php";
$sql = "SELECT * from clinicos order by id_clinico";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $clinicos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Medicos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	    <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Apellido</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Edad</font></i></td> 
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Domicilio</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Teléfono</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha De Nacimiento</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Email</font></i></td>
	  </tr>


	<?php $long = count($clinicos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['id_clinico'];?></font></i></td>
	  <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['nombre_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['apellido_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['edad_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['domicilio_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['telefono_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['fech_nac_clinico'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['email_clinico'];?></font></i></td>

	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
