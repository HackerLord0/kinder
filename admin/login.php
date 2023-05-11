<link rel="stylesheet" href="estilo.css">
<body>
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
	
	
	//header("Location: login.html")
	echo"<script>alert('login exitoso');</script>";



	echo "Bienvenido usuario:<br> " .$usuario."<br><br>";
	echo "<br><a href='index.html'>Pagina principal</a><br>";
	echo "<br><a href='modificarusuario.html'>modificar datos</a>";

	

}
else if ($nr == 0) 
{
	
	//header("Location: login.html");
	echo"<script>alert('Error, Usuario o contraseña incorrectos');</script>";
	echo "<center><br><a href='admin.html'>Vuelve a intentarlo</a></center>";
	
	
	


}
?>
</body>