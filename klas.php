<?php

echo "Wie zit er in je klas?\n";
$klasgenoten = readline();

echo "De studenten in de klas zijn:\n";

$explo = explode(" ",$klasgenoten);
 foreach ($explo as $naam  ){
     echo $naam.PHP_EOL;
 }