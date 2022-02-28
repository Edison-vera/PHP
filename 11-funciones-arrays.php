<?php include 'includes/header.php';

//in_array buscar elementos en un arreglo 

$carrito =["Tablet", "Computadora","Television"];

var_dump(in_array("Tablet",$carrito));
var_dump(in_array("Audifonos",$carrito));

//Ordenar los elementos de un arreglo 

$numeros = [1,3,4,5,1,2];
sort($numeros); // De menor a mayor
rsort($numeros);//De mayor a menor 


// Codigo util para ver los contenidos de los array
echo "<pre>";
var_dump($numeros);
echo "<pre>";

//Ordenar arreglo asociativo 

$cliente = [
    "Saldo" => 200,
    "Tipo" =>  "Premiun",
    "Nombre" => "Edison"
];

asort($cliente); // Ordena por valores orden alfabetico
arsort($cliente); // Ordena por valores z primero
ksort($cliente); // Ordena por llaves orden alfabetico
krsort($cliente); // Ordena por llaves porden alfabetico alreves 


// Codigo util para ver los contenidos de los array
echo "<pre>";
var_dump($cliente);
echo "<pre>";

include 'includes/footer.php';