<?php

function hd($style, $icon)
{
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <!--Encodage-->
        <meta charset="UTF-8">

        <!--Responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Style-->
        <link rel="stylesheet" <?php echo $style; ?>>
        <link rel="icon" href="<?php echo $icon; ?>">

        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Petrona:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!--AOS animations-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!--Hover.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

        <!--Title-->
        <title>Agapao-Funeral-Planer</title>
    </head>
<?php
}

?>