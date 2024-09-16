<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da Biblioteca</title>
        <!-- ao fim de 5 segundo redireciona para o index-->
    </head>
    <body>
        <h1>Alterar Livros</h1>
        <?php
        include_once'include/liga_bd.php';// caso não tenha trocado a imagem
    if (empty($_FILES['ficheiro']['name'][0])) {
        $sql = "UPDATE t_user SET nick='".$_POST['nick']."', nome='".$_POST['nome']."', email='".$_POST['email']."', data_nasc='".$_POST['data_nasc']."', pass='".$tmp."' WHERE id=".$_POST['id'];
        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<p>Registo alterado com sucesso</p>";
    }
    // caso tenha trocado a imagem
    else {
        include 'include/valida_foto.php';
        if($uploadOk ==1){
            // crio a instrucao sql para atualizar a base de dados
            $sql ="UPDATE livro set titulo='$_POST[titulo]', autor='$_POST[autor]', n_paginas=$_POST[n_paginas], editora='$_POST[editora]', tamanho='$_POST[tamanho]', foto='".$foto."' where isbn ='$_POST[isbn]'";
            // caso consiga executar a ação mostra a mensagem de sucesso
            if (mysqli_query($ligacao, $sql)) {
                echo '<p>Registo alterado com sucesso</p>';
                // primeiro envio a nova imagem
                move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file);
                // apago a imagem anterior
                unlink('fotos/'.$_POST['nome_foto']);
            }
        }
    }
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4>
        <a href="index.php" target="_self">Volta ao Menu</a>
    </body>
</html>