<?php
require_once("Ejercicio1/clase_empleados.php");

?>

<div class= "container text-light bg-light py-5"> 
<form action="" method="post" class="container">
   <p> Nombre: <input type="text" name="nombre"> </p><br>
   
    <p> Sueldo: <input type="text" name="sueldo"></p><br>
    <input type="submit" value="Enviar valores" name="enviar">
</form>
<?php


$objeto = new Empleado($nombre, $sueldo);






?>
</div>
<?php
?>