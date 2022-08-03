<?php

$received = file_get_contents('php://input');
$fileToWrite = "uploads/newphoto.jpg";
file_put_contents($fileToWrite, $received);
$im = imagecreatefromjpeg($fileToWrite);

$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 12, 0);

$font = dirname(__FILE__) . "/SegoeBold.ttf";
$font1 = dirname(__FILE__) . "/segoe.otf";

// $nome = $_POST['nome'];
$nome = 'Goiânia';
// $celular = urldecode( $_POST['celular'] );

// temperatura = $_POST['departamento0'];
$temperatura = 'Temperatura: 35º';
$Umidade = 'Umidade: 70%';


imagettftext($im, 35, 0, 30, 43, $white, $font, $nome );
imagettftext($im, 15, 0, 30, 92, $white, $font1, $temperatura );
imagettftext($im, 15, 0, 30, 122, $white, $font1, $Umidade );


// Envia a imagem para o borwser ou arquivo
imagejpeg( $im, 'uploads/'.time().'.jpg', 100 );
imagedestroy($fileToWrite);
