<?php 
    session_start();
?>

<?php require(__DIR__."/sqlconfig.php") ?>

<?php
    $userstatement = $mysqlClient->prepare('SELECT * FROM comments');
    $userstatement->execute();
    $users = $userstatement->fetchAll();

    $commentstatement = $mysqlClient->prepare('SELECT * FROM comments');
    $commentstatement->execute();
    $comments = $commentstatement->fetchAll();
    
    $likestatement = $mysqlClient->prepare('SELECT * FROM likes');
    $likestatement->execute();
    $likes = $likestatement->fetchAll();

    $ratingstatement = $mysqlClient->prepare('SELECT * FROM ratings');
    $ratingstatement->execute();
    $ratings = $ratingstatement->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cy Trip</title>
        <link rel="icon" href="/source/main.png">
        <link rel="stylesheet" type="text/css" href="/style/style.css">
        <link rel="stylesheet" type="text/css" href="/style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="/style/admin.css">

        <script type="text/javascript" src="/script/header_footer.js"></script>
        <script type="text/javascript" src="/script/admin.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once(__DIR__."/header.php") ?> 

        <main>
            <video autoplay loop muted id="bgvideo">
                <source src="../source/travel.mp4">
            </video>
            <div id="playpausebtn"><span>&#9658;</span></div>
            
            <div class="container">
                <?php 
                    foreach ($users as $user) {
                        if ($user["id"] == $_SESSION["user"]["id"]) {
                            $_SESSION['user'] = $user;
                        }
                    }
                ?>
                
                <h1 id="allcoms">All comments</h1>
                <div class="blog"> 
                    <?php foreach ($comments as $comment) :?>
                        
                        <div class="onecom">
                            <div class="pseudlike">
                                <span id="who">
                                    <?php echo $comment['sender'];?>
                                </span>
                                <span id="likes">
                                    <form action="comments.php" method="post">
                                    <button class="btndel <?php echo $comment['category'];?>" type="submit" name="delcom<?php echo $comment['category']; ?>" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                    </form>

                                <form action="like.php" method="post">
                                    <?php foreach ($likes as $like) :?>
                                    <?php if ($like['comment_id'] == $comment['id'] && $like['user_id'] == $_SESSION['user']['id']) :?>
                                        <button type="submit" name="disliked" value="<?php echo $comment['id'];?>" style="opacity:1;" class="filled"></button>
                                    <?php else :?>
                                        <button type="submit" name="liked" value="<?php echo $comment['id'];?>" style="opacity:0;" class="filled"></button>
                                    <?php endif?>
                                    <?php endforeach?>
                                </form>
                                
                                <button class="empty"></button>
                                <span class="likenb"><?php echo $comment['likes'];?></span>
                                </span>
                            </div>
                            <span id="com">
                                <?php echo $comment['content'];?>
                            </span>
                            <span id="loc">
                            <a href="<?php echo $comment['country'].".php"."#hubtitle"; ?>">
                                    <?php echo "In ".$comment['country'];?>
                                    <?php echo $comment['category'];?>
                                </a>
                            </span>
                        </div>

                    <?php endforeach?>
                </div>

                <h1 id="alllikes">All likes</h1>
                <div class="bloglikes"> 
                    <?php foreach ($likes as $like) :?>
                        
                        <div class="onecom">
                            <div class="pseudlike">
                                <span id="who">
                                    <?php foreach($users as $user) {
                                        if ($user['id'] == $like['user_id']){
                                            echo $user['user_name'];
                                        }
                                        }
                                     ?>
                                </span>
                                    <form action="like.php" method="post">
                                    <button class="btndel" type="submit" name="dellike" value="<?php echo $like['user_id'].'_'.$like['comment_id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                    </form>
                            </div>
                            <span id="com">
                                <?php 
                                    echo "user id=".$like['user_id']." liked id=".$like["comment_id"]." comment";
                                ?>
                            </span>
                        </div>

                    <?php endforeach?>
                </div>

                <h1 id="allrates">All rates</h1>
                <div class="blogrates"> 
                    <?php foreach ($ratings as $rating) :?>
                        
                        <div class="onecom">
                            <div class="pseudlike">
                                <span id="who">
                                    <?php foreach($users as $user) {
                                        if ($user['id'] == $rating['liker_id']){
                                            echo $user['user_name'];
                                        }
                                        }
                                     ?>
                                </span>
                                    <form action="like.php" method="post">
                                    <button class="btndel" type="submit" name="delrate" value="<?php echo $rating['liker_id'].'_'.$rating['country'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                    </form>
                            </div>
                            <span id="com">
                                <?php 
                                    echo "user id=".$rating['liker_id']." rated ".$rating["country"]." country : ".$rating['grade']."/5";
                                ?>
                            </span>
                        </div>

                    <?php endforeach?>
                </div>

                <h1 id="allusers">All users</h1>
                <div class="blogusers"> 
                    <?php foreach ($users as $user) :?>
                        
                        <div class="onecom">
                            <div class="pseudlike">
                                <span id="who">
                                    <?php echo $user['user_name'];?>
                                </span>
                                <?php if($user['id'] != 1): ?>
                                    <form action="like.php" method="post">
                                    <button class="btndel" type="submit" name="deluser" value="<?php echo $user['id']?>"> <img src="../source/trash.png" alt="trash"> </button>
                                    </form>
                                <?php endif;?>
                            </div>
                            <span id="com">
                                <?php 
                                    echo "user id=".$user['id']."; email= ".$user['user_email']."; password= ".$user["user_password"];
                                ?>
                            </span>
                        </div>

                    <?php endforeach?>
                </div>

        </main>

        <script type="text/javascript" src="/script/login_signup.js"></script>
        <?php require_once(__DIR__."/footer.php") ?> 
    </body>
</html>
