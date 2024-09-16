 <html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de Empréstimos</title>
        <meta http-equiv="refresh" content="3;url=listar.php">
    </head>
    <body>
    <?php
include_once 'includes/liga_bd.php';

$sql ="DELETE from emprestimo WHERE emprestimo_id='".$_POST['emprestimo_id']."'";

        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Empréstimo eliminado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        
        echo"<br/><h4>Aguarde que vai ser redirecionado</h4>";
        echo"<a href='listar.php' target='_self'>Volta ao Menu</a>";

?>
</html>