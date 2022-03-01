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


foreach ($productos as $producto){ ?>
    <li>
<p>Producto: <?php	echo $producto["nombre"];?> </p>
<p>Producto: <?php 	echo "$ " . $producto["precio"];?> </p>
<p><?php echo($producto["disponible"]) ? "Disponible" : "No disponible"; ?></p>    
    
  
</li>
<?php
}


include 'includes/footer.php';