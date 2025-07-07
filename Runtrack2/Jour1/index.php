<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page PHP</title>
</head>
<body>
    <h1>    
        <?php
        $str = "LaPlateforme";
        $str2="Vive";
        $str3="!";

        $phrase = $str2 ." " . $str." " .$str3;

        echo $phrase;
        ?>
    </h1>
</body>
</html>