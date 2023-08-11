<?php

namespace ALURA\MVC\Controller;

use ALURA\MVC\Repository\VideoRepository;
use PDO;

class FormularioController implements Controller
{
    public function __construct(private VideoRepository $videoRepository) {
        
    }

    public function processaPedido ():void
    {
       $video = [
        'url' => '',
        'titulo'=>'',
        ];

        $pdo = new PDO(
            'mysql:host=localhost;dbname=aluraplay',
            'root',
            'lord123'
        );

        $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        if($id!==false && $id !== null){
            $statement = $pdo->prepare('SELECT * FROM videos WHERE id=?;');
            $statement -> bindValue(1,$id,PDO::PARAM_INT);
            $statement -> execute();
            $video = $statement-> fetch(PDO::FETCH_ASSOC);
        };

        require_once __DIR__ . '/../../view/formulario.php';
    }
}
//echo(require_once __DIR__ .'/../../formulario.php');