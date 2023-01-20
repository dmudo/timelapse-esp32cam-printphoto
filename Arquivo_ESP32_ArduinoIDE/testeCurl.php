<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hgbrasil.com/weather?format=json&key=9db93919&city_name=Goiania,GO',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'access-token: {{9db93919}}'
  ),
));



$response = json_decode(curl_exec($curl));

//var_dump($response);
foreach ($response->results as $cidade) {
    //var_dump($temp);
   echo "Cidade: " . $cidade->city . "<br>";
}

foreach ($arr as &$valor) {
    $valor = $valor * 2;
}

//$err = curl_error($curl);

//if ($err) {
	//echo "cURL Error #:" . $err;
//} else {
//	print_r($response);
//}

//curl_close($curl);
//}

