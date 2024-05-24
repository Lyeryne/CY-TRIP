<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cy Trip</title>
        <link rel="icon" href="/source/main.png">
        <link rel="stylesheet" type="text/css" href="/style/style.css">
        <link rel="stylesheet" type="text/css" href="/style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="/style/profile.css">

        <script type="text/javascript" src="/script/profile.js"></script>

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
            
            <div class="container" id="container">
            <form method="post" action="logout.php">
                <button id="logoutbtn" type="submit">Déconnexion</button>
            </form>
            </div>

        </main>

        <script type="text/javascript" src="/script/login_signup.js"></script>
        <?php require_once(__DIR__."/footer.php") ?> 
    </body>
</html>
