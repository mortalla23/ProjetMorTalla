<?php
  session_start(); // Pour les massages

  // Contenu du formulaire :
  $nom =  htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  
  $role = 1; // 1 pour membre, 2 pour Admin, 3 pour admin par exemple :o)

  // Option pour bcrypt
  $options = [
        'cost' => 12,
  ];

  // Connexion :
  require_once("param.inc.php");
  try {
      $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $login, $passwd);
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die('Erreur de connexion à la base de données : ' . $e->getMessage());
  }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  try {
      $stmt = $bdd->prepare("INSERT INTO users(nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)");
      $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
      $stmt->execute([$nom, $prenom, $email, $hashed_password, $role]);

      // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
      $_SESSION['message'] = "Enregistrement réussi";
  } catch (PDOException $e) {
      $_SESSION['message'] = "Impossible d'enregistrer : " . $e->getMessage();
  }

    // Redirection vers la page d'accueil par exemple :
    header('Location: listjeux.php');


?>