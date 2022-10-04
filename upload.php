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


imagettftext($im, 55, 0, 180, 1043, $white, $font, $nome );
imagettftext($im, 30, 0, 180, 1084, $white, $font, $date );
imagettftext($im, 30, 0, 180, 1122, $white, $font, $link );


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
sleep(180);
$filename = 'uploads/pronta_5.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_6'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_6.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_7'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_7.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_8'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_8.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_9'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_9.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_10'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_10.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_11'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_11.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_12'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_12.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_13'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_13.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_14'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_14.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_15'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_15.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_16'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_16.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_17'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_17.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_18'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_18.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_19'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_19.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_20'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_20.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_21'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_21.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_22'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_22.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_23'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_23.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_24'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_24.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_25'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_25.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_26'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_26.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_27'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_27.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_28'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_28.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_29'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_29.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_30'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_30.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_31'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_31.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_32'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_32.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_33'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_33.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_34'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_34.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_35'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_35.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_36'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_36.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_37'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_37.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_38'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_38.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_39'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_39.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_40'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_40.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_41'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_41.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_42'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_42.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_43'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_43.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_44'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_44.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_45'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_45.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_46'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_46.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_47'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_47.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_48'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_48.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_49'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_49.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_50'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_50.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_51'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_51.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_52'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_52.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_53'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_53.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_54'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_54.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_55'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_55.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_56'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_56.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_57'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_57.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_58'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_58.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_59'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_59.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_60'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_60.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_61'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_61.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_62'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_62.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_63'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_63.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_64'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_64.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_65'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_65.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_66'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_66.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_67'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_67.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_68'.'.jpg', 100 );
}
sleep(180);
$filename = 'uploads/pronta_68.jpg';
if  (file_exists($filename)){
        imagejpeg( $im, 'uploads/pronta_69'.'.jpg', 100 );
}
