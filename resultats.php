<?php
session_start();
require_once 'figures.php';

// Recuperar la figura seleccionada de la sessió
$figura = $_SESSION['figura'];

// Crear l'objecte corresponent i calcular resultats
if ($figura == "triangulo") {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    $triangle = new Triangulo($lado1, $lado2, $lado3);
    $area = $triangle->calcularArea();
    $perimetre = $triangle->calcularPerimetre();
} elseif ($figura == "rectangulo") {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $rectangle = new Rectangulo($lado1, $lado2);
    $area = $rectangle->calcularArea();
    $perimetre = $rectangle->calcularPerimetre();
} elseif ($figura == "cuadrado") {
    $lado1 = $_POST['lado1'];
    $quadrat = new Cuadrado($lado1);
    $area = $quadrat->calcularArea();
    $perimetre = $quadrat->calcularPerimetre();
} elseif ($figura == "circulo") {
    $radi = $_POST['radio'];
    $cercle = new Circulo($radi);
    $area = $cercle->calcularArea();
    $perimetre = $cercle->calcularPerimetre();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultats</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>Resultats</h1>
    <p>Figura seleccionada: <?php echo ucfirst($figura); ?></p>
    <p>Àrea: <?php echo $area; ?></p>
    <p>Perímetre: <?php echo $perimetre; ?></p>
    <br>
    <a href="index.php">Torna al formulari</a>
</body>
</html>
