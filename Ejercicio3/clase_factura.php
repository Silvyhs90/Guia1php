<?php

$nombre = isset($_POST['nombre']);
$apellido = isset($_POST['apellido']);
$fecha = isset($_POST['fecha']);
$importeneto= isset($_POST['importeneto']);
$impuestosbruto = isset($_POST['impuestosbruto']);
$estado = isset($_POST['estado']);

if($_POST)
if (isset($_POST['nombre'])) 
{
    $nombre= $_POST["nombre"];
}

if($_POST)
if (isset($_POST['apellido'])) 
{
    $apellido = $_POST["apellido"];
}

if($_POST)
if (isset($_POST['importeneto'])) 
{
    $importeneto = $_POST["importeneto"];
}


if($_POST)
if (isset($_POST['estado'])) 
{
    $estado = $_POST["estado"];
}

class Factura
{
/* Importe bruto, estado (pagada o pendiente).*/

private $importebase;
private $fecha;
private $impuestos;
private $importebruto;
private $estado;



public function __construct($nom,$ape)
{
    $this->nombre = $nom;
    $this->apellido = $ape;

}

public function Clientedatos()
{
    ?> 
    <table class="table table-bordered mt-2 container table-active bg-light text-light">  
    <tbody> 
    <tr>
    <th> Cliente </th>
    <td>
    <?php
    echo $this->nombre." ".$this->apellido."<br><br>";?></td>
    </tr> 
    <?php
}

public function Imprime($importebase,$estado)
{
    $meses= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", 
				   "Noviembre","Diciembre");  
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");

    $real=date('n');
    if ($real != 1)
    {
        $real=$real-1;
    }
    $fecha=$dias[date('w')]." ".date('d')." "."de"." ".$meses[$real]." "."de"." ".date('Y');

    ?> 
        <tr>
        <th> Fecha </th>
        <td>
        <?php
        echo $fecha; ?></td>
        </tr> 
        <tr>
        <th> Importe base s/IVA </th>
        <td>
        <?php
        $this->importeb= $importebase."<br>";
        echo "<br>".$this->importeb=$importebase; ?>
        </td>
        </tr> 
        <tr>
        <th> Impuestos  </th>
        <td>
        <?php
        echo "<br>".$this->importeb*$this->impuestos=1.105; ?>
        </td>
        </tr> 
        <tr>
        <th> Importe Bruto c/iva 21% </th>
        <td>
        <?php
         $importebruto=($this->importeb*$this->impuestos)+$importebase;
         echo "<br>".$this->importebrut=$importebruto; ?>
         </td>
        </tr> 
        <?php
    $this->esta=$estado;
    if($this->esta == "pendiente")
    {
        ?> 
        <tr>
        <th> Estado de compra </th>
        <td>
        <?php
        echo "<br>"."La factura esta pendiente de pago"."<br><br>";?>
        </td>
        </tr>
        <?php
    }
    elseif ($this->esta == "pagada") 
    {
        ?> 
        <tr>
        <th> Estado de compra </th>
        <td>
        <?php
        echo "<br>"."La factura se encuentra abonada"."<br><br>"; ?>
        </td>
        </tr> 
    <?php 
    }
    ?>
    </tbody>
    </table>
<?php

}

}
?>