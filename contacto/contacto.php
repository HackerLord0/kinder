<body background="bg34.jpeg">
<?php
session_start();

include("conexion.php");



if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
	
$conn = mysqli_connect($servername, $username, $password, $database);
	
	mysqli_query($conn,"INSERT INTO contacto(nombre,email,mensaje) VALUES ('$_POST[nombre]','$_POST[email]','$_POST[mensaje]')");
 echo "<br><br><br><br><br><br><br><br><br>";
echo "<center><h1>¡Mensaje enviado!</h1></center>";
}else{
	echo "problemas al ingresar los datos";
	mysqli_close($conn);
}

?>
<br>
<center><p><h2>Muy pronto recibiras un mensaje a tu correo electronico.
    Gracias por conmtactarnos!</h2>

<form action="../index.html">
        <input type="submit" value="Inicio" />
</form></center></body>