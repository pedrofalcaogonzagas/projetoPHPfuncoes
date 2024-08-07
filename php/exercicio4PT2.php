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
    <h1>EXERCICIO 3 pt 2</h1>
    <h3>SALDO POSITIVO E NEGATIVO</h3>
        <form method="POST">

            <label>informe seu debito</label>
            <input type="number" id="debito" name="debito"> <br><br>

            <label>informe seu credito</label>
            <input type="number" id="credito" name="credito"> <br><br>

            <label>informe seu saldo</label>
            <input type="number" id="saldo" name="saldo"> <br><br>


            <button>calcular</button><br><br>
            <?php
                $debito = $_POST['debito'];
                $credito = $_POST['credito'];
                $saldo = $_POST['saldo'];
                $saldoAtual = $_POST['saldoAtual'];
            ?>
            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($saldo || $credito || $debito < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "esse é o seu salario final".debito($saldo,$credito,$debito,$saldoAtual);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>