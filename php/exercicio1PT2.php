<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1 pt 2</title>
</head>
<body>
<?php
    include 'funcoes.php';
    $num1 = 1
    ?>
    <h1>EXERCICIO 1 pt 2</h1>
    <h3>SUA IDADE EM DIAS</h3>
        <form method="POST">
            <label>digite o mes em que voce nasceu</label>
            <input type="number" id="idade" name="idade"> <br><br>
            
            <label>digite o dia em que voce nasceu</label>
            <input type="number" id="meses" name="meses"> <br><br>

            <label>digite o ano em que voce nasceu</label>
            <input type="number" id="dias" name="dias"> <br><br>


            <button>calcular</button><br><br>
            <?php
                $idade = $_POST['idade'];
                $meses = $_POST['meses'];
                $dias = $_POST['dias'];
            ?>

            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($num1 < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "essa é a sua idade em dias ".idadeDias($dias,$meses,$idade,$resultado);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>