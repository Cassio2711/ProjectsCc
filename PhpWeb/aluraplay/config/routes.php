<?php

return  [
    'GET|/'=> \ALURA\MVC\Controller\VideoListController::class,
    'GET|/novo-curso' => \ALURA\MVC\Controller\VideoListController::class,
    'POST|/novo-curso' => \ALURA\MVC\Controller\NovoVideoController::class,
    'GET|/editar-videos'=>\ALURA\MVC\Controller\EditaVideoController::class,
    'POST|/editar-videos'=>\ALURA\MVC\Controller\EditaVideoController::class,
    'GET|/remover-video' => \ALURA\MVC\Controller\RemoveVideo::class
];