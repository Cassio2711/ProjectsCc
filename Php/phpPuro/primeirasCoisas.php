<?php
//comentario Variaveis
$idade = 21;

echo gettype($idade);

// concatenação é feita por ponto(.)

echo 'ola mundo Concat' . $idade . "\r\n";

// Aspas duplas "" permite mostrar variavel sem precisar concatenar (Estilo javascript `oi ${idade}`)

echo "ola mundo $idade \r\n";

// Caracateres Especiais (Tem diversos olhar no site)
/*
    \n = quebra linha ----> pode ser usado o comando php PHP_EOL (End Of Line) usado para não precisar colocar \r qunado há diferentes sistemas operacionais
    \t = Tab (Espaço em branco)
    \r = retorno de carro (Usado no Windows para escapar o proximo char especial)

*/
echo "Ola Mundo tenho $idade Rn \r\n";

echo "Ola Mundo tenho $idade Php_Eol" . PHP_EOL;
