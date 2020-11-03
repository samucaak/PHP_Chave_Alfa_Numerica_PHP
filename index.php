<?php
require_once("chave.php");
$chave = new Chave;

$alfanum = $chave->chaveAlfaNumerica(60);
echo "CHAVE ALFA NUMERICA: $alfanum";
//________________________________________

$alfa = $chave->chaveAlfa(50);
echo "<hr><br> CHAVE ALFA: $alfa";
//________________________________________

$num = $chave->chaveNumerica(50);
echo "<hr><br> CHAVE NUMERICA: $num";
//________________________________________



