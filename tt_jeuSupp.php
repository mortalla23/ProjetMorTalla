<?php

require_once("connpdo.php");

function deleteJeu($id, $pdo) {
    $deleteQuery = "DELETE FROM jeux WHERE NOMJ= ?";
    $deleteStatement = $pdo->prepare($deleteQuery);
    return $deleteStatement->execute([$id]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['NOMJ']) && !empty($_POST['NOMJ'])) {
    $deleteId = $_POST['NOMJ'];
    
    if (deleteJeu($deleteId, $pdo)) {
        echo "Suppression réussie.";
    } else {
        echo "Erreur lors de la suppression.";
    }
}

$query = "SELECT  NOMJ, FILE FROM jeux";
$statement = $pdo->query($query);

?>

