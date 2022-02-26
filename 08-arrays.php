<?php include 'includes/header.php';

$carrito = ["Tablet","Televisor","Computadora"];



//Acceder a un elemento del array 
echo($carrito[1]);

//Añadir elementos en el arreglo 
$carrito[3]= "Nuevo Producto...";

//Añadir elementos al final del arreglo 

array_push($carrito,"Audifonos");

//Añadir elementos al inicio del arreglo 

array_unshift($carrito,"Audifonos gamer");

// Codigo util para ver los contenidos de los array
echo "<pre>";
var_dump($carrito);
echo "<pre>";




include 'includes/footer.php';