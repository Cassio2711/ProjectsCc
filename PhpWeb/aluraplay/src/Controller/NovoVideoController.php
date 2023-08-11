<?php

namespace ALURA\MVC\Controller;

use ALURA\MVC\Repository\VideoRepository;

class NovoVideoController
{
    public function __construct(private VideoRepository $videoRepository) {
    }

    public function processaPedido(){
        echo(require_once __DIR__ . '/../../novo-video.php');
    }
}
