<header>
    <a href="/index.php"><img id="logoheader" src="../source/icon.png" alt="icon"></a>

    <div id="bar"></div>

    <?php if (!isset($_SESSION['username'])) : ?>
        <h2>Log in to start travelling</h2>
    <?php endif?>

    <?php if (isset($_SESSION['username'])) : ?>
        <h2>Welcome <?php echo $_SESSION['username'] ?></h2>
    <?php endif?>


    <nav>
        <button id="btncountries">Countries <img id="openicon" src="../source/openicon.png" alt="openicon"></button>
        <?php if (!isset($_SESSION['username'])) : ?>
            <a href="/php/login_signup.php">Log in / Sign up</a>
        <?php endif?>

        <?php if (isset($_SESSION['username'])) : ?>
            <a href="/php/profile.php">Your profile</a>
        <?php endif?>
        
    </nav>
</header>

<?php 
    $countries = ["france", "spain", "japan", "australia", "germany", "morocco", "usa", "russia", "brasil", "south africa"] ;
?>

<div class="menu-deroulant">
    <?php foreach ($countries as $country) : ?>
        <!-- juste en dessous le ici -> v //// c'est à des fins experimentaux bien penser à le re switch en isset pour la vfinale  -->
        <a class="countryslot" <?php if(!isset($_SESSION['username'])) : echo "href=\"/php/".$country.".php\""; else : echo "href=\"/php/login_signup.php\""; endif; ?>><span id="countryname"><?php echo ucfirst($country)?></span> <img id="openicon2" src="../source/openicon.png" alt="openicon"></a>
    <?php endforeach ?>
</div>