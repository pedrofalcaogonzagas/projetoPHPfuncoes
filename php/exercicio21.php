<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 21</title>
</head>
<body>
    <?php
    include 'funcoes.php';
    ?>
    <h1>EXERCICIO 21</h1>
        <form method="POST">
            <label>escreva a palavra</label>
            <input type="text" id="palavra" name="palavra"> <br><br>
            
            <button>calcular</button><br><br>
            <?php
                $palavra = $_POST['palavra'];
            ?>

            <textarea rows="10" cols="50" readonly fixed >
                <?php
                    if ($palavra == ""){
                        echo "preencha o campo";
                    }else{
                        echo "essas são as vogais ".vogais($palavra);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>