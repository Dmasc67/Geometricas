<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Figures Geomètriques</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>Selecciona una figura geomètrica</h1>
    <form action="processar.php" method="post">
        <label for="figura">Selecciona una figura:</label>
        <select name="figura" id="figura" required>
            <option value="triangulo">Triangle</option>
            <option value="rectangulo">Rectangle</option>
            <option value="cuadrado">Quadrat</option>
            <option value="circulo">Cercle</option>
        </select>
        <br><br>
        <input type="submit" value="Continuar">
    </form>
</body>
</html>
