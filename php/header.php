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
        <link rel="icon" href="image/Agapao - logo.png">

        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Title-->
        <title>Agapao-Funeral-Planer</title>
    </head>
<?php
}

?>