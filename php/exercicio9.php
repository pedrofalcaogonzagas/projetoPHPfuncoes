<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 9</title>
</head>
<body>
<?php
        include 'funcoes.php';
        $num1 = 0;
        $num2 = 0;
    ?>
    <h1>EXERCICIO 9</h1>
    <form method="POST">
        <label>informe o "A"</label>
        <input type="number" id="num1" name="num1"> <br><br>

        <label>informe o "B"</label>
        <input type="number" id="num2" name="num2"> <br><br>

        <label>informe o "C"</label>
        <input type="number" id="num3" name="num3"> <br><br>
        
        <button>calcular</button><br><br>
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
        ?>

        <textarea rows="20" cols="20" readonly fixed>
            <?php
            echo "esse é o x1".x1($num1,$num2,$num3);
            ?>
        </textarea>
        
        <textarea rows="20" cols="20" readonly fixed>
            <?php
            echo "esse é o x2".x2($num1,$num2,$num3);
            ?>
        </textarea>

    </form> 
</body>
</html>