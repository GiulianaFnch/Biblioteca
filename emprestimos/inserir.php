<?php
include_once 'includes/liga_bd.php';
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';

?>
<head>
     <link href="../css/checkout.css" rel="stylesheet">
     
</head>
<body>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/iefp_png" alt="" width="80" height="auto">
                <h2>Novo empréstimo</h2>
                <p class="lead">Preencha esse formulário para inserir um empréstimo no banco de dados</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulário</h4>
                    
                    
                    <form action="inserir1.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <label for="livro_id">Livro:</label>
                            <select name="livro_id" id="livro_id">
                                <?php
                                $sql = "SELECT * FROM livro";
                                $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
                                //variavel para contar os registos
                                //enquanto conseguir ler dados do array resultado imprime
                                while ($linha = mysqli_fetch_assoc($resultado)) {
                               
                    echo "<option value='" . $linha['livro_id'] . "'>" . $linha['titulo'] . "</option>";
            }
            ?>
        </select>
        
        
        <br>Leitor: <select name="leitor_id" id="leitor_id" onchange="atualiza();">
            <?php
            $sql2 = "SELECT * FROM leitor";
            // a variavel resultado vai guardar todas as subcategorias da categoria selecionada
            
            $resultado2 = mysqli_query($ligacao, $sql2) or die(mysqli_error($ligacao));
            //enquanto conseguir ler dados do array resultado imprime
            while ($linha2 = mysqli_fetch_assoc($resultado2)) {
                echo "<option value='" . $linha2['leitor_id'] . "'>" . $linha2['primeiro_nome'] ." ". $linha2['ultimo_nome']. "</option>";
            }
            ?>
        </select>
                        <label for="data_emp">Data empréstimo:</label>
                        <input type="date" name="data_emp" required>
                        
                        <label for="data_vencimento">Data vencimento:</label>
                        <input type="date" name="data_vencimento" required>
                        
                       <!-- <label for="data_entrega">Data entrega:</label>
                        <input type="date" name="data_entrega">
                        -->
                    </div>
                        <br>
                        <input type="submit" value="Inserir">
                    </form>
                </div>
            </div>
        </main>
        </body>

<?php
include_once 'includes/view/rodape.php';
?>