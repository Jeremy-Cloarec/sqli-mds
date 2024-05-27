<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "injection";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le paramètre 'email' existe
if (isset($_GET['email'])) {
    // Récupérer les données de l'utilisateur
    $user_email = $_GET['email'];

    // Requête SQL sécurisée
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $user_email);

    // Exécution de la requête
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Afficher les données de l'utilisateur
        echo "<h2>Résultats de la recherche :</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . htmlspecialchars($row["id"]) . " - Nom: " . htmlspecialchars($row["nom"]) . " - Prénom: " . htmlspecialchars($row["prenom"]) . " - Email: " . htmlspecialchars($row["email"]) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>0 résultats</p>";
    }

    $stmt->close();
} else {
    echo "<p>Veuillez entrer un email pour rechercher.</p>";
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>My first PHP page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Recherche d'utilisateur par email</h1>
        <form method="GET" action="">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email">
            <input type="submit" value="Rechercher">
        </form>
    </div>
</body>