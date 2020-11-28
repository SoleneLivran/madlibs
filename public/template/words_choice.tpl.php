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
<form action="../mad_libs.php" " method="post" class="form">
    <?php foreach ($word_types as $word_type) : ?>
    <div class="form-group">
        <label for="<?= $word_type ?>">Choisir un <?= $word_type ?> :</label>
        <input type="text" name="<?= $word_type ?>" id="<?= $word_type ?>" required>
    </div>
    <?php endforeach ?>
    <div class="form-group">
        <input type="submit" value="Valider">
    </div>

</form>

</body>
</html>