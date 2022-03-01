<?php include 'includes/header.php';

$productos=[
    [
         "nombre" => "Tablet",
         "precio" => 200,
         "disponible" => true
    ],
    [
        "nombre" => "Televisor 24 pulgadas",
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor curvo",
        "precio" => 400,
        "disponible" => false
            ]
    ];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos);

$json_arrys = json_decode($json);


var_dump($json);
var_dump($json_arrys);
echo "<pre>";



include 'includes/footer.php';