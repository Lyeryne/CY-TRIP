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

    $userstatement = $mysqlClient->prepare('SELECT * FROM users');
    $userstatement->execute();
    $users = $userstatement->fetchAll();

    foreach ($users as $user)
    {
        if ($user['id'] == $_SESSION['user']['id']){
            if ($_POST['user_name'] != $user['user_name']) {
                $editusername = $mysqlClient->prepare('UPDATE users set user_name = :user_name WHERE id = :id');
                $editusername->execute([
                    'user_name'=> $_POST['user_name'],
                    'id'=> $_SESSION['user']['id'],
                ]);
            }

            elseif ($_POST['user_email'] != $user['user_email']) {
                $edituseremail = $mysqlClient->prepare('UPDATE users set user_email = :user_email WHERE id = :id');
                $edituseremail->execute([
                    'user_email'=> $_POST['user_email'],
                    'id'=> $_SESSION['user']['id'],
                ]);
            }

            elseif ($_POST['user_password'] != $user['user_password']) {
                $edituserpassword = $mysqlClient->prepare('UPDATE users set user_password = :user_password WHERE id = :id');
                $edituserpassword->execute([
                    'user_password'=> $_POST['user_password'],
                    'id'=> $_SESSION['user']['id'],
                ]);
            }
            header("Location: profile.php");
            exit();
        }
    }
?>