<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium"
    ]
];

// Codigo util para ver los contenidos de los array
echo "<pre>";
var_dump($cliente["informacion"]);
echo "<pre>";

echo $cliente["nombre"];
echo $cliente["informacion"]["tipo"];


$cliente["codigo"] = 120011121;

echo "<pre>";
var_dump($cliente);
echo "<pre>";


include 'includes/footer.php';