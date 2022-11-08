  <!-- FAQ -->


  <head>
        <?php
            require_once("./Php/meta.php")
        ?>
        <link rel = "stylesheet" href = "./CSS/faq.css">
        <link rel="stylesheet" href="./CSS/accordion.css">
        <script src="./Script/accordion.js" defer></script>
        <title>FAQ</title>
    </head>

    <?php
        require_once("./Php/header.php")
    ?>
<body>


  <section class="question">

                <h2><?php echo TITRE_PFAQ;?></h2>
                <h3><?php echo DESCR_PFAQ;?></h3>

                <!-- Accordéon -->
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_1;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_1;?></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_2;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_2;?></p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_3;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_3;?></p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_4;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_4;?></p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_5;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_5;?></p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_6;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_6;?></p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_7;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_7;?></p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_8;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_8;?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <p><?php echo REPONSE_TEXT;?></p>
                <a href="contact.php">
                <button class="btn" type="button"><?php echo REPONSE_TEXT_BUTTON;?></button>
                </a>

                </section>

</body>

<footer>

    <?php
        require_once("./Php/footer.php")
    ?>

</footer>


</html>
