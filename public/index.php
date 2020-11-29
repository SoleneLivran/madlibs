<?php

include "../config.php";

// get all available stories in the database
$sql = 'SELECT * FROM story';
$req = $pdo->query($sql);
$available_stories = $req->fetchAll();

include "template/index.tpl.php";