<?php

$ch = curl_init("http://localhost:8888/index.php?function=getAllData");
// $fp = fopen("example_homepage.txt", "r");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
// fclose($fp);
