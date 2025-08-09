<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aleatório</title>
</head>
<body>
    <section>
        <?php 
        // O rand gera um núemro aleatório em que o primerio termo é o minimo e o segundo o maximo
        // Use o mt_rand, ele é masi confiavel, porém não aceita que o maior esteja antes do menor
        $_numeroAleatorio = mt_rand(0,100);

        // Existe o random_int() que geral um número aleatório criptograficamente seguro, mas é o masi lento

        echo("<p>O número aleatório gerado entre 0 e 100 foi: <b>" . $_numeroAleatorio);
        ?>
    </section>
    <p></p><a href=""><?php header("Refresh")?>Recaregar a página</a>
</body>

</html>
