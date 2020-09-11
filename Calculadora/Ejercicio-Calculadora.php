
<?php 

$val1 = isset($_POST['val1']);
$val2 = isset($_POST['val2']);

if($_POST)
if (isset($_POST['val1'])) 
{
    $val1= $_POST["val1"];
}


if($_POST)
if (isset($_POST['val2'])) 
{
    $val2= $_POST["val2"];
}


Class Calculadora 
{

private $op;

public function suma($valor1, $valor2)  //variable local
{

 $this->a=$valor1;
 $this->b=$valor2;


    $this->op= $this->a + $this->b;
    echo "Suma: ".$this->op;
    echo "<br>";
}

public function resta($valor1, $valor2)  //variable local
{
  $this->a=$valor1;
 $this->b=$valor2;

  
    $this->op= $this->a - $this->b;
      echo "Resta: ".$this->op;
      echo "<br>";

}

public function multiplicacion($valor1, $valor2)  //variable local
{
    $this->a=$valor1;
    $this->b=$valor2;

 
      $this->op= $this->a * $this->b;
      echo "Multiplicación: ".$this->op;
      echo "<br>";
}

public function division($valor1, $valor2)  //variable local
{
    $this->a=$valor1;
    $this->b=$valor2;

  
    if ($this->b == 0) 
    {
        echo "Division"." No se puede divivir por 0";
        echo "<br>";
    }
    else 
    {
        $this->op= $this->a / $this->b;
        echo "División: ".$this->op;
        echo "<br>";   
       
    }

    
 
}
}



?>