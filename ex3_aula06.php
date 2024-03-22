// Escreva uma função em PHP que recebe um ano como parametro e escreve se este é um ano bissexto ou não.
<?php

    function bissexto($ano){
        if($ano % 4 == 0 and $ano % 100 != 0 || $ano % 400 == 0){
            echo("$ano é bissexto!");
        else{
            echo("$ano não é bissexto!");
            }
        }
    }

    bissexto(2024);
