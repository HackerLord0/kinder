
<html>

<head>
<title>Registro eliminado.</title>
<meta name='robot' content='noindex, nofollow'>
    </head>

<body>

<?php
// Actualizamos en funcion del id que recibimos



include('conexion.php');  
    
    $id = $_POST['id'];
    
    $conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$query = mysqli_query($conn, "DELETE FROM contacto where id = '$id'"); 
 

 

echo "
<p>El registro ha sido eliminado con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
    
?>

</body>

</html> 