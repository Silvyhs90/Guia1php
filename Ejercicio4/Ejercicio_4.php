<?php
require_once("Ejercicio4/clase_triangulo.php");
?>


<div class= "container text-light bg-light py-5"> 
   <h3> Calcular tipo Triangulo </h3>

   <form action="" method="post" class="container">
   <p> Ingrese lado 1: <input type="text" name="lado1"> </p><br>
   <p> Ingrese lado 2: <input type="text" name="lado2"> </p><br>
   <p> Ingrese lado 3: <input type="text" name="lado3"></p><br>
    <input type="submit" value="Enviar" name="enviar">
</form>


<?php


$triangulo = new Triangulo($lado1,$lado2,$lado3);
$triangulo->Tipo_tri();



?>
</div>
<?php
?>