<?php

    session_start();

    try
    {
        $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=cy-trip;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $sqlQuery = 'SELECT * FROM users';
    $userstatement = $mysqlClient->prepare($sqlQuery);
    $userstatement->execute();
    $users = $userstatement->fetchAll();

    foreach ($users as $user)
    {
        if ($user['user_email'] == $_POST['user_email'])
        {
            header("Location: login_signup.php?error=zxfvwll22_6c"); // email already exist error
            exit();
        }
    }
    
    $createaccount = $mysqlClient->prepare('INSERT INTO users(user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)');
    $createaccount->execute([
        'user_name'=> $_POST['user_name'],
        'user_email'=> $_POST['user_email'],
        'user_password'=> $_POST['user_password'],
    ]);

    header("Location: login_signup.php?error=zxfvwll22_6d"); // account created succesfully
?>