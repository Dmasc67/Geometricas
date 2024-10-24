<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Figures Geomètriques</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selecciona una figura geomètrica</h1>
        <form action="processar.php" method="post">
            <div class="form-group">
                <label for="Figures">Selecciona una figura:</label>
                <select name="Figures" id="Figures" class="form-control" required>
                    <option value="Triangle">Triangle</option>
                    <option value="Rectangle">Rectangle</option>
                    <option value="Quadrat">Quadrat</option>
                    <option value="Cercle">Cercle</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Continuar</button>
        </form>
    </div>
</body>
</html>
