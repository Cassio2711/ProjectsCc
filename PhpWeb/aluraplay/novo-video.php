<?php

use ALURA\MVC\ENTITY\Video;
use ALURA\MVC\Repository\VideoRepository;

$pdo = new PDO(
    'mysql:host=localhost;dbname=aluraplay',
    'root',
    'lord123',
);

$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL);
if($url === false){
    header('Location:/?sucesso=0');
    exit();
}
$title = filter_input(INPUT_POST,'titulo');


$video = new Video($url,$title);


$repository = new VideoRepository($pdo);


if ($repository->addVideo($video) === false) {
    header('Location:/?sucesso=0');    
} else {
    header('Location:/?sucesso=1'); 
}

?>