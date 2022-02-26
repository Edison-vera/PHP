<?php include 'includes/header.php';

$nombreCliente = "Edison Vera";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo "<br/>";

//Eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br/>";

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);
echo "<br/>";

//Concertirlo en minusculas
echo strtolower($nombreCliente);
echo "<br/>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace("Edison", "E",$nombreCliente);

//Revisar si un string existe o no 
echo strpos($nombreCliente,"Edison");

//Contatenar string

$tipoCliente = "Premium";
echo "<br/>";

echo "El cliente ". $nombreCliente , " es " .$tipoCliente;
echo "<br/>";
echo "El cliente {$nombreCliente} es {$tipoCliente} ";

include 'includes/footer.php';