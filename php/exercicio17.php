<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 17</title>
</head>
<body>
<?php
        include 'funcoes.php';
        $num1 = 0;
    ?>
    <h1>EXERCICIO 17</h1>
    <form method="POST">
        <label>primeiro numero</label>
        <input type="number" id="num1" name="num1"> <br><br>
        
        <button>calcular</button><br><br>
        <?php
            $num1 = $_POST['num1'];
        ?>

        <textarea rows="40" cols="40" readonly fixed >
            <?php
                if ($num1 < 0){
                    echo "preencha os campos";
                }else{
                    echo "".numeroPrimo($num1);
                }
            ?>
        </textarea>

    </form>
</body>
</html>