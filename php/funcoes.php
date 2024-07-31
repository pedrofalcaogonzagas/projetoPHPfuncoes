<?php
    $num1 = 0;
    $num2 = 0;
    
    //1
    function somar($num1,$num2){
       return (int)$num1 + (int)$num2;
    }//fim do somar

    //2
    function subtrair($num1,$num2){
       return $num1 - $num2;
    }//fim do subtrair



    //3
    function multiplicar($num1,$num2){
       return $num1 * $num2;
    }//fim do multiplicar


    //4
    function dividir($num1,$num2){
        if ($num2==0){
            return "inpossivel dividir por zero";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir


    //5
    function potencia($num1,$num2){
        if($num2 < 0){
            return "impossivel calcular a potencia de expoente negativo";
        }else{
            return pow($num1,$num2);
        }
    }//fim da potencia


    //6
    function raiz($num1){
        if($num1 >= 0){
        return sqrt($num1);
    }else{
            return "impossivel calcular a raiz de um numero negativo";
        }
    }//fim da raiz


    //7
    function taboada($num1){
        $i = 0;
        $resultado = "";
        for($i; $i<10;$i++){
            $resultado .= "<br>".$num1." * ".$i." + ". ($num1*$i);
        }
        return $resultado;
    }//fim taboada
    

    //8
    function areaRetangulo($base,$altura){
        if(($base <= 0) || ($altura <= 0)){
            return "impossivel calcular a area";
        }else{
            return $base * $altura;
        }
    }//fim area


    //9
    function delta($a, $b, $c){
        $x = pow($b,2) - 4 * $a * $c;
        if ($x < 0){
            return -1;
        }else{   
        return $x;
        }
    }//fim delta


    
    function x1($a,$b,$c){
        $x = delta($a,$b,$c);
        if ($x == -1){
            return "impossivel calcular x1, delta negativo";
        }else{
            return(-$b +sqrt($x))/(2*$a);
        }
    }//fim x1


    function x2($a,$b,$c){
        $x = delta($a,$b,$c);
        if ($x == -1){
            return "impossivel calcular x2, delta negativo";
        }else{
            return(-$b +sqrt($x))/(2*$a);
        }
    }//fim x2


    //10
    function parImpar($num){
        if ($num % 2 == 0){
            return "par";
        }else{
            return "impar";
        }
    }//fim par ou impar


    //11
    function maioridade($idade){
        if($idade < 18){
            return "voce ainda é menor de idade";
        }else{
            return "voce é maior de idade";
        }
    }


    //12
    function dobro($num){
        return $num * 2;
    }

    function temperatura($cel){
        return ($cel * 1.8) + 32;
    }//fim temperatura
    
    //f = c * 1,8 + 32


    function maior($num1, $num2, $num3){
        if (($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if (($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }

    function negativo($num){
        if ($num > 0){
            return "o numero é positivo";
        }else if ($num < 0){
            return "o numero é negativo";
        }else{
            return "o numero é zero";
        }

    }

    function somarNumeros($num){
        $i = 1;
        $soma = 0;
        for($i; $i <= $num; $i++){
            $soma += $i;
        }
        return $soma;
    }

    function numeroPrimo($num){
        if ($num < 0){
            return "o numero não é primo, pois ele é negativo";
        }
    
        if (($num > 1) && ($num <= 3)){
            return "o numero é primo";
        }else if($num % 2 == 0){
            return "o numero não é primo";
        }else{
            return "o numero é primo";
        }
    }

    function palindromo($palavra){
        if ($palavra == strrev($palavra)){
            return "a palavra é um palindromo";
        }else{
            return "a palavra não é um palindromo";
        }
    }

    function fatorial($num){
        $i = $num;
        for ($i; $i >= 1; $i--){
            $num *= $i;
        }
        return $num;
    }

    function numerosPares($num){
        $i = 0;
        $pares = "";
        for ($i; $i <=$num; $i++){
            if($i % 2 == 0){
                $pares .= "<br>".$i;
            }
        }
        return $pares;
    }


        function vogais($palavra){
            $tamanho = strlen ($palavra);
            $i = 0;
            $letra = "";
            $contador = 0;

        for($i;$i <$tamanho; $i++){
            $letra = substr($palavra,$i,1);

            switch($letra){
                case 'A';
                    $contador++;
                    break;
                case 'E';
                    $contador++;
                    break;
                case 'I';
                    $contador++;
                    break;
                case 'O';
                    $contador++;
                    break;
                case 'U';
                    $contador++;
                    break;
                case 'a';
                    $contador++;
                    break;
                case 'e';
                    $contador++;
                    break;
                case 'i';
                    $contador++;
                    break;
                case 'o';
                    $contador++;
                    break;
                case 'u';
                    $contador++;
                    break;
                }
                return $contador;   
        }
    }
      

    
        
    function data($num1, $num2, $num3){
        $dia = 29;
        $mes = 7;
        $ano = 2024;
        if (checkdate($mes, $dia, $ano
        )){
            return "a data é valida";
        }else{
            return "a data é invalida";
        }
    }

    function media($num1, $num2, $num3, $num4, $num5){
        $resul = $num1 + $num2 + $num3 + $num4 + $num5;
        $media = $resul / 5;
        return $media;
    }

    

    function divisores($num){
        $i = 1;
        for ($i; $i <= $num; $i++){
            if ($num % $i == 0){
            return $i;
        }
        }
    }

    function contarPalavras($texto){
    $palavras = str_word_count($texto,0);
    return $palavras;
    }


    function fibonacci($num){
        $i = 0;
        $fib0 = 0;
        $fib1 = 0;
        $fib2 = 0;
        $resultado = $fib0."<br>".$fib1."<br>";
        
        for($i; $i <=)
    }
    

    //lista 2 

    function idade($num1,$num2,$num3){
        $resul = $num2 * 30;
        $resul2 = $num3 * 365;
        $reuslFinal = $num1 + $resul + $resul2;
        return $reuslFinal;
    }

    
    echo " <br> a soma dos numeros é: ".somar(5,9);
    echo " <br> a subtração dos numeros é ".subtrair(3,9);
    echo " <br> a multiplicação dos numeros é ".multiplicar(8,5);
    echo " <br> a divisão dos numeros é ".dividir(6,3);
    echo " <br> a potencia dos numeros é ".potencia(10,2);
    echo " <br> a raiz do numero é ".raiz(3,2);
    echo " <br> a taboada do numero informado é ".taboada(8);
    echo " <br> a area do retangulo informado é ".areaRetangulo(5,10);
    echo " <br> o x1 é  ".x1(-8,5,9);
    echo " <br> o x2 é  ".x2(-8,5,9);
    echo " <br> o numero é ".parImpar(10);
    echo " <br> ".maioridade(22);
    echo " <br> o dobro do numero é ".dobro(100);
    echo " <br> a temperatura em fahrenheit é ".temperatura(25);
    echo " <br> o maior numero dos tres é ".maior(19, 32, 54);
    echo " <br> ".negativo(2);
    echo " <br> ".somarNumeros(50);
    echo " <br> ".numeroPrimo(7);
    echo " <br> ".palindromo("ara");  
    echo " <br> ".fatorial(5);
    echo " <br> ".numerosPares(10);
    echo " <br> vogais na palavra digitada ".vogais("allen");
    echo " <br> ".data(12,18,2007);
    echo " <br> a media dos numeros é ".media(5,5,5,5,5);
    echo " <br> ".divisores(10);
    echo " <br> a quantidade de palavras é ".contarPalavras("tamo junto");
    //lista2 
    echo "<br> a idade em dias é ".idade(18,12,2007);
?> 