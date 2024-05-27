<?php
include_once 'Model/connection.php';
$db = new Connection();
$connection = $db->connect();

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];

    $sql = 'INSERT INTO user (prenom) VALUES ("' . $firstname . '")';
    $connection->query($sql);

    header('Location: index.php');
}

// Solution pour résoudre le problème de l'injection SQL

// if (isset($_POST['firstname'])) {
//     $firstname = $_POST['firstname'];

//     $sql = 'INSERT INTO user (prenom) VALUES (:firstname)';
//     $stmt = $connection->prepare($sql);
//     $stmt->bindParam(':firstname', $firstname);
//     $stmt->execute();

//     header('Location: index.php');
// }