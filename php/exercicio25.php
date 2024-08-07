<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 25</title>
</head>
<body>
<?php
    include 'funcoes.php';
    $texto = ""
    ?>
    <h1>EXERCICIO 25</h1>
        <form method="POST">
            <label>digite o texto</label>
            <input type="text" id="texto" name="texto"> <br><br>
            
            <button>calcular</button><br><br>
            <?php
                $texto = $_POST['texto'];
            ?>

            <textarea rows="10" cols="50" readonly fixed>
                <?php
                    if ($num1 < 0 ){
                        echo "preencha os campos";
                    }else{
                        echo "essa é a quantnidade de palavras ".contarPalavras($texto);
                    }
                ?>
            </textarea>
        </form>
</body>
</html>