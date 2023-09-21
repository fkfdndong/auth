<?php
// Connexion à la base de données (comme dans votre code existant)

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_stock_dclik";

// Connexion à la base de données (à modifier comme dans process.php)
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupération des articles depuis la base de données
$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    
    // Récupérez les détails de l'article à partir de la base de données
    $sql = "SELECT * FROM articles WHERE id = $article_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $article = $result->fetch_assoc();
        // Affichez les détails de l'article
        echo "<h2>Détails de l'article</h2>";
        echo "<p>ID : " . $article['id'] . "</p>";
        echo "<p>Nom : " . $article['nom'] . "</p>";
        echo "<p>Quantité : " . $article['quantite'] . "</p>";
        echo "<p>Prix unitaire : " . $article['prix_unitaire'] . "</p>";
    } else {
        echo "Article non trouvé.";
    }
}

$conn->close();
?>
