<?php

function numeroPrimo($num){
    if ($num < 0){
        return "o numero não é primo, pois ele é negativo";
    }

    if ($num > 1) && ($num <= 3){
        return "o numero é primo";
    }else if($num % 2 == 0){
        return "o numero não é primo";
    }else{
        return "o numero é primo";
    }
}
   

echo " <br> ".numeroPrimo(12);

?>