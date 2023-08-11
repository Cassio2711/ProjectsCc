<?php
    
    use ALURA\MVC\Repository\VideoRepository;
    $pdo = new PDO(
        'mysql:host=localhost;dbname=aluraplay',
        'root',
        'lord123',
    );
    $repository = new VideoRepository($pdo);
    $videoList = $repository->allVideos();
    
    
?>

<?php require_once('inicio-html.php');?>
    <ul class="videos__container" alt="videos alura">
        <?php foreach($videoList as $video) :?>
            <?php if(str_starts_with($video->url,'http')): ?>
                <li class="videos__item">
                    <iframe width="100%" height="72%" src="<?php echo $video->url;?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="descricao-video">
                        <img src="./img/logo.png" alt="logo canal alura">
                        <h3><?php echo $video->title;?></h3>
                        <div class="acoes-video">
                            <a href="./edita-videos?id=<?=$video->id?>">Editar</a>
                            <a href="./remover-video?id=<?=$video->id?>">Excluir</a>
                        </div>
                    </div>
                </li>  
            <?php endif; ?>
        <?php endforeach;?>     
    </ul>
</body>

</html>