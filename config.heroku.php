<?php
$dsn = getenv("DATABASE_URL");
$pdo = new PDO($dsn);
