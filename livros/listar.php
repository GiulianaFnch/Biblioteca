<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da biblioteca</title>
    </head>
    <body>
        <h1>Listagem de Livros</h1>
        <?php
        include_once'include/liga_bd.php';
        
        $sql ="SELECT * FROM livro";
        // a variavel resultado vai guardar todos os dados de todos os manuais
        // o primeiro parametro é a base dados e o segundo a instrução sql
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //variavel para contar os registos
        $conta=0;
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "ISBN: ". $linha['isbn']. "<br/>";
            echo "Título: ". $linha['titulo']. "<br/>";
            echo "Autor: ". $linha['autor']. "<br/>";
            echo "Num. Páginas: ". $linha['n_paginas']. "<br/>";
            echo "Editora: ". $linha['editora']. "<br/>";
            echo "Tamanho: ". $linha['tamanho']. "<br/>";
            echo "<hr/>";
            $conta++;
        }
        mysqli_close($ligacao);
        echo "<br/>";
        echo "<b>Numero de Manuais na base de dados -> " . $conta . "</b>";
        //fecho a instrução de escrita em php
        ?>
        <br/>
        <a href="index.php" target="_self">Volta ao Menu</a>
    </body>
</html>

<3