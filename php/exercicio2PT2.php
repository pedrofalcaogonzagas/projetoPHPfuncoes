<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2 pt 2</title>
</head>
<body>
<?php
    include 'funcoes.php';
    $num = 1
    ?>
    <h1>EXERCICIO 2 pt 2</h1>
    <h3>PREÇO DAS MAÇAS</h3>
        <form method="POST">
            <label>digite a quantidade de maças compradas</label>
            <input type="number" id="num" name="num"> <br><br>

            <button>calcular</button><br><br>
            <?php
                $num = $_POST['num'];
            ?>
            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($num1 < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "esse é o valor da compra ".macas($num);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>