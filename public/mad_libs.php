<?php

if (!empty($_POST)) {
    $noun = $_POST['nom'] ?? '';
    $adjective = $_POST['adjectif'] ?? '';
    $verb = $_POST['verbe'] ?? '';
};

include "template/mad_libs.tpl.php";