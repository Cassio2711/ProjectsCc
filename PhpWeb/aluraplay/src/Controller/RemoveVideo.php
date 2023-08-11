<?php

namespace ALURA\MVC\Controller;

use ALURA\MVC\Repository\VideoRepository;

class RemoveVideo
{
    public function __construct(private VideoRepository $videoRepository){

    }


    public function processaPedido(){
        echo(require_once __DIR__ . '/../../remover-video.php');
    }
}
