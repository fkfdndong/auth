<?php

include("config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['email' => $email, 'username' => $username, 'password' => $password]);

    if ($result) {
        $message = 'Inscription réussie!';
        header('Location: login.php');
    } else {
        $message = 'Erreur lors de l\'inscription.';
    }
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
          <a href="register.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Inscription</span>
          </a>
        </li>

    
        <li>
          <a href="login.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Connexion</span>
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
      <h2>Inscription</h2>
      <div class="overview-boxes">
      <div class="box">
  

    <?php if (!empty($message)): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <form action="register.php" method="post">
        <div>
            <label for="email">Adresse e-mail:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <br><br>
        <div>
            <label for="username">Nom d'utilisateur:</label><br>
            <input type="text" id="username" name="username">
        </div>
        <br><br>
        <div>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password">
        </div>
        <br><br>
        <div >
            <input class="btn btn-primary" type="submit" value="S'inscrire">
        </div>
    </form>
</div>
</div>
</div>

</body>
</html>