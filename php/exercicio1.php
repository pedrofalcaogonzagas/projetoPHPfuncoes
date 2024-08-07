<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = 0;
        $num2 = 0;
    ?>
    <h1>EXERCICIO 1</h1>
    <form method="POST">
        <label>escreva sua idade em anos</label>
        <input type="number" id="$idade" name="idade"> <br><br>

        <label>escreva sua idade em meses</label>
        <input type="number" id="meses" name="meses"> <br><br>

        <label>escreva sua idade em dias</label>
        <input type="number" id="dias" name="dias">
        
        <button>calcular</button><br><br>
        <?php
            $idade = $_POST['idade'];
            $meses = $_POST['meses'];
            $dias = $_POST['dias'];
        ?>

        <textarea rows="40" cols="40" readonly fixed >
            <?php
        

            if ($num1 == 0 || $num2 == 0){
                echo "preencha os campos";
            }else{
                echo "essa é a soma dos numeros digitados ".somar($num1,$num2);
            }
            ?>
        </textarea>

    </form>
</body>
</html>