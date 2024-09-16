<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da biblioteca</title>
    </head>
    <body>
        <h1>Alterar Livros</h1>
        <form action="alterar2.php" method="post">
        <label for="isbn">Escolha um livro a alterar: </label>
        <select name="isbn">
        
        <?php
        include_once'include/liga_bd.php';
        
        $sql ="SELECT * FROM livro";
        // a variavel resultado vai guardar todos os dados de todos os manuais
        // o primeiro parametro é a base dados e o segundo a instrução sql
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<option value='". $linha['isbn']. "'>";
            echo $linha['titulo']. "</option>";
        }
        mysqli_close($ligacao);
        //fecho a instrução de escrita em php
        ?>
        </select>
        <input type="submit" value="Alterar">
        </form>
        <a href="index.php" target="_self">Volta ao Menu</a>
    </body>
</html>