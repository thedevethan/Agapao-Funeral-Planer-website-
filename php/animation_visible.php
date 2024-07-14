<script>
    $(document).ready(function() {
    // Fonction pour vérifier si un élément est visible dans la fenêtre
    function checkVisibility() {
        $('.element-to-animate').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('visible');
            }
        });
    }

    // Appel initial pour vérifier la visibilité des éléments au chargement de la page
    checkVisibility();

    // Vérifier la visibilité des éléments lors du défilement
    $(window).on('scroll', function() {
        checkVisibility();
    });
});

</script>