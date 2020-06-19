<?php
    function chaveAlfaNumerica($QuantidadeDeCaracteresDaChave){
        $res = implode('', range('A', 'z')); // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxiz
        $con = 1;
        $var = '';
        while($con < $QuantidadeDeCaracteresDaChave ){
            $n = rand(0, 57); 
            if (($n == 26) || ($n == 27) || ($n == 28) || ($n == 29) || ($n == 30) || ($n == 31)){
        }else{
            $var = $var.$n.$res[$n];
            $con++;
            }
        }
        return substr($var, 0, $QuantidadeDeCaracteresDaChave);
        }
        //chamando a função.
        echo chaveAlfaNumerica(3);
        //retorna a chave com a quantidade passada no parametro.
?>        