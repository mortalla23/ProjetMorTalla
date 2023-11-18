<?php

require_once("connpdo.php");

function deleteJeu($id, $pdo) {
    $deleteQuery = "DELETE FROM jeux WHERE ID = ?";
    $deleteStatement = $pdo->prepare($deleteQuery);
    return $deleteStatement->execute([$id]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete']) && !empty($_POST['delete'])) {
    $deleteId = $_POST['delete'];
    
    if (deleteJeu($deleteId, $pdo)) {
        echo "Suppression réussie.";
    } else {
        echo "Erreur lors de la suppression.";
    }
}

$query = "SELECT ID, NOMJ, FILE FROM jeux";
$statement = $pdo->query($query);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Supp Jeux</title>
    <style>
    table {
        width: 80%; /* Ajustez la largeur du tableau selon vos besoins */
        border-collapse: collapse;
        margin: 20px; /* Ajoutez une marge autour du tableau */
    }

    th, td {
        padding: 15px; /* Ajustez l'espacement à l'intérieur des cellules */
        text-align: center;
        border: 1px solid #ddd; /* Ajoutez des bordures aux cellules */
    }

    th {
        background-color: white;
    }
</style>
</head>
<body>
<nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
        <div class="container">
          <a class="nav-link" class="navbar-brand test-uppercase fw-bolder mx-4 py-3" href="#">GameSphère</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-2">
                <a class="nav-link active" aria-current="page" href="creeradmin.php">Créer Admin</a>
              </li>
              
              <li class="nav-item pe-2">
                <a class="nav-link" href ="Ajoutjeu.php">Ajout Jeu</a>
              </li>
              
              <li class="nav-item pe-2">
                <a class="nav-link" href ="suppjeu.php">Supprimer Jeu</a>
              </li>
              
              
              
            </ul>
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Déconnexion</a>
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
                 Supprimer un jeu
            </h1>    
            
            <div class ="row">
   

            <table border="1">
                <tr style="background-color: white;">
                    <th>ID </th>
                    <th>Nom du Jeu </th>
                    <th>Action </th>
                </tr>
                <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td style="background-color: white;"><?= $row['ID'] ?></td>
                        <td style="background-color: white;"><?= $row['NOMJ'] ?></td>
                        <td>
                    <form method="POST" action="">
                        <input type="hidden" name="delete" value="<?= $row['ID'] ?>">
                        
                        <section class="centre">
                        <div class="row my-3">
                            <div class="col-md-2">
                                <div class="d-grid gap-2 d-ms-block">
                                    <button class="btn btn-outline-danger md-6" type="submit">Supprimer</button>
                                </div>
                            </div>
                        </div>
                        </section
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
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
