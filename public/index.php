<?php

$pdo = new PDO('mysql:host=localhost;dbname=mad_libs', 'root', 'rootroot');

$sql = 'SELECT * FROM story';
$req = $pdo->query($sql);
$available_stories = $req->fetchAll();

include "template/index.tpl.php";