<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Idade para Votar</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Idade: <input type="text" name="idade"><br><br>
        <input type="submit" value="Ver">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //verifica se os campos foram preenchidos
    if (!empty($_POST['idade'])) {
        //obtem os valores dos numeros dos formulario
        $idade = $_POST['idade'];

        if ($idade >= 16){
            echo "<h3>Você tem $idade anos e pode votar!</h3> ";
        } else {
            echo "<h3>Você ainda não pode votar!</h3>";
        }
        
    } else {
        echo "<h3>Preencha o campo.</h3>";
    }
}
?>
</body>
</html>
