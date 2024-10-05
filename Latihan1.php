<?php
// Array PHP
$php_array = [
    "name" => "Rafli",
    "age" => 20,
    "nim" => "G.211.22.0065",
    "hobi" => "Bermain game"
];

// Encode Array ke JSON
$json_data = json_encode($php_array);

// Tampilkan JSON hasil encode
echo $json_data;
?>