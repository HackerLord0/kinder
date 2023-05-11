

<body background="w.jpg">
<?php

session_start();

include("conexion.php");

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["Nombre"];


$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE Nombre = '".$Nombre."');
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	
	
	



	
	
}

?>
    
</body>
