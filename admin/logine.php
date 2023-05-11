
<body background="bggg.jpeg">
<?php

session_start();

include("conexion.php");

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM administradores WHERE usuario = '".$usuario."' and pass = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	
	
	//header("Location: logine.html")
	echo"<script>alert('login exitoso');</script>";



	echo  "<center><h1>Panel de administracion para Encargados.<br></h1>";
    echo "<center><h1>Iniciaste sesion como:</h1><h2>  $usuario    <br><br></h2></center>";
    echo "<br><a href='panele.php'>Mensajeria</a>";
	echo "<br><a href='../index.html'>Cerrar sesion.</a><br>";
	

	

}
else if ($nr == 0) 
{
	
	//header("Location: logine.html");
	echo"<script>alert('Error, Usuario o contraseña incorrectos');</script>";
	echo "<center><br><a href='admin.html'>Vuelve a intentarlo</a></center>";
	
	
	


}
?>
</body>