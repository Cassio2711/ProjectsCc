<?php
namespace ALURA\MVC\Controller;

use ALURA\MVC\Controller\Controller;
use ALURA\MVC\Repository\VideoRepository;

class VideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository) {
    }



    public function processaPedido():void {
        $videoList = $this->videoRepository->allVideos();

        require_once __DIR__.'/../../view/listagem-videos.php';

    }
}