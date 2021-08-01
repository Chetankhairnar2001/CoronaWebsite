<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coronad = json_decode($data);

echo "<pre>";
print_r($coronad);

?>