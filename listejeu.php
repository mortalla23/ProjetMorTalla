<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Liste jeux</title>
</head>
<body>
    <nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
        <div class="container">
          <a class="navbar-brand test-uppercase fw-bolder mx-4 py-3" href="#">GameSphère</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-2">
                <a class="nav-link active" aria-current="page" href="jeux.php">Jeux</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link active" aria-current="page" href="listejeu.php">Liste des jeux à jour </a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link" href ="souhaitjeu.php">Choisir un jeu à jouer</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    <section class="banner d-flex justify-content-center align-items-center pt-5">
        <div class="container my-5 py-5">
            <p class="text-capitalize py-3 redressed banner-desc"> <u>GameSphère</u></p>
            <div class ="row">
                
                <div class="col-md-6">
                    <p class="text-capitalize py-3 redressed banner-desc"> Bienvenue membre! </p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-capitalize py-3 redressed banner-desc">
                         La liste des jeux à jour </br>sur GameSphère
                    </h1>    
                   
                </div>
            </div>
        </div>
  </section>
  <section class="suite py-5">
  <div class="container">
  <h1>List des jeux</h1>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Photo</th>
        
    </thead>
    <tbody>
    
    <?php

  // Connexion :
  require_once("connpdo.php");
  $req="SELECT * FROM jeux";
  $ps=$pdo->prepare($req);
  $ps->execute();



    while($row=$ps->fetch()) 
    {     
      echo '<tr>';     
      echo  '<th scope="row">'.$row['id'].'</th>';
      echo'<td>'.$row['NOMJ'].'</td>';
      if (!file_exists('img/'.$row['FILE'])) {
        echo 'L\'image n\'existe pas ou le chemin est incorrect.';
    } else {
        echo '<td><img src="img/'.$row['FILE'].'" width="100px" height="100px"></td>';
    }
      
      echo '</tr>';
    
  }


  ?>

  </tbody>

  </table>


  </div>
</section>
<section class="footer py-5 d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <p class="text-white">&copy; 2023 Rouen | All rights reserved.</p>
            </div>
            <div class="col-6">
                <ul class="nav text-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Jeux</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Contact</a>
                    </li>
                </ul>
            </div>
            
                
        </div>
       
    </div>
  </section>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>