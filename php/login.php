<?php

    session_start();

    try
    {
        $mysqlClient = new PDO('mysql:host=localhost;dbname=cy-trip;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $sqlQuery = 'SELECT * FROM users';
    $userstatement = $mysqlClient->prepare($sqlQuery);
    $userstatement->execute();
    $users = $userstatement->fetchAll();

    $loginSuccessful = false;

    foreach ($users as $user)
    {
        if ($user['user_email'] == $_POST['user_email'] && $user['user_password'] == $_POST['user_password'])
        {
            $_SESSION["user"] = $user;
            $loginSuccessful = true;
            break;
        }
    }
    
    if ($loginSuccessful) {
        // Redirection vers une autre page après une connexion réussie
        header("Location: ../index.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        // Redirection vers la page de connexion avec un message d'erreur en cas de connexion échouée
        header("Location: login_signup.php?error=invalid_credentials");
        exit();
    }
?>