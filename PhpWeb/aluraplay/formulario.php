<?php 
    $pdo = new PDO(
        'mysql:host=localhost;dbname=aluraplay',
        'root',
        'lord123'
    );    
    $video = [
        'url'=>'',
        'titulo'=>'',
    ];
        
    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    if($id!==false && $id !== null){
        $statement = $pdo->prepare('SELECT * FROM videos WHERE id=?;');
        $statement -> bindValue(1,$id,PDO::PARAM_INT);
        $statement -> execute();
        $video = $statement-> fetch(PDO::FETCH_ASSOC);
    }

?>

<?php include_once 'inicio-html.php'?>

    <main class="container">

        <form class="container__formulario" action=<?php echo $id!==null ? '/edita-videos?id='.$id : "novo-video"?> method="post">        
            <h3 class="formulario__titulo">Envie um vídeo!</h3>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input name="url" class="campo__escrita" required
                        placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" value="<?=$video['url'];?>" id='url' />
                </div>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                    <input name="titulo" class="campo__escrita" value="<?=$video['title'] ?? '' ;?>" required placeholder="Neste campo, dê o nome do vídeo"
                        id='titulo' />
                </div>
                <input class="formulario__botao" type="submit" value="Enviar" />
        </form>
    </main>
</body>

</html>