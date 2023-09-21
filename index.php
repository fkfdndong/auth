
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
        
        <span class="logo_name"></span>
      </div>
      <ul class="nav-links">
        
      <li>
          <a href="form_ajout.php">
            
            <span class="links_name"></span>
          </a>
        </li>

      <li>
          <a href="form_sortie.php" class="active">
            
            <span class="links_name"></span>
          </a>
        </li>

    

        <li class="log_out">
          <a href="logout.php">
        
            <span class="links_name"></span>
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
      <div class="box">
<style>
    
.buttons-container {
  text-align: center;
  margin-top: 50px;
}
.btn {
  margin: 10px;
  padding: 10px 20px;
  background-color: #007BFF;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}
.btn:hover {
  background-color: #0056b3;
}
</style>
<div class="buttons-container">
    <a href="login.php" class="btn">Se Connecter</a><br><br>
    <a href="register.php" class="btn">S'inscrire</a><br><br>
    <a href="dashboard.php" class="btn">Dashboard</a>
</div>
</div>
</div>
<div class="box"></div>
</body>
</html>