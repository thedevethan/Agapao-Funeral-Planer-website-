<?php
require("header.php");
hd("../", "../image/Agapao - logo-icon-modified.png");
?>

<body>

    <?php
    require("navbar.php");
    generateNavbar("../index.php", "#", "voir_formules.php", "#", "#", "#", "#foot", "devis.php", "../image/Agapao - logo.png", "../image/menu.png", "../image/close.png");
    ?>
    
    <header class="denous">
        <p>À propos de nous</p>
    </header>
    <div class="container-nous">
        <div class="section" id="qui-sommes-nous">
            <h2>Qui sommes-nous ?</h2>
            <p>Des professionnels de service funéraire qui vous accompagnent à toutes les étapes des obsèques en vous offrant un accompagnement de qualité. Nous sommes une agence spécialisée dans l'organisation et la planification d'obsèques personnalisées, respectant les volontés du défunt et apportant soutien et réconfort aux familles endeuillées.</p>
        </div>
        <div class="section" id="notre-mission">
            <h2>Notre mission</h2>
            <p>Accompagner, conseiller, soutenir mais surtout décharger nos clients dans ces moments douloureux. Être présent à chaque étape des obsèques de A à Z, par notre expertise et nos conseils avisés tout en respectant votre budget et vos souhaits.</p>
        </div>
        <div class="section" id="nos-valeurs">
            <h2>Nos valeurs</h2>
            <p>L'accueil : Un accueil chaleureux, empathique et respectueux pour vous accompagner dans ce moment difficile.</p>
            <p>L'écoute : Une écoute attentive pour comprendre vos besoins et apporter l'assistance la plus adaptée.</p>
            <p>Le professionnalisme : Des prestations de qualité suivant les meilleurs standards avec une équipe professionnelle.</p>
            <p>La disponibilité : Une présence constante pour vous soutenir et vous décharger tout au long des obsèques.</p>
            <p>La confidentialité : Un respect total de la vie privée et une relation de confiance basée sur l'éthique.</p>
        </div>
        <div class="section" id="notre-vision">
            <h2>Notre vision</h2>
            <p>Révolutionner le secteur funéraire en Côte d'Ivoire. Dans un marché concurrentiel en constante évolution, Agapao Funeral Planner se distingue par son professionnalisme et son engagement à être un partenaire empathique, respectueux des traditions et de vos désirs. Nous visons à offrir des services divers et personnalisés qui honorent la vie, l'amour et l'héritage du défunt tout en maintenant une qualité et une dignité irréprochables.</p>
        </div>
        <div class="section" id="equipe">
            <h2>Une équipe jeune et dynamique</h2>
            <p>Notre équipe est jeune, dynamique et professionnelle. Nous excellons à relever les défis et à résoudre les problèmes auxquels font face les familles. En rejoignant notre équipe, vous aurez l'opportunité d'aider des familles à honorer dignement leurs proches, de contribuer au développement de l'économie locale et de participer à la construction de la plus grande entreprise d'organisation funéraire en Afrique. L'atmosphère intense et stimulante qui y règne vous permettra de savourer le bonheur en surmontant les obstacles.</p>
        </div>
    </div>
    
    
    <?php
    require("animation_visible.php");
    require("footer.php");
    generateFooter("../", "#", "#", "#", "#", "#", "#foot", "devis.php");
    ?>
</body>

</html>