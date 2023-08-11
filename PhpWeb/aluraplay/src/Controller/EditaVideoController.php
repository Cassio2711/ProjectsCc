<?php

namespace ALURA\MVC\Controller;

use ALURA\MVC\Controller\Controller;
use ALURA\MVC\Repository\VideoRepository;
use ALURA\MVC\Entity\Video;
use PDO;

class EditaVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository){

    }

    public function processaPedido () : void{
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
    }
}
