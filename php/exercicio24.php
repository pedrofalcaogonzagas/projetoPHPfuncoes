<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 24</title>
</head>
<body>
<?php
    include 'funcoes.php';
    $num1 = 1
    ?>
    <h1>EXERCICIO 24</h1>
        <form method="POST">
            <label>digite o numero</label>
            <input type="number" id="num1" name="num1"> <br><br>
            
            <button>calcular</button><br><br>
            <?php
                $num1 = $_POST['num1'];
            ?>

            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($num1 < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "esses são os numeros que podem dividir ".divisores($num1);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>