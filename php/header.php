<?php

function hd($style)
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
        <link rel="icon" href="image/">

        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Title-->
        <title>Agapao-Funeral-Planer</title>
    </head>
<?php
}

?>