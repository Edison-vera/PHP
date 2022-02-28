<?php include 'includes/header.php';

$clientes =[];
$clientes2 = array();
$clientes3 = array ("Juan", "Pedro", "Karen");
$cliente = [
    "nombre"=> "Juan",
    "Saldo" => 200
];


//Empty revisar si los arreglos estan vacios 
echo "<pre>";
var_dump(empty($clientes3));
var_dump(empty($clientes2));
var_dump(empty($clientes));

//Isset revisar si un arreglo esta creado o una propiedad esta definida 
echo "<pre>";
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

//Isset permite revisar si una propiedad de un arreglo asociativo, existe !

echo "<pre>";
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["codigo"]));

include 'includes/footer.php';