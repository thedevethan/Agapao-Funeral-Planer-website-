<?php 
require("php/header.php");
hd("", "image/Agapao - logo-icon-modified.png");
?>

<body>
    
    <?php 
    require("php/navbar.php");
    generateNavbar("index.php", "#", "#", "php/voir_formules.php", "#", "#", "#foot", "php/devis.php", "image/Agapao - logo.png", "image/menu.png", "image/close.png");

    require("php/home.php");
    ?>
    <br><br>

    <?php 
    require("php/animation_visible.php");
    require("php/footer.php");
    generateFooter("", "#", "#", "#", "#", "#", "#foot", "php/devis.php");
    ?>
</body>
</html>