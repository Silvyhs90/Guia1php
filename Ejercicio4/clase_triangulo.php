<?php

$lado1 = isset($_POST['lado1']);
$lado2 = isset($_POST['lado2']);
$lado3 = isset($_POST['lado3']);


if($_POST)
if (isset($_POST['lado1'])) 
{
    $lado1= $_POST["lado1"];
}

if($_POST)
if (isset($_POST['lado2'])) 
{
    $lado2 = $_POST["lado2"];
}

if($_POST)
if (isset($_POST['lado3'])) 
{
    $lado3 = $_POST["lado3"];
}



class Triangulo
{

    private $Saludo= "<h3> Hola, El triangulo es </h3>";
    
  

    public function __construct($ladoa, $ladob, $ladoc)
    {
        
        $this->ladoa = $ladoa;
        $this->ladob = $ladob;
        $this->ladoc = $ladoc;
    }

public function Tipo_tri() // que triangulo es , escaleno, isosceles o equilatero
{
    echo $this->Saludo;

  if(($this->ladoa == $this->ladob and $this->ladob == $this->ladoc))
   {
       echo "<h3> Equilatero </h3>"."<br>";
   }
   elseif (($this->ladob == $this->ladoa or $this->ladoa == $this->ladoc or $this->ladob == $this->ladoc))
   {
       echo "<h3> Isoseles </h3>"."<br>";
   }
   else 
   {
       echo "<h3> Escaleno </h3>"."<br>";
   }
     
   
}

}
?>