<?php

$courses = ["js", "php", "sql"];

sort($courses);

echo "<pre>";
//echo var_dump($courses);

//var_dump(array_slice($courses, 1)); /* Con esto quitamos el primer valor de la lista */

//var_dump(array_chunk($courses, 1)); /* Aquí dividimso los valores en varios arrays */

var_dump(array_chunk($courses, 1));
