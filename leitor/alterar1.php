        <html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de Leitores</title>
        <meta http-equiv="refresh" content="3;url=listar.php">
    </head>
    <body>
    <?php
        include_once 'includes/liga_bd.php';
        
        $tmp = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        //crio a instrução sql para inserir um novo registo
        
        $sql ="UPDATE leitor set primeiro_nome='$_POST[primeiro_nome]', ultimo_nome='$_POST[ultimo_nome]', 
        data_aniversario='$_POST[data_aniversario]', morada='$_POST[morada]', 
        telemovel='$_POST[telemovel]', email='$_POST[email]', senha='" . $tmp . "'  where leitor_id ='$_POST[leitor_id]'";
        // os campos recebidos do formulário anterior pelo metodo post, tudo tem pelicas
        // menos os campos do tipo numero (n_paginas tipo int)
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Leitor alterado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        
        echo "<br/><h4>Aguarde que vai ser redirecionado</h4>";
        echo "<a href='listar.php' target='_self'>Volta ao Menu</a>";
        ?>
    </html