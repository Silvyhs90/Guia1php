<?php
    require_once("Calculadora/Ejercicio-Calculadora.php");
  ?>
   <div class="container text-light bg-light py-5">

   <form action="" method="post">
   <p> Valor 1: <input type="text" name="val1"></p><br>
    <p> Valor 2: <input type="text" name="val2"></p><br>
    <input type="submit" value="Enviar valores" name="enviar">
</form>

   <?php

$clase = new Calculadora();
$clase->suma($val1, $val2);
$clase->resta($val1, $val2);
$clase->multiplicacion($val1, $val2);
$clase->division($val1, $val2);





    
   ?>
 </div>
<?php
 ?>