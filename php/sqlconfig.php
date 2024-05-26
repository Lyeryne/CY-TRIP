<?php 
    // Connexion a la base de donnees MySQL
    try
    {
        $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=cytrip;charset=utf8', 'root', '');
    }
    // Gestion des erreurs en cas d'echec de la connexion
    catch (Exception $e)
    {    
        // Affichage de l'erreur et arrêt de l'exécution du script
        die('Erreur : ' . $e->getMessage());
    }
?>