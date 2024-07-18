<?php
// Définir une fonction pour générer la barre de navigation
function generateNavbar($home, $services, $about, $blog, $contact, $logo, $menuImg, $closeImg) {
    // Commencer à insérer du HTML
    ?>
    <div class="navbar">
        <nav>
            <img src="<?php echo $logo; ?>" alt="logo" class="logo">

            <div class="nav-link">
                <ul>
                    <!-- Générer les liens de navigation avec les paramètres passés à la fonction -->
                    <li><a href="<?php echo $services; ?>">Qui sommes nous?</a></li>
                    <li><a href="<?php echo $about; ?>">Prestations & Accompagnements</a></li>
                    <li><a href="<?php echo $blog; ?>">Evènements</a></li>
                    <li><a href="<?php echo $blog; ?>">Articles</a></li>
                    <li><a href="<?php echo $blog; ?>">Galerie</a></li>
                    <li><a href="<?php echo $blog; ?>">Nous contacter</a></li>
                </ul>
            </div>

            <img src="<?php echo $menuImg; ?>" alt="menu" class="hamburger">
        </nav>

        <div class="nav-link-mobile">
            <ul>
                <!-- Générer les liens de navigation mobile avec les mêmes paramètres -->
                <li><a href="<?php echo $services; ?>">Qui sommes nous?</a></li>
                    <li><a href="<?php echo $about; ?>">Prestations & Accompagnements</a></li>
                    <li><a href="<?php echo $blog; ?>">Evènements</a></li>
                    <li><a href="<?php echo $blog; ?>">Articles</a></li>
                    <li><a href="<?php echo $blog; ?>">Galerie</a></li>
                    <li><a href="<?php echo $blog; ?>">Nous contacter</a></li>
            </ul>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Rediriger vers la page d'accueil quand on clique sur le logo
            $(".logo").click(function() {
                window.location = "<?php echo $home; ?>";
            });

            // Recharger la page lors du redimensionnement de la fenêtre
            $(window).resize(function() {
                location.reload();
            });

            // Fonction pour gérer le style de la barre de navigation au scroll
            function nav_scroll(padding_end, padding_start, logo_height_end, logo_height_start) {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll > 0) {
                        $(".logo").css({
                            "transition": "0.3s",
                            "height": logo_height_end,
                        });

                        $(".nav-link-mobile").css({
                            "background-color": "rgba(255, 255, 255, 0.721)",
                        });

                        $("nav").css({
                            "background-color": "rgba(255, 255, 255, 0.721)",
                            "transition": "0.3s",
                            "padding": padding_end
                        });
                    } else {
                        $("nav").css({
                            "background-color": "rgb(255, 255, 255)",
                            "transition": "0.3s",
                            "padding": padding_start
                        });

                        $(".nav-link-mobile").css({
                            "background-color": "rgb(255, 255, 255)",
                        });

                        $(".logo").css({
                            "transition": "0.3s",
                            "height": logo_height_start,
                        });
                    }
                });
            }

            // Fonction pour gérer l'affichage du menu mobile
            function hamburger() {
                $(".hamburger").click(function() {
                    if ($(".nav-link-mobile").is(":visible")) {
                        this.setAttribute("src", "<?php echo $menuImg; ?>");
                        $(".nav-link-mobile").slideToggle();
                    } else {
                        this.setAttribute("src", "<?php echo $closeImg; ?>");
                        $(".nav-link-mobile").slideToggle();
                    }
                });
            }

            // Fonction pour gérer les animations en fonction de la largeur de la fenêtre
            function handleAnimations() {
                var windowWidth = $(window).width();

                if (windowWidth <= 600) {
                    nav_scroll("1vh 3vw", "3vh 3vw", "10vw", "14vw");
                    hamburger();
                } else if (windowWidth >= 601 && windowWidth <= 1024) {
                    nav_scroll("0.3vh 3vw", "0.5vh 3vw", "7vw", "10vw");
                    hamburger();
                } else {
                    nav_scroll("0.3vh 2vw", "0.5vh 2vw", "5vw", "6.5vw");
                }
            }

            // Appliquer les animations appropriées lors du chargement de la page
            handleAnimations();
        });
    </script>
    <?php
}
?>
