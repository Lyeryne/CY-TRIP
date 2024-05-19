<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../source/france.png">
        <title>France</title>

        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="../style/france.css">

        <script type="text/javascript" src="/script/header_footer.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php require_once(__DIR__."/header.php") ?>    
        </header>

        <main>
            <div>
                <video id="bgvideo" autoplay loop muted>
                    <source src="../source/paris.mp4" type="video/mp4">
                </video>
    
                <button id="controlButton" style="display:none;">&#9658;</button> <!-- Bouton Play/Pause -->
            </div>

            <div class="box1">
                <h3>Votre voyage commence ici en France !</h3>
            </div>

            <div class="box2">
                <h3>L'histoire de la France</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum, quisquam soluta cumque quasi, doloremque vel laborum eligendi assumenda commodi alias officia placeat magni perferendis quas molestiae necessitatibus. Voluptate, tempore?</p>
            </div>

            <div class="box3">
                <h3>Nos formule</h3>
                <ul>
                    <li>Boite1</li>
                    <li>Boite2</li>
                    <li>Boite 3</li>
                </ul>
            </div>
        </main>   
        
        <footer>
            <?php require_once(__DIR__."/footer.php") ?> 
        </footer>
    </body>
</html>