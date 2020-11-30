<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Histoires à trous - Choix des mots</title>
</head>
<body>

    <div class="container">

        <div class="page-title">
            <h1>Choisis tes mots !</h1>
        </div>

        <div class="custom-shape-divider-top-1606758103">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="page-content">

            <div class="rules">
                <p>
                    Choisis les mots que tu veux. Fais attention à écrire le bon type de mots. 
                    <br>
                    Ce sont les mots que tu retrouveras dans ton histoire.  
                </p>
                <p>
                    Amuse-toi, et écris les premières idées qui te passent par la tête !
                </p>
            </div>

            <div class="words-choice">
                <p> Choisis...</p>
                <form action="../mad_libs.php" method="post" class="words-choice-form">
                    <!--Create a form input for each needed word type in the text, for the user to choose the words-->
                    <?php foreach ($word_types as $word_type) : ?>
                    <div class="form-group word-choice">
                        <!--Remove "_" in word types names so it's more understandable for human users-->
                        <label class="word-type-label" for="<?= $word_type ?>">Un <?= str_replace('_', ' ', $word_type) ?> :</label>
                        <input class="word-input" type="text" name="<?= $word_type ?>" id="<?= $word_type ?>" required>
                    </div>
                    <?php endforeach ?>
                    <!--hidden input to pass chosen text to next page. TODO : with session-->
                    <input type="hidden" name="text" id="text" value="<?= $text ?>">
                    <div class="form-group">
                        <input type="submit" value="Valider" class="submit-button">
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>