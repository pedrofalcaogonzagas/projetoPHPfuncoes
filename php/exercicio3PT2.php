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
    <h3>COMISSÃO E SALARIO</h3>
        <form method="POST">

            <label>informe seu salario</label>
            <input type="number" id="salario" name="salario"> <br><br>

            <label>informe o total em vendas feita por voce</label>
            <input type="number" id="vendas" name="vendas"> <br><br>


            <button>calcular</button><br><br>
            <?php
                $salario = $_POST['salario'];
                $vendas = $_POST['vendas'];
            ?>
            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($salario < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "esse é o seu salario final".vendaCarro($salario,$vendas);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>