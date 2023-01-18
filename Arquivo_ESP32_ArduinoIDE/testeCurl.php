<?php

//URL da API + chave
$url = "https://api.hgbrasil.com/weather?key=9db93919&city_name=Goiania,GO";

$ch = curl _init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL, $url);

https://console.hgbrasil.com/keys