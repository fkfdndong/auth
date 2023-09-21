<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./plublic/CSS/style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">D-CLIC</span>
      </div>
      <ul class="nav-links">
        
      <li>
          <a href="form_ajout.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Ajouter <br> un article</span>
          </a>
        </li>

      <li>
          <a href="form_sortie.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Enregistrer <br>une sortie</span>
          </a>
        </li>

    

        <li class="log_out">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Déconnexion</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          
          <span class="dashboard"></span>
        </div>
        <div class="search-box">
          <input type="text" />
        
        </div>
        <div class="profile-details">
        
          <span class="admin_name"></span>
    
        </div>
      </nav>


      <div class="home-content">
      <div class="overview-boxes">
<body>

<div class="dashboard-container">
    <h2>Bienvenue sur votre tableau de bord</h2>
    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
    <h3> liste des article disponible </h3>
    <table class="mtable table-border">
    <tr>
        
        <th>Nom</th>
        <th>Quantite</th>
        <th>Prix unitaire</th>
        <th>Action</th>
    </tr>
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


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['quantite'] . "</td>";
            echo "<td>" . $row['prix_unitaire'] . "</td>";
            echo "<td>
            
                    <a href='editer_article.php?id=" . $row['id'] . "'>Éditer</a>
                    </td>";
                    echo "<td>
                    <a href='voir_details_article.php?id=" . $row['id'] . "'>Voir les détails</a>
                    </td>";
                    echo "<td>
                    <a href='supprimer_article.php?id=" . $row['id'] . "' style='color: red;'>Supprimer</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "Aucun article trouvé.";
    }

    $conn->close();
    ?>
</table>
<h3>la liste des article sortant</h3>
<table class="mtable">
        <tr>
        
            <th>Nom </th>
            <th>Quantite</th>
            <th>Prix unitaire</th>
            <th>Action</th>
        </tr>
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
        $sql = "SELECT * FROM sorties";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['quantite'] . "</td>";
                echo "<td>" . $row['prix_unitaire'] . "</td>";
                echo 
                "<td
                a href='editer_article.php?id=" . $row['id'] . "'>Éditer</a></td>";
                
                echo "<td>
                <a href='voir_details_article.php?id=" . $row['id'] . "'>Voir les détails</a>
                </td>";
                echo "<td>
                <a href='supprimer_article_sortant.php?id=" . $row['id'] . "' style='color: red;'>Supprimer</a>
              </td>";
                echo "</tr>";
            }
        } else {
            echo "Aucun article trouvé.";
        }

        $conn->close();
        ?>
    </table>
</div>
</div>
</body>
</html>