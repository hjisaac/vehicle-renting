<?php

$format = 'Y-m-d H:i:s';
$date = DateTime::createFromFormat($format, '2009-02-15 15:16:17');
// echo "Format: $format " . $date->format('Y-m-d H:i:s') . "\n";
// print(time());

$astring = "12-10-2010";
$a = explode("-", $astring);

var_dump(implode("-", array_reverse(explode("-", $astring))));

// donc on va utiliser la function explode pour faire le job 
