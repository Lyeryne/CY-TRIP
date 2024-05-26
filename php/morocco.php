<?php 
    session_start();
?>

<?php require_once(__DIR__."/sqlconfig.php") ?>

<?php

    $commentstatement = $mysqlClient->prepare('SELECT * FROM comments WHERE country = "morocco" ORDER BY likes DESC');
    $commentstatement->execute();
    $comments = $commentstatement->fetchAll();

    $likestatement = $mysqlClient->prepare('SELECT * FROM likes');
    $likestatement->execute();
    $likes = $likestatement->fetchAll();

    $ratingstatement = $mysqlClient->prepare('SELECT * FROM ratings WHERE country = "morocco"');
    $ratingstatement->execute();
    $ratings = $ratingstatement->fetchAll();
?>

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
    <?php require_once(__DIR__."/header.php") ?> 
 

    <main>
        <video autoplay loop muted id="bgvideo">
                <source src="../source/morroco.mp4">
            </video>
            <div id="playpausebtn"><span>&#9658;</span></div>

        <div class="welcome">
            <h3>Your journey in Morocco begins here !</h3>
        </div>

        <div class="descript">
            <div class="descriptxt">
                <h3>Discover Morocco !</h3>
                <br>
                <p>Discover Morocco, a land of contrasts and cultural riches, bewitching travellers with its unique blend of ancient traditions and vibrant modernity. From the labyrinthine streets of the medinas of Marrakech and Fez to the vast desert expanses of the Sahara, Morocco offers an unforgettable adventure around every corner. Immerse yourself in the bustle of the souks, where spices, fabrics and local crafts awaken your senses, and savour Moroccan cuisine renowned for its exquisite flavours, from couscous to spicy tajines. <br> <br>Whether you're drawn to the sun-drenched beaches of Al Hoceima, the majestic mountains of the Atlas, or the hidden oases of the desert valleys, Morocco is a destination that promises fascinating discoveries and unforgettable memories. Let yourself be seduced by the warm hospitality of its inhabitants and prepare to experience an authentic and rewarding adventure.</p>
            </div>
            <img id="countryico" src="../source/moroccanguy.png" alt="countryico">
        </div>

        <div class="advicezone">
            <h3 id=advicetitle>Our Advices</h3> <br>

            <div class="advice1">
                <div class="area Spots">
                    <h3>Spots</h3>

                    <div class="area_spots_one">
                        <p>In this area you will find the best places in Marocco along with their respective addresses.</p>
                        <img id="imgealhoceima" src="../source/alhoceima.jpg" alt="alhoceima">
                        <p id="titlealhoceima">Quemado beach Al Hoceima</p>
                        <p id="descriptalhoceima">Al Hoceïma (northern Morocco) is the seventh most beautiful city in the world in terms of the beauty of its beaches, according to a ranking carried out by the World Guide to Urban Cities.Among the most beautiful beaches in Al Hoceïma is the Quemado beach, at the foot of the cliff bearing the same name. This magnificent beach, with its exceptionally fine sand.</p>
                        <a href="https://www.google.com/maps/place/Plage+Quemado/@35.2442162,-3.9260564,18z/data=!3m1!4b1!4m6!3m5!1s0xd7431f4a51bc33d:0x150a66cd4536c244!8m2!3d35.2445577!4d-3.9264909!16s%2Fg%2F1tkp6b7p?hl=fr&entry=ttu" target="_blank" id="adressalhoceima">Beach Quemado, Av. Mohamed V, Al Hoceïma 32000</a>
                    </div>

                    <div class="area_spots_two">
                        <img id="imgatlas" src="../source/atlas.jpg" alt="atlas">
                        <p id="titleatlas">The High Atlas, North Africa’s greatest mountain</p>
                        <p id="descriptatlas">The High Atlas Mountains in Morocco are a majestic and breathtaking range that offers visitors a chance to experience the country's rugged and beautiful landscape. The mountain range runs through central Morocco and is home to some of the country's highest peaks.A popular destination for hikers and climbers.</p>
                        <a href="https://www.google.com/maps/place/Atlas+Mountains+Hikes/@31.1373592,-7.9159103,17z/data=!3m1!4b1!4m6!3m5!1s0xdb00f1c880e37b7:0x469980df6cab108a!8m2!3d31.1373592!4d-7.9159103!16s%2Fg%2F11v10tt0jt?hl=fr&entry=ttu" target="_blank" id="adressatlas"> <br>Imlil, Asni</a>
                    </div>

                    <div class="area_spots_three">
                        <img id="imgmajorelle" src="../source/marjorelle.png" alt="majorelle">
                        <p id="titlemajorelle">The Majorelle Garden</p>
                        <p id="descriptmajorelle">The Majorelle Garden is a botanical garden for tourists with around 300 species spread over almost 1 hectare, an Art Deco villa awarded the Maisons des Illustres label in 2011, and a museum of Berber history, in Marrakech, Morocco. The garden is named after its founder, the French painter Jacques Majorelle, who created it in 1931, inspired by oases, Islamic gardens and Spanish-Hispano-Moorish gardens.</p>
                        <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xdafee878b66b78f:0x88ccf6c9ced0f11c?sa=X&ved=1t:8290&ictx=111" target="_blank" id="adressmajorelle">Rue Yves St Laurent, Marrakech 40090, Maroc</a>
                    </div>
                </div>
            </div>

            <div class="advice2">
                <div class="area Dishes">
                    <h3>Restaurants</h3>

                    <div class="area_dishes_one">
                        <p>In this section, you'll find the best dishes and restaurants in Marocco, along with their respective addresses.</p>
                        <img id="imgamandine" src="../source/amandine.jpg" alt="amandine">
                        <p id="titleamandine">Amandine's delight</p>
                        <p id="descriptamandine">Look no further than Amandine for some of the best pastries in Marrakech. The patisserie sells both French and Moroccan pastries and cookies, and there’s a full drink menu if you’d like to sit and stay awhile. Order a plate of mixed Moroccan cookies, particularly the sweet briouat, and pair it with a French pastry such as the religieuse a choux filled with caramel cream and topped with more caramel drizzle. </p>
                        <a href="https://plus61.com" target="_blank" id="adressamandine">177 Rue Mohammed Al Béqal, Marrakech 40000</a>
                    </div>

                    <div class="area_dishes_two">
                        <img id="imgzellij" src="../source/darzellij.png" alt="baga">
                        <p id="titlezellij">Dar Zellij</p>
                        <p id="descriptzellij">Dining at Dar Zellij is much more than a meal - it's a real cultural immersion! The staff, dressed in traditional garb, welcome you with warm Moroccan hospitality. In the evening, you can also enjoy live music with performances by gnawa musicians or oud players, adding a magical touch to your evening.</p><br>
                        <a href="https://marrakech-riads.com/restaurant-dar-zellij/" target="_blank" id="adresszellij">8 Derb Chorfa Lakbir - Marrakesh 40030</a>
                    </div>

                    <div class="area_dishes_three">
                        <img id="imgjardin" src="../source/imgjardin.png" alt="Le_jardin">
                        <p id="titlejardin">Le Jardin</p>
                        <p id="descriptjardin">Discover Le Jardin in Marrakech, an enchanting restaurant nestled in a magnificent garden. Enjoy delicious fresh fruit and natural juices in a peaceful, verdant setting. Enjoy this unique taste experience during your visit to Marrakech!</p>
                        <a href="https://lejardinmarrakech.com/fr/" target="_blank" id="adressjardin">32 Souk Sidi Abdelaziz, Marrakech</a>
                    </div>
                </div>
            </div>
            
            <div class="advice3">
                <div class="area Activities">
                    <h3>Activities</h3>

                    <div class="area_activities_one">
                        <p>In this section, you'll find the best activities to do in Marocco, along with their websites for bookings.</p>
                        <img id="imgdesert" src="../source/desert.jpg" alt="desert">
                        <p id="titledesert">Private Morocco Tours, Night Desert Camp</p>
                        <p id="descriptdesert">This Marrakech desert tour allow you to combine Erg Chigaga dunes with the best Sahara desert destination and the wildest one exploring Dades Gorge and Todra Gorge.</p>
                        <a href="https://listing.visitdraatafilalet.com/listing/details/chegaga-dunes-adventure" target="_blank" id="adressdesert">Chegaga Dunues Adventure</a>
                    </div>

                    <div class="area_activities_two">
                        <img id="imgessaouira" src="../source/essaouira.png" alt="essaouira">
                        <p id="titleessaouira">Surfing on Essaouira's Beaches</p>
                        <p id="descriptessaouira">Essaouira, the jewel of Morocco's Atlantic coast, offers consistent waves and winds that are perfect for surfing. Imagine gliding past a UNESCO-listed medina in a relaxed, bohemian atmosphere. Whether you're a beginner or an expert, beaches such as Sidi Kaouki and Moulay Bouzerktoun await you. Come and discover why Essaouira is a must-see destination for surfers!</p><br>
                        <a href="https://maps.app.goo.gl/UK1vxyxUEeCFw9Bi7" target="_blank" id="adressessaouira">Essaouira Beaches, 212 Maroc</a>
                    </div>

                    <div class="area_activities_three">
                        <img id="imgtoubkal" src="../source/toubkal.jpg" alt="toubkal">
                        <p id="titletoubkal">Climbing Mount Toubkal</p>
                        <p id="descripttoubkal">Experience the ultimate adventure by climbing Mount Toubkal, North Africa's highest peak. In two days, traverse breathtaking landscapes, sleep in a mountain refuge and admire a spectacular sunrise at the summit. An unforgettable experience for hiking and nature lovers!</p>
                        <a href="https://maps.app.goo.gl/m84no5K2EKBUwUk99" target="_blank" id="adresstoubkal">High Atlas Coordinates</a>
                    </div>
                </div>
            </div>
        </div>        

        <div class="blogzone">
                <h3 id="hubtitle">The Hub</h3>

                <form action="morocco.php#hubtitle" method="get">
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
                            <textarea maxlength="500" class="txtblog" id="txtspots" type="text" name="commoroccospots"></textarea>
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
                            <textarea maxlength="500" class="txtblog" id="txtdishes" type="text" name="commoroccodishes"></textarea>
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
                            <textarea maxlength="500" class="txtblog" id="txtactivities" type="text" name="commoroccoactivities"></textarea>
                            <div class="btnsize sizeactivities"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btnactivities" >Send</button>
                        </form>
                    </div>
                </div>

                <h3 id="ratetxt">Rate your experience in Morocco : </h3>

                <?php 
                    $found = false;
                    foreach ($ratings as $rating) {
                        if ($rating['liker_id'] == $_SESSION["user"]['id'] && $rating['country'] == "morocco") {
                            $found = true;
                            $grade = $rating['grade'];
                            break;
                        }
                    }
                    
                    if ($found) :?>

                <form class="rating" action="like.php" method="post">
                        <?php if($grade == 5) :?>
                            <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect_" id="five_">  </button></div>
                        <?php elseif($grade == 4) :?>
                            <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 3) :?>
                            <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 2) :?>
                            <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 1) :?>
                            <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php endif;?>
                </form>

                <?php else :?>

                <form class="rating" action="like.php" method="post">
                        <div class="starborder"><button type="submit" value="morocco" name="starone" class="star one"><div class="yellowrect" id="one" ></button></div>
                        <div class="starborder"><button type="submit" value="morocco" name="startwo" class="star two"><div class="yellowrect" id="two">    </button></div>
                        <div class="starborder"><button type="submit" value="morocco" name="starthree" class="star three"><div class="yellowrect" id="three"></button></div>
                        <div class="starborder"><button type="submit" value="morocco" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                        <div class="starborder"><button type="submit" value="morocco" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
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

                        echo 'Average rates for Morocco : '.$av.'/5';
                    ?>
                </h2>
            </div>
    </main>

    <?php require_once(__DIR__."/footer.php") ?> 
</body>

</html>