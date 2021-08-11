<?php

$hola = "Hola";

$courses = [
    "front" => "js",
    "framework" => "php",
    "backend" => "sql"
];
/* foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
} */

function upper($course, $key)
{
    echo strtoupper($course)  . " $key <br>";
};

array_walk($courses, 'upper');

echo array_key_exists('backend', $courses); /* vemos si existe un key de array */

echo "<br>" . in_array('js', $courses); /* ¿Existe este dato en el array? Nos dice si o no */

echo is_array($hola); /* Nos dice si es un array o no */

array_keys($courses);

array_values($courses);
