<body background="bgregistro.jpeg">
<?php
session_start();

include("conexion.php");



if (isset($_POST['tipouser']) && !empty($_POST['tipouser']) &&
    isset($_POST['usuario']) && !empty($_POST['usuario']) &&
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['cpass']) && !empty($_POST['cpass']) &&
isset($_POST['email']) && !empty($_POST['email']))
{
	
$conn = mysqli_connect($servername, $username, $password, $database);
	
	mysqli_query($conn,"INSERT INTO administradores(tipouser,usuario,nombre,apellidos,pass,cpass,email) VALUES ('$_POST[tipouser]','$_POST[usuario]','$_POST[nombre]','$_POST[apellidos]','$_POST[pass]','$_POST[cpass]','$_POST[email]')");
    echo "<br><br><br><br><br><br><br><br><br>";
echo "<center><h1>¡Registro exitoso!</h1></center>";
}else{
	echo "problemas al ingresar los datos";
	mysqli_close($conn);
}

?>
<br>
<center><p><h2>Inicia sesion a continuacion.</h2>

<form action="../posadmin/indexa.html">
        <input type="submit" value="Acceder" />
</form></center></body>