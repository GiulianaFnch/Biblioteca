<html>

<head>
    <meta charset="utf-8">
    <title>Gestão da Biblioteca</title> <!-- ao fim de 5 segundo redireciona para o index
    <meta http-equiv="refresh" content="3;url=index.php">-->
</head>

<body>
    <h1>Inserir Livros</h1>
    <?php
    
    include_once 'include/liga_bd.php';
    
    include 'include/valida_foto.php';
    if ($uploadOk == 0) {
        echo "<p>Erro no upload da foto</p>";
    } else {
        if ($uploadOk == 1) {
            move_uploaded_file($_FILES['ficheiro']['tmp_name'], $target_file);
            $sql = "INSERT INTO livro (isbn, titulo, autor, n_paginas, editora, tamanho, foto) VALUES ('$_POST[isbn]', '$_POST[titulo]', '$_POST[autor]',$_POST[n_paginas], '$_POST[editora]','$_POST[tamanho]', '" . $foto . "')";
            if (mysqli_query($ligacao, $sql))
                echo "<h3>Livro inserido com sucesso!</h3>";
            mysqli_close($ligacao);
            echo "<br/>";
        }
    }
    ?>
    <br />
    <h4>Aguarde que vai ser redirecionado</h4><a href="index.php" target="_self">Volta ao Menu</a>
</body>

</html>