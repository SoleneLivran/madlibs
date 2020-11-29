<?php

$text = "<p>Il était une fois un %adjectif_masculin_singulier_1% %nom_commun_masculin_singulier_1%.</p><p>Il aimait %verbe_infinitif%.</p><p>C'était un %adjectif_masculin_singulier_2% %nom_commun_masculin_singulier_2% heureux.</p>";

// all the types or words needed for the text
$word_types = [];

// find each placeholder in the text
preg_match_all('/(\%.*?\%)/', $text, $matches);

foreach ($matches[0] as $match) {
    $word_types[] = trim($match, '\%');
}

$word_types = array_unique($word_types);

sort($word_types);

include "template/words_choice.tpl.php";