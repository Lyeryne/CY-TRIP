<?php require_once(__DIR__."/sqlconfig.php") ?>

<?php

    $commentstatement = $mysqlClient->prepare('SELECT * FROM comments WHERE country = "spain" ORDER BY likes DESC');
    $commentstatement->execute();
    $comments = $commentstatement->fetchAll();

    $likestatement = $mysqlClient->prepare('SELECT * FROM likes');
    $likestatement->execute();
    $likes = $likestatement->fetchAll();

    $ratingstatement = $mysqlClient->prepare('SELECT * FROM ratings WHERE country = "spain"');
    $ratingstatement->execute();
    $ratings = $ratingstatement->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../source/spain.png">
    <title>Spain</title>

    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/header_footer.css">
    <link rel="stylesheet" type="text/css" href="../style/spain.css">

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
                <source src="../source/spain.mp4">
            </video>
            <div id="playpausebtn"><span>&#9658;</span></div>

        <div class="welcome">
            <h3>Your journey in Spain begins here !</h3>
        </div>

        <div class="descript">
            <div class="descriptxt">
                <h3>History of Spain</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum, quisquam soluta cumque quasi, doloremque vel laborum eligendi assumenda commodi alias officia placeat magni perferendis quas molestiae necessitatibus. Voluptate, tempore?</p>
            </div>
            <img id="countryico" src="../source/spanishgirl.png" alt="countryico">
        </div>

        <div class="blogzone">
                <h3 id="hubtitle">The Hub</h3>

                <div class="hub">
                    <div class="section spots">
                        <h3>Spots</h3>
                            <div class="blog" id="spots">
                                    
                                <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'spots') :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name']): ?>
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
                            <textarea maxlength="500" class="txtblog" id="txtspots" type="text" name="comspainspots"></textarea>
                            <div class="btnsize sizespots"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btnspots" >Send</button>
                        </form>
                    </div>

                    <div class="section dishes">
                         <h3>Dishes</h3>
                            <div class="blog" id="dishes">
                                    
                                <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'dishes') :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name']): ?>
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
                            <textarea maxlength="500" class="txtblog" id="txtdishes" type="text" name="comspaindishes"></textarea>
                            <div class="btnsize sizedishes"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btndishes" >Send</button>
                        </form>
                    </div>
                    
                    <div class="section activities">
                         <h3>Activities</h3>
                            <div class="blog" id="activities">
                                    
                                <?php foreach ($comments as $comment) :
                                    if ($comment['category'] == 'activities') :?>
                                 
                                    <div class="onecom">
                                        <div class="pseudlike">
                                            <span id="who">
                                                <?php echo $comment['sender'];?>
                                            </span>
                                            <span id="likes">

                                            <?php if($comment["sender"] == $_SESSION['user']['user_name']): ?>
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
                            <textarea maxlength="500" class="txtblog" id="txtactivities" type="text" name="comspainactivities"></textarea>
                            <div class="btnsize sizeactivities"><img src="../source/openicon.png" alt="openicon"></div>
                            <button type="submit" class="btnblog" id="btnactivities" >Send</button>
                        </form>
                    </div>
                </div>

                <h3 id="ratetxt">Rate your experience in Spain : </h3>

                <?php 
                    $found = false;
                    foreach ($ratings as $rating) {
                        if ($rating['liker_id'] == $_SESSION["user"]['id'] && $rating['country'] == "spain") {
                            $found = true;
                            $grade = $rating['grade'];
                            break;
                        }
                    }
                    
                    if ($found) :?>

                <form class="rating" action="like.php" method="post">
                        <?php if($grade == 5) :?>
                            <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect_" id="five_">  </button></div>
                        <?php elseif($grade == 4) :?>
                            <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect_" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 3) :?>
                            <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect_" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 2) :?>
                            <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect_" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php elseif($grade == 1) :?>
                            <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect_" id="one_" ></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect" id="two_">    </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect" id="three_"></button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect" id="four_">  </button></div>
                            <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect" id="five_">  </button></div>
                        <?php endif;?>
                </form>

                <?php else :?>

                <form class="rating" action="like.php" method="post">
                        <div class="starborder"><button type="submit" value="spain" name="starone" class="star one"><div class="yellowrect" id="one" ></button></div>
                        <div class="starborder"><button type="submit" value="spain" name="startwo" class="star two"><div class="yellowrect" id="two">    </button></div>
                        <div class="starborder"><button type="submit" value="spain" name="starthree" class="star three"><div class="yellowrect" id="three"></button></div>
                        <div class="starborder"><button type="submit" value="spain" name="starfour" class="star four"><div class="yellowrect" id="four">  </button></div>
                        <div class="starborder"><button type="submit" value="spain" name="starfive" class="star five"><div class="yellowrect" id="five">  </button></div>
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

                        echo 'Average rates for Spain : '.$av.'/5';
                    ?>
                </h2>
            </div>
    </main>

    <?php require_once(__DIR__."/footer.php") ?> 
</body>

</html>