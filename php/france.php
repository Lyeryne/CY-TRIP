<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../source/france.png">
        <title>France</title>

        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="../style/france.css">

        <script type="text/javascript" src="/script/header_footer.js"></script>
        <script type="text/javascript" src="/script/country.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php require_once(__DIR__."/header.php") ?>    
        </header>

        <main>
            <div id="bgvideo">
                <iframe id="videasPlayer" src="https://app.videas.fr/embed/media/3ecac973-95c2-4881-a757-7ba481d4559e/?autoplay=1&loop=1&muted=1&background=1" frameborder="0"></iframe>
            </div>

            <div class="welcome">
                <h3>Your journey in France begins here !</h3>
            </div>

            <div class="descript">
                    <div class="descriptxt">
                        <h3>History of France</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum, quisquam soluta cumque quasi, doloremque vel laborum eligendi assumenda commodi alias officia placeat magni perferendis quas molestiae necessitatibus. <br><br>Voluptate, tempore?</p>
                    </div>
                    <img id="countryico" src="../source/frenchguy.png" alt="countryico">
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

                <h3 id="ratetxt">Rate your experience in France : </h3>

                <div class="rating">
                        <div class="starborder"><div class="star one"><div class="yellowrect" id="one"></div></div></div>
                        <div class="starborder"><div class="star two"><div class="yellowrect" id="two"></div></div></div>
                        <div class="starborder"><div class="star three"><div class="yellowrect" id="three"></div></div></div>
                        <div class="starborder"><div class="star four"><div class="yellowrect" id="four"></div></div></div>
                        <div class="starborder"><div class="star five"><div class="yellowrect" id="five"></div></div></div>
                </div>
            </div>
        </main>   
        
        <footer>
            <?php require_once(__DIR__."/footer.php") ?> 
        </footer>
    </body>
</html>