<?php

$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);

echo $fileContents;

$addText = 'テストです' . "\n";

file_put_contents($contactFile, $addText, FILE_APPEND);

?>



