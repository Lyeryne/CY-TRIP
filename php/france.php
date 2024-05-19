<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../source/france.png">
        <title>France</title>

        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="../style/france.css">

        <script type="text/javascript" src="/script/header_footer.js"></script>
        <script type="text/javascript" src="/script/france.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php require_once(__DIR__."/header.php") ?>    
        </header>

        <main>
            <video id="bgvideo" autoplay loop muted>
                <source src="../source/paris.mp4" type="video/mp4">
            </video>
    
            <button id="controlButton">&#9658;</button> <!-- Bouton Play/Pause -->

            <div class="welcome">
                <h3>Your travel in France begins here !</h3>
            </div>

            <div class="descript">
                    <div class="descriptxt">
                        <h3>French History</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum, quisquam soluta cumque quasi, doloremque vel laborum eligendi assumenda commodi alias officia placeat magni perferendis quas molestiae necessitatibus. <br><br>Voluptate, tempore?</p>
                    </div>
                    <img id="frguy" src="../source/frenchguy.png" alt="frenchguy">
            </div>

            <div class="blogzone">
                <h3 id="hubtitle">The Hub</h3>

                <div class="hub">
                    <div class="section spots">
                        <h3>Spots</h3>

                    </div>
                    <div class="section dishes">
                        <h3>Dishes</h3>

                    </div>
                    <div class="section activities">
                        <h3>Activities</h3>

                    </div>
                </div>

                <h3 id="ratetxt">Rate my experience : </h3>

                <div class="rating">
                        <div class="starborder"><div class="star"></div><div class="yellowrect one"  ></div></div>
                        <div class="starborder"><div class="star"></div><div class="yellowrect two"  ></div></div>
                        <div class="starborder"><div class="star"></div><div class="yellowrect three"></div></div>
                        <div class="starborder"><div class="star"></div><div class="yellowrect four" ></div></div>
                        <div class="starborder"><div class="star"></div><div class="yellowrect five" ></div></div>
                </div>
            </div>
        </main>   
        
        <footer>
            <?php require_once(__DIR__."/footer.php") ?> 
        </footer>
    </body>
</html>