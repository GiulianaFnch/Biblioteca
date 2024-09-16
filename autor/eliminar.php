 <html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de Leitores</title>
        <meta http-equiv="refresh" content="3;url=listar.php">
    </head>
    <body>
    <?php
include_once 'includes/liga_bd.php';

$sql ="DELETE from autor WHERE autor_id='".$_POST['autor_id']."'";

        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Leitor eliminado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        
        echo"<br/><h4>Aguarde que vai ser redirecionado</h4>";
        echo"<a href='listar.php' target='_self'>Volta ao Menu</a>";

?>
</html>