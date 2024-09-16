<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da Biblioteca</title>
        <!-- ao fim de 5 segundo redireciona para o index
        <meta http-equiv="refresh" content="3;url=listar.php">-->
    </head>
    <body>
        <h1>Inserir Leitores</h1>
        <?php
        include_once 'includes/liga_bd.php';
        //crio a instrução sql para inserir um novo registo
        $sql = "INSERT INTO autor (primeiro_nome, ultimo_nome, data_aniversario) VALUES ('$_POST[primeiro_nome]', '$_POST[ultimo_nome]', '$_POST[data_aniversario]')";
        // os campos recebidos do formulário anterior pelo metodo post, tudo tem pelicas
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Leitor inserido com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4><a href="listar.php" target="_self">Volta ao Menu</a>
    </body>
</html>

