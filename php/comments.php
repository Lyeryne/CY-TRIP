<?php 
    session_start();

    require_once(__DIR__."/sqlconfig.php");

    if (isset($_POST['comfrancespots'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "france",
            "category"=> "spots",
            "content"=> $_POST['comfrancespots'],
        ]);
    }

    if (isset($_POST['comfrancedishes'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "france",
            "category"=> "dishes",
            "content"=> $_POST['comfrancedishes'],
        ]);
    }

    if (isset($_POST['comfranceactivities'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "france",
            "category"=> "activities",
            "content"=> $_POST['comfranceactivities'],
        ]);
    }

    if (isset($_POST['comspainspots'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "spain",
            "category"=> "spots",
            "content"=> $_POST['comspainspots'],
        ]);
    }

    if (isset($_POST['comspaindishes'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "spain",
            "category"=> "dishes",
            "content"=> $_POST['comspaindishes'],
        ]);
    }

    if (isset($_POST['comspainactivities'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "spain",
            "category"=> "activities",
            "content"=> $_POST['comspainactivities'],
        ]);
    }

    if (isset($_POST['commoroccospots'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "morocco",
            "category"=> "spots",
            "content"=> $_POST['commoroccospots'],
        ]);
    }

    if (isset($_POST['commoroccodishes'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "morocco",
            "category"=> "dishes",
            "content"=> $_POST['commoroccodishes'],
        ]);
    }

    if (isset($_POST['commoroccoactivities'])) {
        $addcom = $mysqlClient->prepare('INSERT INTO comments(sender, country, category, content) VALUES (:sender, :country, :category, :content)');
        
        $addcom->execute([
            "sender"=> $_SESSION["user"]['user_name'],
            "country"=> "morocco",
            "category"=> "activities",
            "content"=> $_POST['commoroccoactivities'],
        ]);
    }

    if (isset($_POST['delcomspots'])) {
        $delcom = $mysqlClient->prepare('DELETE FROM comments WHERE id = :id');

        $delcom->execute([
            'id' => $_POST['delcomspots'],
        ]);
    }

    if (isset($_POST['delcomdishes'])) {
        $delcom = $mysqlClient->prepare('DELETE FROM comments WHERE id = :id');

        $delcom->execute([
            'id' => $_POST['delcomdishes'],
        ]);
    }

    if (isset($_POST['delcomactivities'])) {
        $delcom = $mysqlClient->prepare('DELETE FROM comments WHERE id = :id');

        $delcom->execute([
            'id' => $_POST['delcomactivities'],
        ]);
    }


    header('Location: ' . $_SERVER['HTTP_REFERER'].'#hubtitle');
    exit();
?>