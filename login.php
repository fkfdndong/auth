<?php

include("config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
    } else {
        $message = 'Mauvais identifiants';
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
      <h2>Connexion</h2>
      <div class="overview-boxes">
      <div class="box">


    <?php if (!empty($message)): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
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
            <input class="btn btn-primary "type="submit" value="Se connecter">
        </div>
    </form>
</div>

</body>
</html>