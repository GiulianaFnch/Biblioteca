<?php
include_once 'includes/liga_bd.php';
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';

?>
<head>
     <link href="../css/checkout.css" rel="stylesheet">
</head>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/iefp_png" alt="" width="80" height="auto">
                <h2>Inserir leitores</h2>
                <p class="lead">Preencha esse formulário para inserir um leitor no banco de dados</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulário</h4>
                    <form action="inserir1.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                        <label for="primeiro_nome">Primeiro nome:</label>
                        <input type="text" name="primeiro_nome" size="13" maxlenght="13" required>
                        
                        <label for="ultimo_nome">Último nome:</label>
                        <input type="text" name="ultimo_nome" size="100" maxlenght="100" required>
                        
                        <label for="data_aniversario">Data aniversário:</label>
                        <input type="date" name="data_aniversario">
                        
                        <label for="morada">Morada:</label>
                        <input type="text" name="morada">
                        
                        <label for="telemovel">Telemóvel:</label>
                        <input type="text" name="telemovel" maxlenght="15">
                        
                        <label for="email">Email:</label>
                        <input type="text" name="email">

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" maxlenght="15">

                    </div><br>
                        
                        <input type="submit" value="Inserir">
                    </form>
                </div>
            </div>
        </main>

<?php
include_once 'includes/view/rodape.php';
?>