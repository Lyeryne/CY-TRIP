<?php 
    session_start();
?>

<?php require_once(__DIR__."/sqlconfig.php") ?>

<?php

    $commentstatement = $mysqlClient->prepare('SELECT * FROM comments WHERE country = "france" ORDER BY likes DESC');
    $commentstatement->execute();
    $comments = $commentstatement->fetchAll();
    

    $likestatement = $mysqlClient->prepare('SELECT * FROM likes');
    $likestatement->execute();
    $likes = $likestatement->fetchAll();

    $ratingstatement = $mysqlClient->prepare('SELECT * FROM ratings WHERE country = "france"');
    $ratingstatement->execute();
    $ratings = $ratingstatement->fetchAll();
?>

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
        <?php require_once(__DIR__."/header.php");?> 

        <main>
            <video autoplay loop muted id="bgvideo">
                <source src="../source/france.mp4">
            </video>
            <div id="playpausebtn"><span>&#9658;</span></div>

            <div class="welcome">
                <h3>Your journey in France begins here !</h3>
            </div>

            <div class="descript">
                    <div class="descriptxt">
                        <h3>History of France</h3>
                        <br>
                        <p>Welcome to France, a dream destination for travellers in search of unforgettable discoveries. Known for its rich cultural heritage, varied landscapes and culinary delights, France is a true invitation to escape. Whether you're drawn to the romance of Paris, the picturesque vineyards of Bordeaux, the sunny beaches of the Côte d'Azur, or the majestic châteaux of the Loire Valley, each region offers a unique and captivating experience. <br> <br> Explore the French way of life, savour exquisite food in Michelin-starred restaurants, and be seduced by the elegance and timeless charm of this fascinating country. Your adventure in France will be much more than just a trip, it will be a total immersion in a world of beauty, culture and passion.</p>
                    </div>
                    <img id="countryico" src="../source/frenchguy.png" alt="countryico">
            </div>

            <div class="advicezone">
            <h3 id=advicetitle>Our Advices</h3> <br>

            <div class="advice1">
                <div class="area Spots">
                    <h3>Spots</h3>

                    <div class="area_spots_one">
                        <p>In this area you will find the best places in France along with their respective addresses.</p>
                        <img id="imgeffeltower" src="../source/effeltower.png" alt="imgeffeltower">
                        <p id="titletower">The Effel Tower</p>
                        <p id="descripttower">Welcome to the Eiffel Tower, the most emblematic symbol of Paris and an architectural marvel that attracts millions of visitors every year. Inaugurated in 1889 for the Universal Exhibition, this majestic iron structure stands 324 metres high and offers a spectacular panoramic view of the City of Light.</p>
                        <a href="https://maps.app.goo.gl/gAzdFa69rzqTFeE3A" target="_blank" id="adresstower">Av. Gustave Eiffel, 75007 Paris</a>
                    </div>

                    <div class="area_spots_two">
                        <img id="imgcytech" src="../source/siteduparc.png" alt="site du parc">
                        <p id="titlecytech">CY TECH</p>
                        <p id="descriptcytech">CY Tech, formerly EISTI, is a leading French public school of science and technology, economics, management, humanities and design, training mainly engineers in computer science, applied mathematics, biotechnology, chemistry and civil engineering.</p>
                        <a href="https://maps.app.goo.gl/vdKkTkYA6h5M7yLH6" target="_blank" id="adresscytech">Av. du Parc, 95000 Cergy</a>
                    </div>

                    <div class="area_spots_three">
                        <img id="imgport" src="../source/vieux_port.png" alt="vieux_port">
                        <p id="titleport">The port of Marseille</p>
                        <p id="descriptport">Experience the timeless charm of Marseille's Old Port, where history meets modernity. Enjoy a traditional bouillabaisse at a quayside café, admire the colorful boats, and soak in the lively atmosphere. With bustling markets, stunning views of Notre-Dame de la Garde, and a unique cultural blend, the Vieux-Port offers an unforgettable Mediterranean experience.</p>
                        <a href="https://maps.app.goo.gl/WSkW8Hv197CkNM9p9" target="_blank" id="adressport">Vieux-Port, 13001 Marseille</a>
                    </div>
                </div>
            </div>

            <div class="advice2">
                <div class="area Dishes">
                    <h3>Restaurants</h3>

                    <div class="area_dishes_one">
                        <p>In this section, you'll find the best dishes and restaurants in France, along with their respective addresses.</p>
                        <img id="imgcedric" src="../source/Cedric_grolet.png" alt="imgeffeltower">
                        <p id="titlecedric">Cedric Grolet Opera Boutique</p>
                        <p id="descripttower">Cédric Grolet, the pastry chef so popular with Parisians and tourists visiting the capital, is opening a brand new boutique x coffee shop in Paris, just a stone's throw from his famous boutique on Avenue de l'Opéra where sweet tooths from all over the world flock day after day. </p>
                        <a href="https://cedric-grolet.com/opera/" target="_blank" id="adresstower">35 avenue de l’Opéra, 75002 Paris</a>
                    </div>

                    <div class="area_dishes_two">
                        <img id="imgnachitos" src="../source/nachitos.jpg" alt="site du parc">
                        <p id="titlenachitos">Nachitos</p>
                        <p id="descriptcytech">Nachitos, the must-try fast-food restaurant in France! Renowned for its exceptional chicken, Nachitos attracts students from all over the country after classes. Whether you're looking for a quick snack or a hearty meal, Nachitos is the place to go for delicious food in a friendly atmosphere.</p><br>
                        <a href="https://www.instagram.com/nachitos_chicken/?hl=fr" target="_blank" id="adresscytech">12 Mail des Cerclades, 95000 Cergy</a>
                    </div>

                    <div class="area_dishes_three">
                        <img id="imggrenouille" src="../source/grenouille.jpg" alt="vieux_port">
                        <p id="titlegrenouille">La Grenouillère</p>
                        <p id="descriptgrenouille"> This Michelin-starred restaurant is run by chef Alexandre Gauthier. It offers creative and refined cuisine in a rustic yet contemporary setting. La Grenouillère is often recognised for its innovation and exceptional quality.</p>
                        <a href="https://lagrenouillere.fr" target="_blank" id="adressport">Rue de la Grenouillère, 62170 La Madelaine-sous-Montreuil</a>
                    </div>
                </div>
            </div>

            <div class="advice3">
                <div class="area Activities">
                    <h3>Activities</h3>

                    <div class="area_activities_one">
                        <p>In this section, you'll find the best activities to do in France, along with their websites for bookings.</p>
                        <img id="imgpeniche" src="../source/peniche_paris.png" alt="imgeffeltower">
                        <p id="titlepeniche">Visit Paris by boat : Peniche</p>
                        <p id="descriptpeniche"> With La Marina, you have the privilege of discovering Paris from another point of view, directly from the Seine. Your cruise programme starts at the foot of the Musée d'Orsay, and you'll embark on a journey full of emotion and surprises aboard our boats.</p>
                        <a href="https://www.marina-de-paris.com/fr/visiter-paris-en-bateau/" target="_blank" id="adresstower">Paris Seine, La Marina</a>
                    </div>

                    <div class="area_activities_two">
                        <img id="imgdisney" src="../source/disneyland.jpg" alt="site du parc">
                        <p id="titledisney">Discover the magic of Disneyland Paris</p>
                        <p id="descriptdisney"> Are you looking for a place to spend a pleasant day with family or friends? Enjoy a stay in our hotel near Disney for a magical holiday, a unique theme park filled with magic for wonderful memories, from the Montbriand hotel in Antony at Marne-La-Valley. Ideal for a magical day out for all the family or with friends!</p><br>
                        <a href="https://hotel-montbriand-antony.com/disneyland-paris/" target="_blank" id="adressdisney">Montbriand Hotel</a>
                    </div>

                    <div class="area_activities_three">
                        <img id="imgcourchevel" src="../source/Courchevel.png" alt="vieux_port">
                        <p id="titlecourchevel">Want to go skiing? Courcheval is waiting for you</p>
                        <p id="descriptcourchevel">The ski resort of Courchevel, in the heart of the Trois Vallées, boasts the largest ski area in the world. With 600 kilometres of pistes, it attracts the average Frenchman as well as Russian oligarchs and Saudi princes. Courchevel has no fewer than 12 luxury hotels at the foot of the slopes, making it one of the most exclusive ski resorts in the world. The resort's regulars include Gérard Depardieu, Lionel Ritchie, Ewan Mc Gregor and even Morocco's King Mohamed V.</p>
                        <a href="https://courchevel.com/fr/le-ski-a-courchevel" target="_blank" id="adressport">Station Courchevel</a>
                    </div>
                </div>
            </div>
        </div>

            <div class="blogzone">
                <h3 id="hubtitle">The Hub</h3>

                <form action="france.php#hubtitle" method="get">
                    <input type="text" maxlength="500" name="search" id="searchbar" class="txtsearch"></input>
                    <button type="submit" id="searchbtn"><img id="searchicon" src="../source/search.png" alt="search"></button>
                </form>

                <div class="hub">
                    <div class="section spots">
                        <h3>Spots</h3>
                            <div class="blog" id="spots">
                                    
                                <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'spots' && isset($_GET['search']) && strpos($comment['content'],$_GET['search']) !== false) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel spots" type="submit" name="delcomspots" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                                <?php echo str_replace($_GET['search'],'<mark>'.$_GET['search'].'</mark>',$comment['content']);?>
                                            </span>
                                    </div>

                                    <?php elseif ($comment['category'] == 'spots' && !isset($_GET['search'])) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel spots" type="submit" name="delcomspots" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                    </div>

                                <?php endif?>
                                <?php endforeach?>

                            </div>

                        <form action="comments.php" method="post">
                            <textarea maxlength="500" class="txtblog" id="txtspots" type="text" name="comfrancespots"></textarea>
                            <div class="btnsize sizespots"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btnspots" >Send</button>
                        </form>
                    </div>

                    <div class="section dishes">
                         <h3>Dishes</h3>
                            <div class="blog" id="dishes">
                                    
                            <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'dishes' && isset($_GET['search']) && strpos($comment['content'],$_GET['search']) !== false) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel dishes" type="submit" name="delcomdishes" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                                <?php echo str_replace($_GET['search'],'<mark>'.$_GET['search'].'</mark>',$comment['content']);?>
                                            </span>
                                    </div>

                                    <?php elseif ($comment['category'] == 'dishes' && !isset($_GET['search'])) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel dishes" type="submit" name="delcomdishes" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                    </div>

                                <?php endif?>
                                <?php endforeach?>

                            </div>

                        <form action="comments.php" method="post">
                            <textarea maxlength="500" class="txtblog" id="txtdishes" type="text" name="comfrancedishes"></textarea>
                            <div class="btnsize sizedishes"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btndishes" >Send</button>
                        </form>
                    </div>
                    
                    <div class="section activities">
                         <h3>Activities</h3>
                            <div class="blog" id="activities">
                                    
                            <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'activities' && isset($_GET['search']) && strpos($comment['content'],$_GET['search']) !== false) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel activities" type="submit" name="delcomactivities" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                                <?php echo str_replace($_GET['search'],'<mark>'.$_GET['search'].'</mark>',$comment['content']);?>
                                            </span>
                                    </div>

                                    <?php elseif ($comment['category'] == 'activities' && !isset($_GET['search'])) :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name'] || $_SESSION['user']['isroot'] == 1): ?>
                                                <form action="comments.php" method="post">
                                                <button class="btndel activities" type="submit" name="delcomactivities" value="<?php echo $comment['id'];?>"> <img src="../source/trash.png" alt="trash"> </button>
                                                </form>
                                            <?php endif;?>

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
                                    </div>

                                <?php endif?>
                                <?php endforeach?>

                            </div>

                        <form action="comments.php" method="post">
                            <textarea maxlength="500" class="txtblog" id="txtactivities" type="text" name="comfranceactivities"></textarea>
                            <div class="btnsize sizeactivities"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btnactivities" >Send</button>
                        </form>
                    </div>
                </div>

                <h3 id="ratetxt">Rate your experience in France : </h3>

                <?php 
                    $found = false;
                    foreach ($ratings as $rating) {
                        if ($rating['liker_id'] == $_SESSION["user"]['id'] && $rating['country'] == "france") {
                            $found = true;
                            $grade = $rating['grade'];
                            break;
                        }
                    }
                    
                    if ($found) :?>

                <form class="rating" action="like.php" method="post">
                        <?php if($grade == 5) :?>
                            <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect_" id="five_">  </button></div>
                        <?php elseif($grade == 4) :?>
                            <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
                        <?php elseif($grade == 3) :?>
                            <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
                        <?php elseif($grade == 2) :?>
                            <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect" id="three"></button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
                        <?php elseif($grade == 1) :?>
                            <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect" id="two">    </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect" id="three"></button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                            <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
                        <?php endif;?>
                </form>

                <?php else :?>

                <form class="rating" action="like.php" method="post">
                        <div class="starborder"><button type="submit" value="france" name="starone" class="star one"><div class="yellowrect" id="one" ></button></div>
                        <div class="starborder"><button type="submit" value="france" name="startwo" class="star two"><div class="yellowrect" id="two">    </button></div>
                        <div class="starborder"><button type="submit" value="france" name="starthree" class="star three"><div class="yellowrect" id="three"></button></div>
                        <div class="starborder"><button type="submit" value="france" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                        <div class="starborder"><button type="submit" value="france" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
                </form>
                <?php endif;?>
                
                <h2 id="average">
                    <?php
                        $av = 0;
                        $count = 0;
                        foreach ($ratings as $rating) {
                            $av += $rating['grade'];
                            $count++;
                        }
                        
                        if ($count == 0) {
                            $av = 0;
                        }
                        else{
                            $av = round($av / $count,1);
                        }

                        echo 'Average rates for France : '.$av.'/5';
                    ?>
                </h2>
            </div>
        </main>   
        
        <?php require_once(__DIR__."/footer.php");?> 
    </body>
</html>