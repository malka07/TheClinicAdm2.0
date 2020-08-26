<?php
   require "metodos.php";
?>  
  
  
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead"> Servicios Medicos.</p>
  </div>


<?php
   require "conexion.php";
   $usuario_login = $_POST['usuario_login'];
   $contraseña_login = $_POST['contraseña_login'];


  // Crear conexión con la base de datos.
 $conn = new mysqli("sql205.byethost31.com","b31_26518949","garfio1234","b31_26518949_asignaciones");
 
 // Validar la conexión de base de datos.
 if ($conn ->connect_error) {
   die("Connection failed: " . $conn ->connect_error);
 }else{
   echo'Conexion A Base Exitosa!!! ';
 }
 

 // Consulta segura para evitar inyecciones SQL.
 //$sql = sprintf("SELECT * FROM logins WHERE usuario_login='%s' AND contraseña_login='%s'", mysql_real_escape_string($usuario_login), mysql_real_escape_string($contraseña_login));
 //$sql = "SELECT * FROM logins WHERE usuario_login=" .$usuario_login "AND contraseña_login=" .$contraseña_login "";
 //$sql = "SELECT * FROM logins WHERE usuario_login=" .$_POST['usuario_login'] "AND" "usuario_login=" .$_POST['usuario_login']"";
 $consulta = mysqli_query("SELECT usuario_login, contraseña_login FROM logins WHERE usuario_login = '$usuario_login' AND contraseña_login = '$contraseña_login'"); 
 //$resultado = $conn->query($sql);
 //$datos = mysql_fetch_array( $resultado ); 
 $result=mysql_num_rows($consulta);
 // Verificando si el usuario existe en la base de datos.
 
//if(($usuario_login == $resultado['usuario_login']) && $contraseña_login == $resultado['contraseña_login']){
//if ($conn->query($sql) === TRUE){ 
//if($resultado){
 // if($usuario_login = mysqli_fetch_assoc($consulta)){ 
  if ($result==1){  
   header("HTTP/1.1 302 Moved Temporarily"); 
   header("INGRESO SATISFACTORIO"); 
   header("Location: ../panel/"); 
 }else{
 echo 'El Usuario O Contraseña Es Incorrecto, <a href="index.php">Vuelva A Intenarlo</a>.<br/>';
 }

 

?>

<a href="../">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



