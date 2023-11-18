<?php
session_start();

// Vérifier si les clés existent dans le tableau $_POST
if (isset($_POST['NOMJ']) && isset($_FILES['FILE'])) {
    $nom = $_POST['NOMJ'];

    // Vérifier si le fichier a été correctement téléchargé
    if ($_FILES['FILE']['error'] === UPLOAD_ERR_OK) {
        $photoContent = file_get_contents($_FILES['FILE']['tmp_name']);

        require_once("connpdo.php");

        $req = "INSERT INTO jeux (NOMJ, FILE) VALUES (?, ?)";
        $ps = $pdo->prepare($req);
        $params = array($nom, $photoContent);

        if ($ps->execute($params)) {
            $_SESSION['message'] = "Ajout réussi.";
            header("location:listejeu.php");
        } else {
            $_SESSION['message'] = "Problème Ajout.";
            header("location:Ajoutjeu.php");
        }
    } else {
        $_SESSION['message'] = "Erreur lors du téléchargement du fichier.";
        header("location:Ajoutjeu.php");
    }

    


} else {
    $_SESSION['message'] = "Données manquantes dans le formulaire.";
    header("location:Ajoutjeu.php");
}
?>
