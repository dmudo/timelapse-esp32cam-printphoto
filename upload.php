<?php

$received = file_get_contents('php://input');
$fileToWrite = "uploads/recebidaESPCam.jpg";
file_put_contents($fileToWrite, $received);
$im = imagecreatefromjpeg($fileToWrite);

$white = imagecolorallocate($im, 199, 196, 15);
$black = imagecolorallocate($im, 0, 12, 0);

$font = dirname(__FILE__) . "/SegoeBold.ttf";
$font1 = dirname(__FILE__) . "/segoe.otf";

$nome = 'Goiânia';
$date = date('d-m-Y H:i:s');
$link = 'fototempo.ml';
//$temp = ( $_GET['temp'] );
//$Umid = ( $_GET['Umid'] );

imagettftext($im, 45, 0, 180, 1002, $white, $font, $nome);
imagettftext($im, 30, 0, 180, 1043, $white, $font, $date);
//imagettftext($im, 30, 0, 180, 1084, $white, $font, $temp );
//imagettftext($im, 30, 0, 180, 1122, $white, $font, $Umid );
imagettftext($im, 30, 0, 180, 1083, $white, $font, $link);

// Chega uma imagem e replica 7x a cada 30 segundos para criar o carrosel no site
imagejpeg($im, 'uploads/pronta' . '.jpg', 100);
sleep(180);
$filename = 'uploads/pronta.jpg';
if (file_exists($filename)) {
        imagejpeg($im, 'uploads/pronta_1' . '.jpg', 100);
}
sleep(180);
$filename = 'uploads/pronta_1.jpg';
if (file_exists($filename)) {
        imagejpeg($im, 'uploads/pronta_2' . '.jpg', 100);
}
sleep(180);
$filename = 'uploads/pronta_2.jpg';
if (file_exists($filename)) {
        imagejpeg($im, 'uploads/pronta_3' . '.jpg', 100);
}
sleep(180);
$filename = 'uploads/pronta_3.jpg';
if (file_exists($filename)) {
        imagejpeg($im, 'uploads/pronta_4' . '.jpg', 100);
}

