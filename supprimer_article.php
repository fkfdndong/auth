<?php

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
    
    // Exécutez la requête de suppression
    $sql = "DELETE FROM articles WHERE id = $article_id";
    if ($conn->query($sql) === TRUE) {
        // Redirigez l'utilisateur vers la page précédente
        header('Location: index.php'); // Remplacez "index.php" par la page souhaitée
        exit();
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }
}

$conn->close();
?>
