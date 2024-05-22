<header>
    <a href="/index.php"><img id="logoheader" src="../source/icon.png" alt="icon"></a>

    <nav>
        <button id="btncountries">Countries <img id="openicon" src="../source/openicon.png" alt="openicon"></button>
        <!-- if not logged -->
        <a href="/php/login_signup.php">Log in / Sign up</a>

        <!-- if logged 
        <a id="btnmyprofile">My profile</a>
        -->
    </nav>
</header>

<?php 
    $countries = ["france", "spain", "japan", "australia", "germany", "morocco", "usa", "russia", "brasil", "south africa"] ;
?>

<div class="menu-deroulant">
    <?php foreach ($countries as $country) : ?>
        <a class="countryslot" <?php echo "href=\"/php/".$country.".php\""?>><span id="countryname"><?php echo ucfirst($country)?></span> <img id="openicon2" src="../source/openicon.png" alt="openicon"></a>
    <?php endforeach ?>
</div>