<?php
function generateFooter($baseDir, $apropos, $services, $event, $article, $galerie, $contact, $devis)
{
?>
    <footer id="foot">
        <div class="top">
            <img src="<?php echo $baseDir; ?>image/Agapao - logo-white.png" alt="logo">
        </div>
        <div class="bottom">
            <div class="one">
                <div>
                    <img src="<?php echo $baseDir; ?>image/call.png" alt="call">
                    <p><a href="tel:+2250718623266" style="color: white;">(+225) 07 18 62 32 66</a></p>
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
                    <a href="<?php echo $apropos; ?>">A propos de nous</a>
                    <a href="<?php echo $services; ?>">Nos Formules</a>
                    <a href="<?php echo $event; ?>">Evènements</a>
                    <a href="<?php echo $article; ?>">Articles</a>
                    <a href="<?php echo $galerie; ?>">Galerie</a>
                    <a href="<?php echo $contact; ?>">Contacts</a>
                    <a href="<?php echo $devis; ?>">Devis</a>

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
            <p>Conçu par <b><a href="mailto:adresse@example.com" style="color: white;">Ethan Bokamé</a>
                </b></p>
        </div>
    </footer>
<?php
}
?>