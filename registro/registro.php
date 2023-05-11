<link rel="stylesheet" type="text/css" href="style.css">
<?php
session_start();

include("conexion.php");



if (isset($_POST['usuario']) && !empty($_POST['usuario']) &&
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['cpass']) && !empty($_POST['cpass']) &&
isset($_POST['email']) && !empty($_POST['email']))
{
	
$conn = mysqli_connect($servername, $username, $password, $database);
	
	mysqli_query($conn,"INSERT INTO administradores(usuario,nombre,apellidos,pass,cpass,email) VALUES ('$_POST[usuario]','$_POST[nombre]','$_POST[apellidos]','$_POST[pass]','$_POST[cpass]','$_POST[email]')");
echo "Registro exitoso!";
}else{
	echo "problemas al ingresar los datos";
	mysqli_close($conn);
}
echo "<br>";
?>
<br>
<li><a href="../index.html">Página principal</a>