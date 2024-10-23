<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['figura'] = $_POST['figura'];
    $figura = $_POST['figura'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Introducció de dades</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>Introduir els costats o radi per calcular l'àrea i el perímetre</h1>
    <form action="resultats.php" method="post">
        <?php
        if ($figura == "triangulo") {
            echo '<label for="lado1">Costat 1:</label><input type="number" name="lado1" required><br>';
            echo '<label for="lado2">Costat 2:</label><input type="number" name="lado2" required><br>';
            echo '<label for="lado3">Costat 3:</label><input type="number" name="lado3" required><br>';
        } elseif ($figura == "rectangulo") {
            echo '<label for="lado1">Costat 1:</label><input type="number" name="lado1" required><br>';
            echo '<label for="lado2">Costat 2:</label><input type="number" name="lado2" required><br>';
        } elseif ($figura == "cuadrado") {
            echo '<label for="lado1">Costat:</label><input type="number" name="lado1" required><br>';
        } elseif ($figura == "circulo") {
            echo '<label for="radio">Radi:</label><input type="number" name="radio" required><br>';
        }
        ?>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
