<?php

// replace placeholders by data in $_post

// Retrieve chosen text
if ($_POST) {
    $text = $_POST['text'];
} else {
    // if no text chosen, redirect to homepage
    header('Location: index.php');
    die();
}

// Find all the placeholders in the text
preg_match_all('/(\%.*?\%)/', $text, $matches);

// For each placeholder in the text : replace with the corresponding value from $_POST
// Value in $_POST =same name as the placeholder, but without the "%"s
foreach ($matches[0] as $match) {
    $text = str_replace($match, "<span class='my-word'>".$_POST[trim($match, "\%")]."</span>", $text);
}

// Format database's text with html tags
$text = nl2br($text);
$text = str_replace("*title_start*", "<h1>", $text);
$text = str_replace("*title_end*", "</h1><p>", $text);
$text = $text . "</p>";

include "template/mad_libs.tpl.php";