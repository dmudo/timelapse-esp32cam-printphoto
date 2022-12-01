<?php

use adinacenci\Climate\Climatempo.php;

$token      = 'eb390158abf1a2807fc8deaec4b9c4c0';
$id         = 3477; /*São paulo*/

$climatempo = new Climatempo($token);
$previsao   = $climatempo->fifteenDays($id);

foreach ($previsao->days as $dia) {
    echo 
    "Cidade: <b>$previsao->city ($dia->date)</b>: <br>
    Temp. mínima: $dia->minTemp °C <br>
    Temp. máxima: $dia->maxTemp °C <br>
    Probab. de precipitação: $dia->pop % <br>
    Precipitação: $dia->mm mm <br>
    Frase: $dia->textPt <hr>";
}

?>