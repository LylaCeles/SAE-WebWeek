<?php
    require_once("./lang.php");
?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
    <title>CGU</title>
    <?php
        require_once("./Php/meta.php");
    ?>

                <!-- Style -->
    <link rel = "stylesheet" href = "./CSS/cgu.css">
</head>

<body>
    
    <?php
        require_once("./Php/header.php");
    ?>

   <section class="cgu">
        <div>
            <h2><?php echo CGU;?></h2>
            <div>
                <h4><?php echo HEBERGEUR;?></h4>
                <p><?php echo TXT_HEBERGEUR;?></p>
            </div>
            <div>
                <h4><?php echo D_INTELECTUELLE;?></h4>
                <p><?php echo TXT_D_INTELECTUELLE;?></p>
            </div>
            <div>
                <h4><?php echo D_PERSONNELLES;?></h4>
                <p><?php echo TXT_D_PERSONNELLES;?></p>
            </div>
            <div>
                <h4><?php echo ENVIRONNEMENT;?></h4>
                <p><?php echo TXT_ENVIRONNEMENT;?></p>
            </div>
        </div>
   </section>

    <?php
        require_once("./Php/footer.php")
    ?>

</body>
</html>