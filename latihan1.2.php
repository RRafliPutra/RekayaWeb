<?php
// Variabel yang berisi JSON
$json_data = '{
    "name": "Rafli",
    "age": 20,
    "nim": "G.211.22.0065",
    "hobi": "Bermain game"
}';

// Decode JSON ke dalam PHP Object
$php_object = json_decode($json_data);

// Akses nilai dari PHP Object
echo "PHP Object:\n";
echo "Name: " . $php_object->name . "\n";
echo "Age: " . $php_object->age . "\n";
echo "NIM: " . $php_object->nim . "\n";
echo "Hobi: " . $php_object->hobi . "\n";

// Decode JSON ke dalam PHP Array
$php_array = json_decode($json_data, true);

// Akses nilai dari PHP Array
echo "PHP Array:\n";
echo "Name: " . $php_array['name'] . "\n";
echo "Age: " . $php_array['age'] . "\n";
echo "NIM: " . $php_array['nim'] . "\n";
echo "Hobi: " . $php_array['hobi'] . "\n";
?>