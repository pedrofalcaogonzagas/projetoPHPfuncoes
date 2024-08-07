<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 20</title>
</head>
<body>
    <?php
    include 'funcoes.php';
    $num = 1
    ?>
    <h1>EXERCICIO 20</h1>
        <form method="POST">
            <label>primeiro numero</label>
            <input type="number" id="num" name="num"> <br><br>
            
            <button>calcular</button><br><br>
            <?php
                $num = $_POST['num'];
            ?>

            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($num < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "esses são os numeros pares ".numerosPares($num);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>