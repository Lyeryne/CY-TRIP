<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cy Trip</title>
        <link rel="icon" href="/source/main.png">
        <link rel="stylesheet" type="text/css" href="/style/style.css">
        <link rel="stylesheet" type="text/css" href="/style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="/style/map.css">

        <script type="text/javascript" src="/script/map.js"></script>
        <script type="text/javascript" src="/script/header_footer.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once(__DIR__."/php/header.php") ?> 

        <main>
            <div class="map"> 
                <img id="worldmap" src="/source/worldmap.jpg" alt="worldmap">

                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/france.php">
                        <div class="france">
                            <div class="FR name">France</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="france">
                            <div class="FR name">France</div>
                        </div>
                    </a>
                <?php endif ?>

                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/spain.php">
                        <div class="spain">
                            <div class="SP name">Spain</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="spain">
                            <div class="SP name">Spain</div>
                        </div>
                    </a>
                <?php endif ?>

                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/japan.php">
                        <div class="japan">
                            <div class="JP name">Japan</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="japan">
                            <div class="JP name">Japan</div>
                        </div>
                    </a>
                <?php endif ?>

                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/australia.php">
                        <div class="australia">
                            <div class="AU name">Australia</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="australia">
                            <div class="AU name">Australia</div>
                        </div>
                    </a>
                <?php endif ?>
                    
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/germany.php">
                        <div class="germany">
                            <div class="GE name">Germany</div>
                        </div>
                    </a>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="germany">
                            <div class="GE name">Germany</div>
                        </div>
                    </a>
                <?php endif ?>
                    
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/morocco.php">
                        <div class="morocco">
                            <div class="MR name">Morocco</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="morocco">
                            <div class="MR name">Morocco</div>
                        </div>
                    </a>
                <?php endif ?>
                    
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/usa.php">
                        <div class="usa">
                            <div class="USA name">USA</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="usa">
                            <div class="USA name">USA</div>
                        </div>
                    </a>
                <?php endif ?>

                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/russia.php">
                        <div class="russia">
                            <div class="RU name">Russia</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="russia">
                            <div class="RU name">Russia</div>
                        </div>
                    </a>
                <?php endif ?>
                    
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/brasil.php">
                        <div class="brasil">
                            <div class="BR name">Brasil</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="brasil">
                            <div class="BR name">Brasil</div>
                        </div>
                    </a>
                <?php endif ?>
                    
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="/php/southafrica.php">
                        <div class="southafrica">
                            <div class="SA name">South<br>Africa</div>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="/php/login_signup.php">
                        <div class="southafrica">
                            <div class="SA name">South<br>Africa</div>
                        </div>
                    </a>
                <?php endif ?>

            </div>
        </main>

        <?php require_once(__DIR__."/php/footer.php") ?> 
    </body>
</html>