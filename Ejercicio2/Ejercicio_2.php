<?php
require_once("Ejercicio2/clase_cabecera.php");

?>

<div class= "container text-light bg-light py-5"> 
<form action="" method="post" class="container-fluid">
   <p> Título: <input type="text" name="titulo"> </p><br>
    <p> Alineación: <input type="text" name="alineacion"></p><br>
    <p> Color: <input type="text" name="color"></p><br>
    <p> Color Fondo: <input type="text" name="colorfondo"></p><br>
    <input type="submit" value="Enviar" name="enviar">
</form>
<?php


$objeto = new CabeceraPagina($titulo);
$objeto->Alinear($alineacion);
$objeto->Color($color,$colorfondo);







?>
</div>
<?php
?>