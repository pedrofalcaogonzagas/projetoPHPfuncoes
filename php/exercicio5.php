<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 5</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = 0;
        $num2 = 0;
    ?>
    <h1>EXERCICIO 5</h1>
    <form method="POST">
        <label>primeiro numero</label>
        <input type="number" id="num1" name="num1"> <br><br>
        <label>segundo numero</label>
        <input type="number" id="num2" name="num2">
        
        <button>calcular</button><br><br>
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        ?>

        <textarea rows="40" cols="40" readonly fixed >
            <?php
                if ($num1 == 0 || $num2 == 0){
                    echo "preencha os campos";
                }else{
                    echo "essa é a multiplicação dos numeros digitados ".potencia($num1,$num2);
                }
            ?>
        </textarea>

    </form> 
</body>
</html>