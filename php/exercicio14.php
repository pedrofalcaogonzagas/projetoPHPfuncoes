<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 14</title>
</head>
<body>
<?php
        include 'funcoes.php';
        $num1 = 0;
        $num2 = 0;
    ?>
    <h1>EXERCICIO 14</h1>
    <form method="POST">
        <label>primeiro numero</label>
        <input type="number" id="num1" name="num1"> <br><br>
        <label>segundo numero</label>
        <input type="number" id="num2" name="num2"> <br><br>
        <label>segundo numero</label>
        <input type="number" id="num3" name="num3">
        
        <button>calcular</button><br><br>
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
        ?>

        <textarea rows="40" cols="40" readonly fixed >
            <?php
                if ($num1 == 0 || $num2 == 0 || $num3 == 0){
                    echo "preencha os campos";
                }else{
                    echo "esse é o maior numero ".maior($num1,$num2,$num3);
                }
            ?>
        </textarea>

    </form> 
</body>
</html>