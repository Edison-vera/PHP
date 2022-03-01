<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado || $admin){
echo("Usuario autenticado correctamente");
}else{
    echo("Usuario no autenticado correctamente");
}

// If anidados ....

$cliente =[
    "nombre" => "Juan",
    "saldo" => 0,
    "informacion" => [
        "tipo" => "premium"
    ]
    ];

    echo "<pre>";

if (!empty($cliente)){
    echo("El arreglo del cliente no esta vacio");


    if ($cliente["saldo"] > 0){
        echo("El saldo del clientes esta disponible"); 
    } else {
        echo("No hay saldo"); 
    }
}


// else if
echo "<pre>";
if($cliente["saldo"] > 0){
    echo("Saldo disponible");
} else if ($cliente["informacion"]["tipo"] === "premium"){
    echo("El cliente es premium");
} else {
    echo("No hay cliente definido ");
}


// Switch
echo "<pre>";
$tecnologia = "HTML";

switch($tecnologia){
    case "PHP":
        echo("PHP, un exelente lenguaje");
        break;

        case "Js":
            echo("Js, El lenguaje de la web");
            break;

            case "HTML":
                echo("Emmm....");
                break;
    

        default:
        echo("Algun lenguaje que no se cual es ");
        break;
}


include 'includes/footer.php';