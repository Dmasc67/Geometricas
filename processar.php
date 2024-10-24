<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['Figures'] = $_POST['Figures'];
    $figura = $_SESSION['Figures'];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducció de dades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Introduir els costats o radi per calcular l'àrea i el perímetre</h1>
        <div class="card">
            <div class="card-body">
                <form action="resultats.php" method="post">
                    <?php
                    if (isset($figura)) {
                        if ($figura == "Triangle") {
                            echo '<div class="form-group">';
                            echo '<label for="lado1">Costat 1:</label><input type="number" name="lado1" class="form-control" required><br>';
                            echo '<label for="lado2">Costat 2:</label><input type="number" name="lado2" class="form-control" required><br>';
                            echo '<label for="lado3">Costat 3:</label><input type="number" name="lado3" class="form-control" required><br>';
                            echo '</div>';
                        } elseif ($figura == "Rectangle") {
                            echo '<div class="form-group">';
                            echo '<label for="lado1">Costat 1:</label><input type="number" name="lado1" class="form-control" required><br>';
                            echo '<label for="lado2">Costat 2:</label><input type="number" name="lado2" class="form-control" required><br>';
                            echo '</div>';
                        } elseif ($figura == "Quadrat") {
                            echo '<div class="form-group">';
                            echo '<label for="lado1">Costat:</label><input type="number" name="lado1" class="form-control" required><br>';
                            echo '</div>';
                        } elseif ($figura == "Cercle") {
                            echo '<div class="form-group">';
                            echo '<label for="radio">Radi:</label><input type="number" name="radio" class="form-control" required><br>';
                            echo '</div>';
                        }
                    }
                    ?>
                    <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
