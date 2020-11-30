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
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <title>Histoires à trous - Accueil</title>
</head>
<body>

    <div class="container">

        <div class="page-title">
            <h1>Bienvenue !</h1>
        </div>

        <div class="custom-shape-divider-top-1606758103">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="page-content">
            <div class="rules rules-intro">
                <p>
                    Voici un petit jeu pour créer des histoires.
                <br>
                    Comment jouer ? C’est très simple !
                </p>
            </div>

            <div class="rules rules-detail">
                <p>
                    <i class="fas fa-arrow-right"></i> Choisis un thème, dans la liste en dessous (clique sur la petite flèche v pour voir tous les thèmes)
                </p>
                <p>
                    <i class="fas fa-arrow-right"></i> Ensuite, on va te demander plusieurs mots. Écris les premiers mots qui te passent par la tête !
                </p>
                <p>
                    <i class="fas fa-arrow-right"></i> Valide tes mots et tu verras une petite histoire, avec tes mots dedans !
                </p>
            </div>

                <form action="words_choice.php" method="post" class="story-choice-form">
                    <select name="story" id="story" required>
                        <option value="" disabled selected>Choisis un thème ici</option>
                        <!--Make all avalaible stories a dropdown option-->
                        <?php foreach ($available_stories as $story) : ?>
                            <div class="form-group">
                                <option value="<?= $story['text'] ?>"><?= $story['title'] ?></option>
                            </div>
                        <?php endforeach ?>
                    </select>
                    <div class="form-group">
                        <input type="submit" value="Valider !" class="submit-button">
                    </div>
                </form>
        </div>

    </div>

</body>
</html>