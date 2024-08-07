<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 23</title>
</head>
<body>
<?php
    include 'funcoes.php';
    ?>
    <h1>EXERCICIO 23</h1>
    <h3>DIVISÃO DE 5 NUMEROS</h3>
    
        <form method="POST">
            <label>digite o primeiro numero</label>
            <input type="number" id="num1" name="num1"> <br><br>
            
            <label>digite o segundo numero</label>
            <input type="number" id="num2" name="num2"> <br><br>

            <label>digite o terceiro numero</label>
            <input type="number" id="num3" name="num3"> <br><br>
            
            <label>digite o quarto numero</label>
            <input type="number" id="num4" name="num4"> <br><br>
            
            <label>digite o quinto numero</label>
            <input type="number" id="num5" name="num5"> <br><br>


            <button>calcular</button><br><br>
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
            ?>

            <textarea rows="10" cols="50" readonly fixed >
                <?php
                    if ($palavra == ""){
                        echo "preencha o campo";
                    }else{
                        echo "essa é a media".media($num1,$num2,$num3,$num4,$num5);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>