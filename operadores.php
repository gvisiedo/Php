<?php
$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;

//AND

var_dump($michis_felinos && $michis_4_patas);

echo "\n";

//OR
var_dump($michis_vuelan || $michis_4_patas);

echo "\n";

//NOT
var_dump(!$michis_4_patas);

echo "\n";

//Experimento

$resultado =$michis_4_patas && $michis_programan_con_php;

var_dump($resultado);

echo "\n";
?>