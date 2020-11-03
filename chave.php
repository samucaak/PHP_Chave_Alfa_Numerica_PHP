<?php
    class Chave{
        public function chaveAlfaNumerica($QuantidadeDeCaracteresDaChave){
            //Criar array de 'A' a 'x' 
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
            return substr($var, 0, $QuantidadeDeCaracteresDaChave); //
            //corta a chave para que ela fique com a Quantidade De Caracteres=$QuantidadeDeCaracteresDaChave
        }//FUNCAO FINALISADA

        public function chaveNumerica($QuantidadeDeCaracteresDaChave){
            $con = 1;
            $var = '';
            while($con < $QuantidadeDeCaracteresDaChave ){
                $n = rand(0, 1000000); 
                $var = $var.$n;
                $con++;
            }
            return substr($var, 0, $QuantidadeDeCaracteresDaChave); //
            //corta a chave para que ela fique com a Quantidade De Caracteres=$QuantidadeDeCaracteresDaChave
        }//FUNCAO FINALISADA

        public function chaveAlfa($QuantidadeDeCaracteresDaChave){
            //Criar array de 'A' a 'x' 
            $res = implode('', range('A', 'z')); // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxiz
            $con = 1;
            $var = '';
            while($con < $QuantidadeDeCaracteresDaChave ){
                $n = rand(0, 57); 
                if (($n == 26) || ($n == 27) || ($n == 28) || ($n == 29) || ($n == 30) || ($n == 31)){
                }else{
                    $var = $var.$res[$n];
                    $con++;
                }
            }
            return substr($var, 0, $QuantidadeDeCaracteresDaChave); //
            //corta a chave para que ela fique com a Quantidade De Caracteres=$QuantidadeDeCaracteresDaChave
        }//FUNCAO FINALISADA
    }
?>        