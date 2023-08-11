<?php

use ALURA\MVC\Repository\VideoRepository;

    $pdo =new PDO(
        'mysql:host=localhost;dbname=aluraplay',
        'root',
        'lord123',
    );    
    $id = $_GET['id'];
    $videoRepository = new VideoRepository($pdo);

    if($videoRepository->removeVideo($id) === false) {
        header('Location: /?sucesso=0');
    } else {
        header('Location: /?sucesso=1');
    };
?>