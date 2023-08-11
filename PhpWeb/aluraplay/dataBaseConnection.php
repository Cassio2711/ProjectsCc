<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=aluraplay',
    'root',
    'lord123',    
);
$pdo -> exec('CREATE TABLE videos (id INTEGER PRIMARY KEY AUTO_INCREMENT,url VARCHAR(400) , title VARCHAR(400));')

?>