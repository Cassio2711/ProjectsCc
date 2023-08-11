<?php

use ALURA\MVC\ENTITY\Video;
use ALURA\MVC\Repository\VideoRepository;

$pdo = new PDO(
    'mysql:host=localhost;dbname=aluraplay',
    'root',
    'lord123'
);


$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
if($id === false) {
    header('Location: /?sucesso=01');
    exit();
}
$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL);
$title = filter_input(INPUT_POST,'titulo');



$video = new Video($url,$title);
$video->setId($id);

$repository = new VideoRepository($pdo);



$repository->updateVideo($video);



if ($repository->updateVideo($video)===false){
    header('Location:/?sucesso=0');
    
 } else {
    header('Location:/?sucesso=1');
}
?>