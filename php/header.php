<header>

    <a href="/index.php"><img id="logoheader" src="../source/icon.png" alt="icon"></a>

    <nav>
        <button id="btncountries">Countries <img id="openicon" src="../source/openicon.png" alt="openicon"></button>
        <!-- if not logged -->
        <button id="btnlogin">Log in</button>
        <button id="btnsignin">Sign up</button>

        <!-- if logged 
        <button id="btnsignup">Sign out</button>
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