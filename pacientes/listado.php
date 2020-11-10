<html>
<?php 
    require "../metodos.php";
?>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Pacientes</title>

</head>
<body background="../img/pacientes2.jpg" style="background-size:cover";>

  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
    onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>
	<div class="col-md-12 order-md-1"><br/>
	<div class="col-md-12 order-md-1"><br/>

<?php 
include "../conexion.php";
$sql = "SELECT * from pacientes order by id_paciente";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pacientes[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Pacientes</u></font></i></p>
<div class="row">
    <div class="col-sm-1 offset-md-2"><h2>
		<img border="0" src="../img/disq.png" width="48" height="48" title="Guardar" 
		onclick=location.href='excel.php'    onKeyPress=location.href="excel.php"  style='cursor:pointer';/>
		<label for="boton_guardar"><h6>Guardar </h6></label>
	</h2></div>
    <div class="col-md-12 order-md-1"><br/>
<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	    <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Apellido</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >DNI</font></i></td> 
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Domicilio</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Teléfono</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Edad</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Provincia</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Barrio</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha De Nacimiento</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Historia Clínica</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Obra Social</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Médico</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Email</font></i></td>
	  </tr>


	<?php $long = count($pacientes);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['id_paciente'];?></font></i></td>
	  <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['nombre_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['apellido_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['dni_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['domicilio_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['telefono_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['edad_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['provincia_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['barrio_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['fech_nac_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['historia_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['obra_soc_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['medico_paciente'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $pacientes[$i]['email_paciente'];?></font></i></td>

	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
