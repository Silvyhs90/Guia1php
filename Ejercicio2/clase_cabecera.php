<?php

$titulo = isset($_POST['titulo']);
$alineacion = isset($_POST['alineacion']);
$color = isset($_POST['color']);
$colorfondo = isset($_POST['colorfondo']);

if($_POST)
if (isset($_POST['titulo'])) 
{
    $titulo= $_POST["titulo"];
}

if($_POST)
if (isset($_POST['alineacion'])) 
{
    $alineacion = $_POST["alineacion"];
}

if($_POST)
if (isset($_POST['color'])) 
{
    $sueldo= $_POST["color"];
}

if($_POST)
if (isset($_POST['colorfondo'])) 
{
    $colorfondo= $_POST["colorfondo"];
}

class CabeceraPagina
{

public function __construct($titulo)
{
    $this->titulo= $titulo;
    

}


public function Alinear($a)
{
    if( $a=="centro")
    {
    $this->titulo="<p align=\"center\"> $this->titulo </p>";
    }
    if( $a== "izquierda")
    { 
    $this->titulo= "<p align=\"left\"> $this->titulo </p>";
    }
    if( $a== "derecha")
    {
    $this->titulo= "<p align=\"right\"> $this->titulo </p>";
    }
}

public function Color($letra,$fondo)
{

    if($fondo == "rojo")
    {
        ?><div style= "background-color:#FF0000!important;"><?php
    
    }

    if($fondo == "rosa")
    {
        ?><div style= "background-color:#FA8072!important;"><?php
    
    }

    if($fondo == "negro")
    {
        ?><div style= "background-color:#000000!important;"><?php
    }

    if($fondo == "blanco")
    {
        ?><div style= "background-color:#FFFFFF!important;"><?php
    }

    if($letra==1)
    {
       echo $this->titulo= "<h2><font color=\"red\"> $this->titulo </font></h2>";
    }

    if($letra==2)
    {
       echo $this->titulo= "<h2><font color=\"pink\"> $this->titulo </font></h2>";
    }

    if($letra==3)
    {
       echo $this->titulo= "<h2><font color=\"teal\"> $this->titulo </font></h2>";
    }
    
    if($letra==4)
    {
       echo $this->titulo= "<h2><font color=\"aqua\"> $this->titulo </font></h2>";
    }

    if ($letra==5) 
    {
        echo $this->titulo= "<h2><font color=\"blue\"> $this->titulo </font></h2>";
        
    }
}

}

?>