<?php

$contador = 1;

/*while ($contador <= 15) {    
    echo "#$contador".PHP_EOL;
    $contador = $contador +1;

}*/


/*for ($contador2 = 1; $contador2 <= 15; $contador2++){
    echo "$contador2".PHP_EOL;
}*/


// continue  pula para a proxima linha     ou break sai do loop completo

for ($contador3 = 1; $contador3 <= 15; $contador3++){
    if($contador3==13){
        continue;  
    }

    echo "$contador3".PHP_EOL;
}

