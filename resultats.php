<?php
session_start();
require_once './class/Figures.php';
require_once './class/Quadrat.php';
require_once './class/Cercle.php';
require_once './class/Rectangle.php';
require_once './class/Triangle.php';

$figura = isset($_SESSION['Figures']) ? $_SESSION['Figures'] : null;

$area = $perimetre = 0;
$lados = [];

if ($figura == "Triangle") {
    if (isset($_POST['lado1'], $_POST['lado2'], $_POST['lado3'])) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
        $triangle = new Triangle($lado1, $lado2, $lado3);
        $area = $triangle->calcularArea();
        $perimetre = $triangle->calcularPerimetre();
        $lados = [$lado1, $lado2, $lado3];
    }
} elseif ($figura == "Rectangle") {
    if (isset($_POST['lado1'], $_POST['lado2'])) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $rectangle = new Rectangle($lado1, $lado2);
        $area = $rectangle->calcularArea();
        $perimetre = $rectangle->calcularPerimetre();
        $lados = [$lado1, $lado2];
    }
} elseif ($figura == "Quadrat") {
    if (isset($_POST['lado1'])) {
        $lado1 = $_POST['lado1'];
        $quadrat = new Quadrat($lado1);
        $area = $quadrat->calcularArea();
        $perimetre = $quadrat->calcularPerimetre();
        $lados = [$lado1];
    }
} elseif ($figura == "Cercle") {
    if (isset($_POST['radio'])) {
        $radi = $_POST['radio'];
        $cercle = new Cercle($radi);
        $area = $cercle->calcularArea();
        $perimetre = $cercle->calcularPerimetre();
        $lados = [$radi];
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Resultats</h1>
        <p>Figura seleccionada: <?php echo ucfirst($figura); ?></p>
        <p>Costats introduïts: <?php echo implode(", ", $lados); ?></p>
        <p>Àrea: <?php echo $area; ?></p>
        <p>Perímetre: <?php echo $perimetre; ?></p>
        <br>
        <a href="index.php" class="btn btn-primary">Torna al formulari</a>
    </div>
</body>
</html>
