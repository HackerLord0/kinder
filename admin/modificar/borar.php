<html>
    <body background="bg.png">

       


<div class="container home">    
    <center><h1>Eliminar/Añadir usuarios</h1>  </center>    
    <center><h2>Lista de Personal.</h2></center>
    
    <center><table border="1" id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Privilegio</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>   
            </tr>
        </thead>
        <tbody>
            <?php 
session_start();

include("conexion.php");

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
} 

    $sql="SELECT * FROM administradores ";  
    $resultado=mysqli_query($conn,$sql) or die ('Error en el query database');

            
            
         while($fila=$resultado->fetch_array()){   
?>
 <tr>
             
                  <td> <?php echo $fila['id'];?></td>
                <td> <?php echo  $fila['tipouser'];?></td>
               <td> <?php echo  $fila['usuario'];?></td>
               <td> <?php  echo $fila['nombre'];?> </td>
               <td> <?php echo $fila['apellidos'];?> </td>
                <td> <?php echo $fila['email'];?> </td>
            
               </tr> 
            <?php
                                                }
            ?>
        </tbody>
    </table> </center>   
</div> 
<br>
        <br>
 
        
        <center><h2>Eliminar Personal.
        (Esta accion no podra ser revertida.)
        </h2></center>
        <div align="center">
    <table border="0" width="600" style="font-family: Verdana; font-size: 8pt" id="table1">
        <tr>
            <td colspan="2"><h3 align="center">Borrar Usuario por ID.
                <p>Maximo 3 por consulta.</p></h3></td>
        </tr>
        
        <form method="POST" action="borrar.php">
        <tr>
            <td width="50%">&nbsp;</td>
            <td width="50%">&nbsp;</td>
        </tr>
        <tr>
            <td width="50%">
            <p align="center"><b>ID del Usuario a eliminar: </b></td>
            <td width="50%">
            <p align="center"><input type="text" name="id" size="20"></td>
        </tr>
            <tr>
            <td width="50%">
            <p align="center"><b>ID del Usuario a eliminar: </b></td>
            <td width="50%">
            <p align="center"><input type="text" name="id" size="20"></td>
        </tr>
            <tr>
            <td width="50%">
            <p align="center"><b>ID del Usuario a eliminar: </b></td>
            <td width="50%">
            <p align="center"><input type="text" name="id" size="20"></td>
        </tr>
        <tr>
            <td width="50%">&nbsp;</td>
            <td width="50%">&nbsp;</td>
        </tr>
        <tr>
            <td width="100%" colspan="2">
            <p align="center">
            <input type="submit" value="Eliminar" name="B1"></td>
        </tr>
        </form>
        
    </table>
            <h2><a href="../paneld.php"><img src="../volver.png"></a></h2>
</div>
        
         </body>
</html>