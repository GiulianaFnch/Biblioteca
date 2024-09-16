<html>

<head>
    <meta charset="utf-8">
    <title>Gestão de Empréstimos</title>
    <meta http-equiv="refresh" content="3;url=listar.php">
</head>

<body>
    <?php
    include_once 'includes/liga_bd.php';

    $sql = "UPDATE emprestimo SET livro_id='$_POST[livro_id]', leitor_id='$_POST[leitor_id]', 
data_emp='$_POST[data_emp]', data_vencimento='$_POST[data_vencimento]'";

    // checa se o campo data_entrega foi preenchido
    if (!empty($_POST['data_entrega'])) {
        $sql .= ", data_entrega='$_POST[data_entrega]'";
    }
    // termina a query
    $sql .= " WHERE emprestimo_id ='$_POST[emprestimo_id]'";

    if (mysqli_query($ligacao, $sql)) {
        echo "<h3>Leitor alterado com sucesso!</h3>";
    } else {
        echo "<h3>Erro ao alterar o leitor.</h3>";
    }

    mysqli_close($ligacao);
    echo "<br/><h4>Aguarde que vai ser redirecionado</h4>";
    echo "<a href='listar.php' target='_self'>Volta ao Menu</a>";
    ?>