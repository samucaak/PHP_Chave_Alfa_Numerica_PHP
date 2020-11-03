<?php
require_once("chave.php");//adicionando a class chave ao arquivo
$chave = new Chave;//instanciando a clsse chave


//O parametro passado para a funçao 
//é a quantidade de caracteres que deseja na para a chave.

        //CHAVE ALFA NUMÉRICA
$alfanum = $chave->chaveAlfaNumerica(60);
echo "CHAVE ALFA NUMERICA: $alfanum";
//________________________________________


          //CHAVE ALFA
$alfa = $chave->chaveAlfa(50);
echo "<hr><br> CHAVE ALFA: $alfa";
//________________________________________


            //CHAVE NUMÉRICA
$num = $chave->chaveNumerica(50);
echo "<hr><br> CHAVE NUMERICA: $num";
//________________________________________



