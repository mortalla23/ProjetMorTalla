<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>page Admin</title>
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
                <a class="nav-link active" aria-current="page" href="creeradmin.php">Créer Admin</a>
              </li>
              
              <li class="nav-item pe-2">
                <a class="nav-link" href ="AMSjeu.php">Ajout-Sup-Mod Jeu</a>
              </li>
              
            </ul>
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Déconnexion</a>
                </li>
        
              </ul>
          </div>
        </div>
      </nav>
    <section class="banner d-flex justify-content-center align-items-center pt-5"> 
        <h1 class=" text-center redressed banner-desc">
            Bienvenue Administateur!
         </h1> 
        
        <div class="container my-5 py-5">
            <h1 class="text-capitalize text-center redressed banner-desc">
                 <u>GameSphère</u> <br />
                 Créer un nouvel administrateur
            </h1>    
            
            <div class ="row">
               
                    <form  method="POST" action="tt_inscription.php">
                        
                        
                        <div class="container">
                        <div class="row my-3">
                            
                            <div class="col-md-10">
                                <label for="nom" class="form-label ">Nom</label>
                                <input type="text" class="form-control " id="nom" name="nom" placeholder="Votre nom..." required>
                            </div>
                            <div class="col-md-10">
                                <label for="prenom" class="form-label ">Prénom</label>
                                <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Votre prénom..." required>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-10">
                                <label for="password" class="form-label ">Mot de passe</label>
                                <input type="password" class="form-control " id="password" name="password" placeholder="Votre mot de passe..." required>
                            </div>
                            
                            </div>
                            
                            <section class="centre">
                                
                            <div class="row my-3">
                                <div class="col-md-2">
                            <div class="d-grid gap-2 d-ms-block">
                                <button class="btn btn-outline-primary md-6" type="submit">Créer</button></div>   
                            </div>
                        </div>
                            </section>

                            
                        </div>
                </div>
                
            </form>
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