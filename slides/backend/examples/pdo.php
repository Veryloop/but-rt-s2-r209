<?php

echo "HELLO";

$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');
var_dump($pdo->errorInfo());

die();

var_dump($pdo);