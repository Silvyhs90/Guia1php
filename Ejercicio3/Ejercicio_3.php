<?php
require_once("Ejercicio3/clase_factura.php");

?>

<div class= "container text-light bg-light py-5"> 
    <form action="" method="post" class="container">
   <p> Nombre: <input type="text" name="nombre"> </p><br>
   <p> Apellido: <input type="text" name="apellido"> </p><br>
    <p> Importe Neto: <input type="text" name="importeneto"></p><br>
    <p> Estado (Pendiente o Pagada): <input type="text" name="estado"></p><br>
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php


$Fact1 = new Factura($nombre,$apellido);
$Fact1->Clientedatos();
$Fact1->Imprime($importeneto,$estado);


?>
</div>
<?php
?>