


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
          <a href="dashboard.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        
      <li>
          <a href="form_ajout.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Ajouter <br> un article</span>
          </a>
        </li>
        
      <li>
          <a href="form_sortie.php" class="active">
          <i class="bx bx-log-out"></i>
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


 

<body>
    <div class="home-content">
        <h1>ajouter unarticle</h1>
        <div class="overview-boxes">
           
            <div class="box">
    <form action="ajouter_article.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" required><br><br>
        
        <label for="quantite">Quantite :</label><br><br>
        <input type="number" name="quantite" required><br><br>

        <label for="prix_unitaire">Prix unitaire :</label><br><br>
        <input type="number" name="prix_unitaire" required><br><br>
        
        
        <input type="submit" value="Enregistrer">
    </form>
</div>
    </div>
</div>
</body>
</html>
