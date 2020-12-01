<?php

// Current text = story chosen from index
if ($_POST) {
    $text = $_POST['story'];
} else {
    // if no text chosen, redirect to homepage
    header('Location: index.php');
    die();
}

// Prepare an array to store all the types or words needed for the text
$word_types = [];

// Find each placeholder in the text
preg_match_all('/(\%.*?\%)/', $text, $matches);

// Add each placeholder, without "%" delimiter, to the list of word types needed for the text
foreach ($matches[0] as $match) {
    $word_types[] = trim($match, '\%');
}

// Remove duplicates
$word_types = array_unique($word_types);

// Sort word types in alphabetical order
sort($word_types);

include "template/words_choice.tpl.php";