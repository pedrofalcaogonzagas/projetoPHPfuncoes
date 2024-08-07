<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio22</title>
</head>
<body>
    <?php
    include 'funcoes.php';
    ?>
    <h1>EXERCICIO 22</h1>
        <form method="POST">
            <label>informe o dia</label>
            <input type="number" id="mes" name="mes"> <br><br>
            
            <label>informe o mês</label>
            <input type="number" id="dia" name="dia"> <br><br>

            <label>informe o ano</label>
            <input type="number" id="ano" name="ano"> <br><br>


            <button>calcular</button><br><br>
            <?php
                $mes = $_POST['mes'];
                $dia = $_POST['dia'];
                $ano = $_POST['ano'];
            ?>

            <textarea rows="10" cols="50" readonly fixed >
                <?php
                    if ($mes || $dia || $ano == 0){
                        echo "preencha os campos";
                    }else{
                        echo "".data($mes,$dia,$ano);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>