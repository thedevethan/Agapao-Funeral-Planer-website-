<?php
require("header.php");
hd("../", "../image/Agapao - logo-icon-modified.png");
?>

<body>

    <?php
    require("navbar.php");
    generateNavbar("../index.php", "#", "voir_formules.php", "#", "#", "#", "#foot", "devis.php", "../image/Agapao - logo.png", "../image/menu.png", "../image/close.png");
    ?>
    
    <div class="form-container">
        <p>
            Vous souhaitez faire un devis pour votre funéraille? Remplissez le formulaire ci-dessous pour que nous puissions vous aider. Nous vous remercions de votre compréhension et de votre confiance.
        </p>
        <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="4fc53e73-c4eb-4def-99a1-a0b26c9c0ad7">
            <input type="text" name="name" id="name" required maxlength="255" placeholder="Nom & prénom">
            <input type="email" name="email" id="email" required maxlength="255" placeholder="Email">
            <input type="tel" name="tel" id="tel" required maxlength="255" placeholder="+255 0000000000">
            <textarea name="message" id="message" cols="30" rows="10" maxlength="955" placeholder="Entrez votre message..."></textarea>
            <input type="submit" value="Envoyer" id="sub">
        </form>
    </div>
    
    
    <?php
    require("animation_visible.php");
    require("footer.php");
    generateFooter("../", "#", "#", "#", "#", "#", "#foot", "devis.php");
    ?>
</body>

</html>