<html>
    <body background="bgg.jpg">

       


<div class="container home">    
    <center><h1>Correspondencia.</h1></center>      
     <center><table border="1" id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Mensaje</th>   
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

    $sql="SELECT * FROM contacto ";  
    $resultado=mysqli_query($conn,$sql) or die ('Error en el query database');

            
            
         while($fila=$resultado->fetch_array()){   
?>
 <tr>
             
                  <td> <?php echo $fila['id'];?></td>
               <td> <?php echo  $fila['nombre'];?></td>
               <td> <?php  echo $fila['email'];?> </td>
               <td> <?php echo $fila['mensaje'];?> </td>
            
               </tr> 
            <?php
                                                }
            ?>
        </tbody>
    </table> </center>   
</div> 
 
        <center>
        <h2>Eliminar mensajes leidos.<br>
        (estos mensjaes NO podran ser recuperados)
        </h2></center>
        <div align="center">
    <table border="0" width="600" style="font-family: Verdana; font-size: 8pt" id="table1">
        <tr>
            <td colspan="2"><h3 align="center">Borrar mensaje por ID.</h3></td>
        </tr>
        <form method="POST" action="borrar.php">
        <tr>
            <td width="50%">&nbsp;</td>
            <td width="50%">&nbsp;</td>
        </tr>
        <tr>
            <td width="50%">
            <p align="center"><b>ID del mensaje a eliminar:</b></td><br>
            <td width="50%">
            <input type="text" name="id" size="20"></td>
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
</div>
<center><h2>
 <p>Si deseas contestar un mensaje seras redireccionado a alguno de los proovedores siguientes:<br><br></p>
	<br><a href='https://mail.google.com'>Gmail</a><br>
        <br><a href='https://outlook.live.com'>Outlook</a><br>
        <br><a href='modificar/borar.php'>Administrar usuarios.</a><br>
        <br><a href='../posadmin/indexa.html'>Cerrar sesion.</a>
       </h2></center>
        
         </body>
</html>