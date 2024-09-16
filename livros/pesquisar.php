<html>
<head>
        <meta charset="utf-8">
        <title>Gestão da biblioteca</title>
    </head>
    <body>
        <h1>Pesquisa de Livros</h1>
        <?php
        // liga á base de dados
        $servidor="localhost";
            $utilizador="id22264266_giuliana";
            $senha="#Avelar123";
            $bd="id22264266_bd_biblioteca";
    //criar a variavel ligacao (1º ip do servidor, 2º nome do utilizador)
    // (3º senha por defeito vazia, e 4º nome da base de dados)   
    $ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
    // tento executar a ligação ao meu servidor
    if ($ligacao->connect_error)
        die(mysqli_error($ligacao));
        //crio a instrução sql para selecionar todos os registos
        $sql ="SELECT * FROM livro WHERE " . $_GET['campo'] . " LIKE '%" . $_GET['valor'] . "%'" ;
        // a variavel resultado vai guardar todos os dados que obedecem à pesquisa
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
            echo "<form action='alterar2.php' method='post'>";
            echo "<input type='hidden' name='isbnP' value='". $linha['isbn']. "'>";
            echo "<input type='submit' value='Alterar'></form>";
            echo "<form action='eliminar2.php' method='post'>";
            echo "<input type='hidden' name='isbnP' value='". $linha['isbn']. "'>";
            echo "<input type='submit' value='Eliminar'></form>";
            echo "<hr/>";
            $conta++;
        }
        mysqli_close($ligacao);
        echo "<br/>";
        echo "<b>Numero de Manuais na pesquisa -> " . $conta . "</b>";
        //fecho a instrução de escrita em php
        ?>
        <br/>
        <a href="index.php" target="_self">Volta ao Menu</a>
    </body>
</html>