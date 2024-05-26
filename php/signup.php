<?php 
    session_start();
?>

<?php require_once(__DIR__."/sqlconfig.php") ?>

<?php

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
    
    $createaccount = $mysqlClient->prepare('INSERT INTO users(user_name, isroot, user_email, user_password) VALUES (:user_name, :isroot, :user_email, :user_password)');
    $createaccount->execute([
        'user_name'=> $_POST['user_name'],
        'isroot'=> 0,
        'user_email'=> $_POST['user_email'],
        'user_password'=> $_POST['user_password'],
    ]);

    header("Location: login_signup.php?error=zxfvwll22_6d"); // account created succesfully
?>