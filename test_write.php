<?php
$file = __DIR__ . "/t3c/test.txt";
$result = file_put_contents($file, "test\n", FILE_APPEND);
var_dump($result);