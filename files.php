<?php

$filename = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'test.json';

// Se si hanno i permessi di scrittura nella cartella dello script:
// $filename = __DIR__ . DIRECTORY_SEPARATOR . 'test.json';

$users = [
   [
       'name' => 'Luigi',
       'email' => 'luigi@local'
   ],
   [
       'name' => 'Mario',
       'email' => 'mario@local'
   ],
];

if (!file_exists($filename)) {
   file_put_contents($filename, json_encode($users));
}

$rawData = file_get_contents($filename);
$data = json_decode($rawData, true);

print_r($data);
echo $rawData . "\n";