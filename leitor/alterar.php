<?php
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';
include_once 'includes/liga_bd.php';

        $sql ="SELECT * FROM leitor Where leitor_id='" . $_POST['leitor_id']."'";
        // a variavel resultado vai guardar todos os dados de todos os manuais
        // o primeiro parametro é a base dados e o segundo a instrução sql
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        $linha = mysqli_fetch_assoc($resultado);
        ?>
<head>
     <link href="../css/checkout.css" rel="stylesheet">
</head>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/iefp_png" alt="" width="80" height="auto">
                <h2>Editar leitores</h2>
                <p class="lead">Preencha esse formulário para<strong> alterar</strong> um leitor no banco de dados</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulário</h4>
                    <form action="alterar1.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                        <input type='hidden' name='leitor_id' value="<?php echo $linha['leitor_id']; ?>">
                        <label for="primeiro_nome">Primeiro nome:</label>
                        <input type="text" name="primeiro_nome" size="13" maxlenght="13" required value="<?php echo $linha['primeiro_nome']; ?>">
                        
                        <label for="ultimo_nome">Último nome:</label>
                        <input type="text" name="ultimo_nome" size="100" maxlenght="100" required value="<?php echo $linha['ultimo_nome']; ?>">
                        
                        <label for="data_aniversario">Data aniversário:</label>
                        <input type="date" name="data_aniversario" value="<?php echo $linha['data_aniversario']; ?>">
                        
                        <label for="morada">Morada:</label>
                        <input type="text" name="morada" value="<?php echo $linha['morada']; ?>">
                        
                        <label for="telemovel">Telemóvel:</label>
                        <input type="text" name="telemovel" maxlenght="15" value="<?php echo $linha['telemovel']; ?>">
                        
                        <label for="email">Email:</label>
                        <input type="text" name="email" value="<?php echo $linha['email']; ?>">
                        
                        <label for="senha">Nova senha:</label>
                        <input type="password" name="senha" required>
                    </div>
                        <br>
                        <input type="submit" value="Inserir">
                    </form>
                </div>
            </div>
        </main>

<?php
include_once 'includes/view/rodape.php';
?>