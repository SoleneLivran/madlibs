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

<div>
    <h1>Bienvenue sur le site</h1>
    <p>Vous allez choisir des mots, au hasard, qui viendront remplir un texte pour un résultat...sans doute surprenant !</p>
    <form action="words_choice.php" method="post">
        <label for="story">Choix du texte qui sera complété par vos mots :</label>
        <select name="story" id="story">
            <!--Make all avalaible stories a dropdown option-->
            <?php foreach ($available_stories as $story) : ?>
                <option value="<?= $story['text'] ?>"><?= $story['title'] ?></option>
            <?php endforeach ?>
        </select>
        <input type="submit" value="Valider">
    </form>
</div>

</body>
</html>