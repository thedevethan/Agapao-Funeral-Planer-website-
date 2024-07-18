<?php
require("header.php");
hd("../", "../image/Agapao - logo-icon-modified.png");


?>

<body>


    <?php 
    require("navbar.php");
    generateNavbar("../index.php", "#", "#", "#", "contact.php", "../image/Agapao - logo.png", "../image/menu.png", "../image/close.png");
    ?>
    
    <div class="fcontact">
    <p class="joignable">
        Être l’agence de référence des familles endeuillées, afin qu’elles vivent sereinement le temps de l’adieu. <br><br>
        <b>Honorer la vie, alléger votre fardeau avec respect et dignité</b><br><br>
        Pour avoir plus d'informations ou pour toutes questions veuillez nous contacter: <br>
        <a href="mailto:agapaofuneral@gmail.com">agapaofuneral@gmail.com</a> ou au 07 18 62 32 66
        <span>
            <img class="phone-join" src="image/phone.png" alt="phone">
        </span>
    </p>
</div>

    <div class="votreecoute">

        <div class="ecoute-container">

            <div class="e1-container" id="e1-container" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out">
                <p id="e1">JE SUIS À VOTRE ÉCOUTE...</p>
            </div>

            <p id="e2" data-aos="fade-up" data-aos-duration="1400" data-aos-easing="ease-out" data-aos-anchor="#e1-container">Comment puis-je vous aider ?</p>
            <p id="e3" data-aos="fade-up" data-aos-duration="1800" data-aos-easing="ease-out" data-aos-anchor="#e2">N’hésitez pas à m’écrire par email, via le formulaire de contact ci-dessous ou encore à me joindre par téléphone. Je vous répondrai dans les plus brefs délais.</p>
        </div>

    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php require("animation_visible.php");?>
</body>

</html>