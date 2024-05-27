<!DOCTYPE html>
<html>

<head>
    <title>My first PHP page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<?php
include_once 'Model/connection.php';
$connection = new Connection();
$query = $connection->connect();
?>

<body>
    <div class="container text-center mt-5">
        <h1>My first PHP page</h1>
        <a href="form.php">Form</a>
    </div>
    <div class="container text-center mt-5">
        <p>Ceci est la page d'accueil, cliquer sur form</p>
    </div>
</body>