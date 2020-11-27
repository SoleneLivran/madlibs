<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>Blabla choisissez les mots</div>
<p>
    <?php
        foreach ($word_types as $word_type) {
            echo "Choisissez un : ${word_type}<br>";
    }
    ?>
</p>

<div>Blabla valider <a href="mad_libs.php">Valider</a></div>

</body>
</html>