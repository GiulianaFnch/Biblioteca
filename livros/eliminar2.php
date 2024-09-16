<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de  Livros</title>
        <meta http-equiv="refresh" content="3;url=index.php">
    </head>
    <body>
        <h1>Eliminar Livros</h1>
        <?php
        include_once'include/liga_bd.php';
        
        $sql ="DELETE from livro WHERE isbn='".$_POST['isbn']."'";

        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Livro eliminado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4>
        <a href="index.php" target="_self">Volta ao Menu</a>
    </body>
</html>