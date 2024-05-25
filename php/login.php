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

    $emailgood = false;
    $passgood = false;

    foreach ($users as $user)
    {
        if ($user['user_email'] == $_POST['user_email'])
        {
            $emailgood = true;

            if ($user['user_password'] == $_POST['user_password'])
            {
                $passgood = true;
                break;
            }
            break;
        }
    }
    
    if ($emailgood && $passgood) {
        $_SESSION["user"] = $user;
        header("Location: /index.php");
        exit();
    } 
    else if ($emailgood && !$passgood) {
        header("Location: login_signup.php?error=zxfvwll22_6b");
        exit();
    }
    else{
        header("Location: login_signup.php?error=zxfvwll22_6a");
        exit();
    }
?>