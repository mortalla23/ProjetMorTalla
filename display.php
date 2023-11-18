<?php
if(!empty($_GET['id'])){ 

    $host     = 'localhost';
    $login = 'root';
    $passwd = ' ';
    $dbname    = 'espacemembres';
    
    //Créer une connexion et sélectionner la base de données
    $dbname = new mysqli($host, $login, $passwd, $dbname);
    
    // Vérifier la connexion
    if($dbname->connect_error){
        die("Erreur de connexion: " . $dbname->connect_error);
    }
    
    //Récupérer l'image à partir du base de données
    $res = $dbname->query("SELECT image FROM jeux WHERE id = {$_GET['id']}");
    
    if($res->num_rows > 0){
        $image = $res->fetch_assoc();
        
        //Rendre l'image
        header("Content-type: image/jpg"); 
        echo $image['FILE']; 
    }else{
        echo 'Image non trouvée...';
    }
}
?>