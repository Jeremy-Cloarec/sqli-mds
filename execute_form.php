<?php
include_once 'Model/connection.php';
$db = new Connection();
$connection = $db->connect();

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];

    $sql = 'INSERT INTO user (prenom) VALUES ("' . $firstname . '")';
    $connection->query($sql);

    header('Location: index.php');
    exit();
}
