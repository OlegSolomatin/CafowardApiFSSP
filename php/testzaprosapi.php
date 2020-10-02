<?php

$url = "https://api-ip.fssprus.ru/api/v1.0/search/physical?token=0iJ8kgQqCoTe&region=50&firstname=Олег&secondname=Соломатин&lastname=Игоревич&birthdate=26.06.1994";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

$result = json_decode(file_get_contents('https://api-ip.fssprus.ru/api/v1.0/search/physical?token=0iJ8kgQqCoTe&region=50&firstname=Олег&secondname=Соломатин&lastname=Игоревич&birthdate=26.06.1994'));
echo ($result -> response[0] -> members_count);
?>