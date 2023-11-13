<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Page Accueil</title>
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
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              
              <li class="nav-item pe-2">
                <a class="nav-link active" href ="presen.php">Presentation</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link active" href ="inscrip.php">Devenir membre</a>
              </li>
              <li class="nav-item pe-2">
                <a class="btn btn-order rounded-0" href ="conne.php">Connection</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="banner d-flex justify-content-center align-items-center pt-5">
            <div class="container my-5 py-5">
                <div class ="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h1 class="texte-capitalize py-3 redressed banner-desc">
                            Bienvenu sur GameSphère <br />
                             Entrez dans l'Univers des jeux de plateaux
                        </h1>    
                        <p>
                            <button class="btn btn-order rounded-0 merriweather">Règles de jeu</button>
                           
                        </p>
                    </div>
                </div>
            </div>
      </section>

      <section class="suite py-5" >
        <div class="container">
            <div class="row">
                <div class="card mb-3" border-0 rounded-0">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="assets/img/monopoly.png"  class="img-fluid " alt="...">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h5 class="card-title">Monopoly</h5>
                          <p class="card-text">Le Monopoly est apprécié pour son mélange de stratégie, de chance et de négociation, ce qui en fait un jeu social et divertissant pour les amis et la famille. Il existe de nombreuses éditions spéciales et variantes du Monopoly, chacune avec ses propres thèmes et règles spécifiques.</p>
                          <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card my-5" border-0 rounded-0">
                    <div class="row g-0">
                      
                      <div class="col-md-6">
                        <div class="card-body">
                          <h5 class="card-title">Jeu de Société</h5>
                          <p class="card-text">Les jeux de société sont un excellent moyen de passer du temps de qualité en famille ou entre amis, encourageant la communication, la collaboration et la compétition amicale. Ils peuvent être appréciés par les personnes de tous âges et offrent une opportunité de créer des souvenirs tout en développant des compétences telles que la pensée critique, la résolution de problèmes et la planification stratégique.</p>
                          <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="assets/img/dame.png"  class="img-fluid " alt="...">
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3" border-0 rounded-0">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="assets/img/Carte.png"  class="img-fluid " alt="...">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h5 class="card-title">Jeu de Carte</h5>
                          <p class="card-text">Les jeux de cartes offrent une grande flexibilité et diversité, ce qui les rend accessibles à un large public. Ils encouragent également le développement de compétences mentales telles que la concentration, la mémoire, la planification stratégique et la prise de décision rapide.</p>
                          <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
            </div>
        </div>

      </section>

      <section class="cc-carousel merriweather bg-dark text-light text-center py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-uppercase text-center "> Les jeux de plateau </h1>
                    <div class="col pb-4">
                        Les thèmes des jeux de plateau peuvent varier considérablement, allant des jeux basés sur la stratégie militaire aux jeux de construction de civilisations, en passant par les jeux de mystère et d'intrigue. Ces jeux offrent non seulement un divertissement, mais aussi des opportunités d'apprentissage, de développement de compétences sociales et de renforcement des liens familiaux ou amicaux.
                    </div>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/img/foto.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/acc.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/dame.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
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