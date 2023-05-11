======== borrar.php
<html>

<head>
<title>Registro eliminado.</title>
<meta name='robot' content='noindex, nofollow'>
    </head>

<body>

<?php
// Actualizamos en funcion del id que recibimos

$id = $_POST['id'];

include('conexion.php');  

$query = "delete from administradores where id = '$id'"; 
$result = mysqli_query($query); 

 

echo "
<p>El registro ha sido eliminado con exito.</p>

<p><a href='javascript:history.go(-2)'>VOLVER ATRÁS</a></p>
";
?>

</body>

</html> 