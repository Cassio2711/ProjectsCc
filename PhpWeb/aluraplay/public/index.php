<?php

use ALURA\MVC\Controller\EditaVideoController;
use ALURA\MVC\Controller\FormularioController;
use ALURA\MVC\Controller\NovoVideoController;
use ALURA\MVC\Controller\VideoListController;
use ALURA\MVC\Controller\RemoveVideo;
use ALURA\MVC\Repository\VideoRepository;


require_once __DIR__ . '/../vendor/autoload.php';

$pdo = new PDO(
    'mysql:host=localhost;dbname=aluraplay',
    'root',
    'lord123'
);
$videoRepository = new VideoRepository($pdo); 


if( !array_key_exists('PATH_INFO',$_SERVER)  || $_SERVER['PATH_INFO'] === '/'){
        $videoListController = new VideoListController($videoRepository);
        $videoListController->processaRequisicao();
        /*require_once __DIR__.'/../listagem-videos.php';*/
} elseif ($_SERVER['PATH_INFO'] === '/novo-video') {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $formularioController = new FormularioController($videoRepository);  
        $formularioController->processaPedido();    
        //require_once __DIR__.'/../formulario.php';
    } elseif($_SERVER['REQUEST_METHOD']==='POST'){
        $novoVideoController = new NovoVideoController($videoRepository);
        $novoVideoController -> processaPedido();
        //require_once __DIR__.'/../novo-video.php';
    };
} elseif ($_SERVER['PATH_INFO'] === '/edita-videos') {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $formularioController = new FormularioController($videoRepository);
        $formularioController->processaPedido();
        //require_once __DIR__.'/../formulario.php';
    } elseif($_SERVER['REQUEST_METHOD']==='POST'){
        $editarVideoController = new EditaVideoController($videoRepository);
        $editarVideoController->processaPedido();
        //require_once __DIR__.'/../edita-videos.php';
    };
} elseif ($_SERVER['PATH_INFO'] === '/remover-video'){
        $removeVideo = new RemoveVideo($videoRepository);
        $removeVideo-> processaPedido();
        //require_once __DIR__.'/../remover-video.php';
} else {
    http_response_code(404);
}