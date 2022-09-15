<?php
//Lê o conteudo enviado pela EspCam
$received = file_get_contents('php://input');
$fileToWrite = "uploads/recebidaESPCam.jpg";
file_put_contents($fileToWrite, $received);
$im = imagecreatefromjpeg($fileToWrite);

//Colorir texto
$white = imagecolorallocate($im, 199, 196, 15);
$black = imagecolorallocate($im, 0, 12, 0);

// Fontes para usar na escrita
$font = dirname(__FILE__) . "/SegoeBold.ttf";
$font1 = dirname(__FILE__) . "/segoe.otf";

// Escreve o nome da cidade
$nome = 'Goiânia';

// Escreve Temperatura e Umidade 
$temperatura = 'Temperatura: 35º';
$Umidade = 'Umidade: 70%';

//Posiçoes dos textos na imagem
imagettftext($im, 55, 0, 30, 1043, $white, $font, $nome );
imagettftext($im, 30, 0, 30, 1084, $white, $font1, $temperatura );
imagettftext($im, 30, 0, 30, 1122, $white, $font1, $Umidade );


// Envia a imagem para o browser ou arquivo
imagejpeg( $im, 'uploads/pronta'.'.jpg', 100 );
imagedestroy($fileToWrite);

// Chega uma imagem e replica 7x a cada 30 segundos para criar o carrosel no site
imagejpeg( $im, 'uploads/pronta'.'.jpg', 100 );
sleep(180);
$filename = 'uploads/pronta.jpg';
if  (file_exists($filename)){
	imagejpeg( $im, 'uploads/pronta_1'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_1.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_2'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_2.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_3'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_3.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_4'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_4.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_5'.'.jpg', 100 );
}
//sleep(30);
//$filename = 'uploads/pronta_5.jpg';
//if  (file_exists($filename)){
//        imagejpeg( $im, 'uploads/pronta_6'.'.jpg', 100 );
//}


//imagedestroy($fileToWrite);

