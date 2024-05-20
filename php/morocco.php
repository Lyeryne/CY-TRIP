<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../source/morocco.png">
    <title>Morocco</title>

    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/header_footer.css">
    <link rel="stylesheet" type="text/css" href="../style/morocco.css">

    <script type="text/javascript" src="/script/header_footer.js"></script>
    <script type="text/javascript" src="/script/country.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once(__DIR__ . "/header.php") ?>

    <main>
        <div id="bgvideo">
            <iframe id="videasPlayer" src="https://app.videas.fr/embed/media/b5ff3975-6527-4079-8872-df1e34f068b4/?autoplay=1&loop=1&muted=1&controls=0" frameborder="0"></iframe>
            <div class="hidecursor"></div>
        </div>

        <div class="welcome">
            <h3>Your journey in Morocco begins here !</h3>
        </div>

        <div class="descript">
            <div class="descriptxt">
                <h3>History of Morocco</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum, quisquam soluta cumque quasi, doloremque vel laborum eligendi assumenda commodi alias officia placeat magni perferendis quas molestiae necessitatibus. <br><br>Voluptate, tempore?</p>
            </div>
            <img id="countryico" src="../source/moroccanguy.png" alt="countryico">
        </div>

        <div class="blogzone">
            <h3 id="hubtitle">The Hub</h3>

            <div class="hub">
                <div class="section spots">
                    <h3>Spots</h3>
                    <form method="POST" action="submit_form_spots.php" enctype="multipart/form-data">
                        <!-- Ajout des champs email et message -->
                        <!-- [...] -->
                        <!-- Ajout champ d'upload ! -->
                        <!-- <div class="mb-3">
                            <label for="screenshot" class="form-label">Votre capture d'écran</label>
                            <input type="file" class="form-control" id="screenshot" name="screenshot" />
                        </div>
                        Fin ajout du champ -->
                        <!--<button type="submit" class="btn btn-primary">Envoyer</button> -->
                    </form>


                </div>
                <div class=" section dishes">
                    <h3>Dishes</h3>
                    <form method="POST" action="submit_form_dishes.php" enctype="multipart/form-data"></form>


                </div>
                <div class=" section activities">
                    <h3>Activities</h3>
                    <form method="POST" action="submit_form_activities.php" enctype="multipart/form-data"></form>

                </div>
            </div>

            <h3 id="ratetxt">Rate your experience in Morocco : </h3>

            <div class="rating">
                <div class="starborder">
                    <div class="star one">
                        <div class="yellowrect" id="one"></div>
                    </div>
                </div>
                <div class="starborder">
                    <div class="star two">
                        <div class="yellowrect" id="two"></div>
                    </div>
                </div>
                <div class="starborder">
                    <div class="star three">
                        <div class="yellowrect" id="three"></div>
                    </div>
                </div>
                <div class="starborder">
                    <div class="star four">
                        <div class="yellowrect" id="four"></div>
                    </div>
                </div>
                <div class="starborder">
                    <div class="star five">
                        <div class="yellowrect" id="five"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once(__DIR__ . "/footer.php") ?>
    </footer>
</body>

</html>