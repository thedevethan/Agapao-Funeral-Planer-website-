<?php
function generateFooter($baseDir) {
    ?>
    <footer>
        <div class="top">
            <img src="<?php echo $baseDir; ?>image/Agapao - logo-white.png" alt="logo">
        </div>
        <div class="bottom">
            <div class="one">
                <div>
                    <img src="<?php echo $baseDir; ?>image/call.png" alt="call">
                    <p>(+225) 07 18 62 32 66</p>
                </div>
                <div>
                    <img src="<?php echo $baseDir; ?>image/email.png" alt="email">
                    <p>agapaofuneral@gmail.com</p>
                </div>
                <div>
                    <img src="<?php echo $baseDir; ?>image/pin.png" alt="pin">
                    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                </div>
            </div>
            <div class="two">
                <p>MENU</p>
                <div class="link">
                    <a href="#">Qui sommes nous?</a>
                    <a href="#">Prestations & accompagnements</a>
                    <a href="#">Evènements</a>
                    <a href="#">Articles</a>
                    <a href="#">Galerie</a>
                    <a href="#">Nous contacter</a>
                </div>
            </div>
            <div class="three">
                <p>RÉSEAUX SOCIAUX</p>
                <div class="link">
                    <a href="#"><img src="<?php echo $baseDir; ?>image/facebook-app-symbol.png" alt="fb"></a>
                    <a href="#"><img src="<?php echo $baseDir; ?>image/tik-tok.png" alt="tiktok"></a>
                    <a href="#"><img src="<?php echo $baseDir; ?>image/instagram.png" alt="ig"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="sign">
            <p>&copy; 2024 Agapao Funeral Planner - Tous droits réservés</p>
            <p>Conçu par <b>Ethan Bokamé</b></p>
        </div>
    </footer>
    <?php
}
?>
