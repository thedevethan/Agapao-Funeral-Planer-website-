<nav>
    <img src="image/Agapao - logo.png" alt="logo" class="logo">

    <script>
        $(document).ready(function() {
            $(".logo").click(function() {
                window.location = "index.php";
            });
        });
    </script>


    <div class="nav-link">
        <ul>
            <li><a href="#">Prestations & services</a></li>
            <li><a href="#">À propos d’Agapao-Funeral</a></li>
            <li><a href="#">Blog</a></li>
            <li><a class="contact" href="#">Contact</a></li>
        </ul>
    </div>

    <img src="image/menu.png" alt="menu" class="hamburger">
</nav>

<div class="nav-link-mobile">
    <ul>
        <li><a href="#">Prestations & services</a></li>
        <li><a href="#">À propos d’Agapao-Funeral</a></li>
        <li><a href="#">Blog</a></li>
        <li><a class="contact" href="#">Contact</a></li>
    </ul>
</div>



<script>
    $(document).ready(function() {
        var targetElement = $("#targetElement");

        function nav_scroll(padding_end, padding_start, logo_height_end, logo_height_start) {

            $(window).scroll(function() {
                
                var scroll = $(window).scrollTop();

                if (scroll > 0) {
                    $(".logo").css({
                        "transition": "0.3s",
                        "height": logo_height_end,
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
                        "padding":  padding_start  
                    });

                    $(".logo").css({
                        "transition": "0.3s",
                        "height": logo_height_start,
                    });
                }
            });

        }

        // Fonction pour gérer les animations en fonction de la largeur de la fenêtre
        function handleAnimations() {

            var windowWidth = $(window).width();

            if (windowWidth <= 600) {
                // Animation pour téléphones
                nav_scroll("1vh 3vw", "3vh 3vw");
                
            } else if (windowWidth <= 1024) {
                // Animation pour tablettes
                targetElement.fadeToggle();
            } else {
                // Animation pour grands écrans (ne pas appliquer d'animation)
                nav_scroll("0.3vh 2vw", "0.5vh 2vw", "5vw", "6.5vw");
            }
        }

        // Événement au clic sur le bouton
        $("#toggleButton").click(function() {
            handleAnimations();
        });

        // Événement de défilement pour la barre de navigation


        // Appliquer les animations appropriées lors du chargement de la page
        handleAnimations();
    });
</script>