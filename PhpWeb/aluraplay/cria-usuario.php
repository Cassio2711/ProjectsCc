<?php



$pdo = new PDO (
    'mysql:host=localhost;dbname=aluraplay',
    'root',
    'lord123'
);

$email =$argv[1];
$senha=$argv[2];


$hash = password_hash($senha, PASSWORD_ARGON2ID);


$sql = 'INSERT INTO users (email,password) VALUES (?,?);';

$statement = $pdo->prepare($sql);

$statement -> bindValue(1, $email);
$statement -> bindValue(2,$hash);

$statement -> execute();