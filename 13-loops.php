<?php include 'includes/header.php';

// While

$i = 0; // Inicializador

while($i<10){

    echo $i . "<br>";
    $i++; //Incrementando uno a uno
}

// Do while

echo "<pre>";

$i=0;

do{
    echo $i . "<br>";
    $i++;
}while($i<10);

// For lopp
// Multiplos de 3 imprimir fizz
// Multiplos 5 imprimir buzz
// Multiplos 3 y 5 imprimir fizz buzz



echo "<pre>";

for($i=1; $i<10; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
    echo $i . "fizz buzz <br>";
}elseif ($i % 3 === 0){
    echo $i . "fizz <br>";
} elseif ($i % 5 ===0){
    echo $i . "buzz <br>";
}else {
echo$i ."<br>";
}
}

// For Each


$clientes= ["Pedro","Juan","Karen"];
echo "<pre>";
foreach($clientes as $cliente){
echo($cliente . "<br>" );
}


$cliente =[
    "nombre" => "Juan",
    "saldo" => 200,  
    "tipo" => "premium" 
    ];

echo "<pre>";
foreach($cliente as $valor){
        echo($valor . "<br>" );
        }

echo "<pre>";      
foreach($cliente as $key => $valor){
            echo($key . "-" . $valor . "<br>" );
            }

include 'includes/footer.php';