<?php

$nombre = isset($_POST['nombre']);
$sueldo = isset($_POST['sueldo']);

if($_POST)
if (isset($_POST['nombre'])) 
{
    $nombre= $_POST["nombre"];
}
if($_POST)
if (isset($_POST['sueldo'])) 
{
    $sueldo= $_POST["sueldo"];
}

class Empleado
{
 
    public function __construct($nombre,$sueldo=0)
    {
        
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        
        if ($_POST)
        if($sueldo == 0)
        {
            $sueldo=100;
            echo "<h3><br>"."Nombre Empleado: ".$this->nombre."<br>"." Sueldo: ".$sueldo."</h3>";
        }
        else 
        {
            echo "<h3><br>"."Nombre Empleado: ".$this->nombre."<br>"." Sueldo: ".$this->sueldo."</h3>";
        }
        
    }

     public function Impuesto()
    {
        if($this->sueldo > 35000)
        {
         echo "Debe pagar impuestos<br>";
        }
        else 
        {
            echo "<br>No debe pagar impuestos<br>";
        }
    }


}

?>