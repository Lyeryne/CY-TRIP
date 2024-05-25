<header>
    
    <?php 
        try
        {
            $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=cy-trip;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        $userstatement = $mysqlClient->prepare('SELECT * FROM users');
        $userstatement->execute();
        $users = $userstatement->fetchAll();
        
        foreach ($users as $user) {
            if ($user["id"] == $_SESSION["user"]["id"]) {
                $_SESSION['user'] = $user;
            }
        }
    ?>

    <a href="/index.php "><img id="logoheader" src="../source/icon.png" alt="icon"></a>

    <div id="bar"></div>

    <?php if (isset($_SESSION['user']['user_name'])) : ?>
        <h2>Welcome <?php echo $_SESSION['user']['user_name']?></h2>
    <?php else :?>
        <h2>Log in to start travelling</h2>
    <?php endif?>


    <nav>
        <button id="btncountries">Countries <img id="openicon" src="../source/openicon.png" alt="openicon"></button>
        <?php if (isset($_SESSION['user']['user_name'])) :?>
            <a href="/php/profile.php">Your profile</a>
        <?php else :?>
            <a href="/php/login_signup.php">Log in / Sign up</a>
        <?php endif?>
        
    </nav>
</header>

<?php 
    $countries = ["france", "spain", "morocco"] ;
    $otherones = ["japan", "australia", "germany", "usa", "russia", "brasil", "south africa"] ;
?>

<div class="menu-deroulant">
    <?php foreach ($countries as $country) :?>
        <a class="countryslot" <?php if(isset($_SESSION['user'])) : echo "href=\"/php/".$country.".php\""; else : echo "href=\"/php/login_signup.php\""; endif;?>><span id="countryname"><?php echo ucfirst($country)?></span> <img id="openicon2" src="../source/openicon.png" alt="openicon"></a>
    <?php endforeach?>

    <?php foreach ($otherones as $otherone) :?>
        <a class="countryslot" <?php if(isset($_SESSION['user'])) : echo "href=\"/index.php\""; else : echo "href=\"/php/login_signup.php\""; endif;?>><span id="countryname"><?php echo ucfirst($otherone)?></span> <img id="openicon2" src="../source/openicon.png" alt="openicon"></a>
    <?php endforeach?>
</div>