<header>
    <?php
        require_once("./lang.php");
    ?>

    <a href="./index.php"><img src="./Image/logo/Logo_fond_blanc.png" alt=""></a>
    <nav>
        <ul class="menu">
            <li><a href="./index.php"><?php echo ACCUEIL;?></a></li>
            <li><a href="./region.php"><?php echo REGIONS;?></a></li>
            <li><a href="./animation.php"><?php echo ANIMATION;?></a></li>
            <li><a href="./preinscription.php"><?php echo PREINSCRIPTION;?></a></li>
            <li><a href="./faq.php"><?php echo FAQ;?></a></li>
            <li><a href="./contact.php"><?php echo CONTACT;?></a></li>
        </ul>
    </nav>
    <section class="language">
        <?php if ($lang == "fr" ) { ?>
        <div class="selected_lang">
            <p><?php echo FR;?></p>
        </div>
        <ul>
            <li><a href="?lang=en"><?php echo EN;?></a></li>
        </ul>
        <?php } 
        else { ?>
        <div class="selected_lang">
            <p><?php echo EN;?></p>
        </div>
        <ul>
            <li><a href="?lang=fr"><?php echo FR;?></a></li>
        </ul>
        <?php } ?>
    </section>
    
</header>

<?php
require_once("./Php/config.php");
$connection = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nombase, $user, $mdp );
?>
