<?php

// replace placeholders by data in $_post

// Retrieve chosen text
$text = $_POST['text'];

// Find all the placeholders in the text
preg_match_all('/(\%.*?\%)/', $text, $matches);

// For each placeholder in the text : replace with the corresponding value from $_POST
// Value in $_POST =same name as the placeholder, but without the "%"s
foreach ($matches[0] as $match) {
    $text = str_replace($match, $_POST[trim($match, "\%")], $text);
}

// Format database's text with html tags
$text = nl2br($text);
$text = str_replace("*title_start*", "<h1>", $text);
$text = str_replace("*title_end*", "</h1>", $text);

include "template/mad_libs.tpl.php";