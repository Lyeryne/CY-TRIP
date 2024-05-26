<?php 
    session_start();

    require_once(__DIR__."/sqlconfig.php");

    $userstatement = $mysqlClient->prepare('SELECT * FROM users');
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