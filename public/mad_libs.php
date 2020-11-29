<?php

// replace placeholders by data in $_post

$text = "*title_start* Le %adjectif_masculin_singulier_1% %nom_commun_masculin_singulier_1% *title_end* Il était une fois un %adjectif_masculin_singulier_1% %nom_commun_masculin_singulier_1%.\nIl aimait %verbe_infinitif%.\nC'était un %adjectif_masculin_singulier_2% %nom_commun_masculin_singulier_2% heureux.";

preg_match_all('/(\%.*?\%)/', $text, $matches);

foreach ($matches[0] as $match) {
    $text = str_replace($match, $_POST[trim($match, "\%")], $text);
}

$text = str_replace("\n", "<br>", $text);
$text = str_replace("*title_start*", "<h1>", $text);
$text = str_replace("*title_end*", "</h1>", $text);

include "template/mad_libs.tpl.php";