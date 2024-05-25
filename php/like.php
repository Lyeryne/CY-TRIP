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

    $ratingstatement = $mysqlClient->prepare('SELECT * FROM ratings');
    $ratingstatement->execute();
    $ratings = $ratingstatement->fetchAll();

    if (isset($_POST['liked'])) {
        $countcom = $mysqlClient->prepare('UPDATE comments SET likes = likes + 1 WHERE id = :id');

        $countcom->execute([
            'id' => $_POST['liked'],
        ]);

        $addlike = $mysqlClient->prepare('INSERT INTO likes(user_id, comment_id) VALUES (:user_id, :comment_id)');
        
        $addlike->execute([
            'user_id' => $_SESSION['user']['id'],
            'comment_id' => $_POST['liked'],
        ]);
    }
    elseif (isset($_POST['disliked'])) {
        $countcom = $mysqlClient->prepare('UPDATE comments SET likes = likes - 1 WHERE id = :id');

        $countcom->execute([
            'id' => $_POST['disliked'],
        ]);

        $dellike = $mysqlClient->prepare('DELETE FROM likes WHERE user_id = :user_id AND comment_id = :comment_id');
        $dellike->execute([
            'user_id' => $_SESSION['user']['id'],
            'comment_id' => $_POST['disliked'],
        ]);
    }

    

    if (isset($_POST['starone'])) {
        $found = false;
        foreach ($ratings as $rating) {
            if ($rating['liker_id'] == $_SESSION["user"]['id']){
                $found = true;
                break;
            }
        }

        if ($found) {
            $delrate = $mysqlClient->prepare('DELETE FROM ratings WHERE liker_id = :liker_id AND country = :country');
        
            $delrate->execute([
                'liker_id' => $_SESSION['user']['id'],
                'country' => $_POST['starone'],
            ]);
        }

        $addrate = $mysqlClient->prepare('INSERT INTO ratings(liker_id, country, grade) VALUES (:liker_id, :country, :grade)');
        
        $addrate->execute([
            'liker_id' => $_SESSION['user']['id'],
            'country' => $_POST['starone'],
            'grade' => 1,
        ]);
    }

    if (isset($_POST['startwo'])) {
        $found = false;
        foreach ($ratings as $rating) {
            if ($rating['liker_id'] == $_SESSION["user"]['id']){
                $found = true;
                break;
            }
        }

        if ($found) {
            $delrate = $mysqlClient->prepare('DELETE FROM ratings WHERE liker_id = :liker_id AND country = :country');
        
            $delrate->execute([
                'liker_id' => $_SESSION['user']['id'],
                'country' => $_POST['startwo'],
            ]);
        }

        $addrate = $mysqlClient->prepare('INSERT INTO ratings(liker_id, country, grade) VALUES (:liker_id, :country, :grade)');
        
        $addrate->execute([
            'liker_id' => $_SESSION['user']['id'],
            'country' => $_POST['startwo'],
            'grade' => 2,
        ]);
    }

    if (isset($_POST['starthree'])) {
        $found = false;
        foreach ($ratings as $rating) {
            if ($rating['liker_id'] == $_SESSION["user"]['id']){
                $found = true;
                break;
            }
        }

        if ($found) {
            $delrate = $mysqlClient->prepare('DELETE FROM ratings WHERE liker_id = :liker_id AND country = :country');
        
            $delrate->execute([
                'liker_id' => $_SESSION['user']['id'],
                'country' => $_POST['starthree'],
            ]);
        }

        $addrate = $mysqlClient->prepare('INSERT INTO ratings(liker_id, country, grade) VALUES (:liker_id, :country, :grade)');
        
        $addrate->execute([
            'liker_id' => $_SESSION['user']['id'],
            'country' => $_POST['starthree'],
            'grade' => 3,
        ]);
    }

    if (isset($_POST['starfour'])) {
        $found = false;
        foreach ($ratings as $rating) {
            if ($rating['liker_id'] == $_SESSION["user"]['id']){
                $found = true;
                break;
            }
        }

        if ($found) {
            $delrate = $mysqlClient->prepare('DELETE FROM ratings WHERE liker_id = :liker_id AND country = :country');
        
            $delrate->execute([
                'liker_id' => $_SESSION['user']['id'],
                'country' => $_POST['starfour'],
            ]);
        }

        $addrate = $mysqlClient->prepare('INSERT INTO ratings(liker_id, country, grade) VALUES (:liker_id, :country, :grade)');
        
        $addrate->execute([
            'liker_id' => $_SESSION['user']['id'],
            'country' => $_POST['starfour'],
            'grade' => 4,
        ]);
    }

    if (isset($_POST['starfive'])) {
        $found = false;
        foreach ($ratings as $rating) {
            if ($rating['liker_id'] == $_SESSION["user"]['id']){
                $found = true;
                break;
            }
        }

        if ($found) {
            $delrate = $mysqlClient->prepare('DELETE FROM ratings WHERE liker_id = :liker_id AND country = :country');
        
            $delrate->execute([
                'liker_id' => $_SESSION['user']['id'],
                'country' => $_POST['starfive'],
            ]);
        }

        $addrate = $mysqlClient->prepare('INSERT INTO ratings(liker_id, country, grade) VALUES (:liker_id, :country, :grade)');
        
        $addrate->execute([
            'liker_id' => $_SESSION['user']['id'],
            'country' => $_POST['starfive'],
            'grade' => 5,
        ]);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>