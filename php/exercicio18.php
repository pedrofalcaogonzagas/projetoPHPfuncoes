<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 18</title>
</head>
<body>
<?php
        include 'funcoes.php';
        $palavra

    ?>
    <h1>EXERCICIO 18</h1>
    <form method="POST">
        <label>escreva a palavra </label>
        <input type="text" id="palavra" name="palavra"> <br><br>
    
        
        <button>calcular</button><br><br>
        <?php
            $palavra = $_POST['palavra'];
        ?>

        <textarea rows="20" cols="20" readonly fixed >
            <?php
                if ($palavra == 0 ){
                    echo "preencha os campos";
                }else{
                    echo "".palindromo($palavra);
                }
            ?>
        </textarea>

    </form>
</body>
</html>