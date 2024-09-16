<?php
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';
include_once 'includes/liga_bd.php';

$sql = "SELECT * FROM emprestimo Where emprestimo_id='" . $_POST['emprestimo_id'] . "'";
// a variavel resultado vai guardar todos os dados de todos os manuais
// o primeiro parametro é a base dados e o segundo a instrução sql
$resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
$linha = mysqli_fetch_assoc($resultado);
?>

<head>
    <link href="../css/checkout.css" rel="stylesheet">
</head>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/iefp_png" alt="" width="80" height="auto">
        <h2>Editar empréstimo</h2>
        <p class="lead">Preencha esse formulário para<strong> alterar</strong> um empréstimo no banco de dados</p>
    </div>

    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Formulário</h4>


            <form action="alterar1.php" method="POST">
                
                <input type='hidden' name='emprestimo_id' value="<?php echo $linha['emprestimo_id']; ?>">

                <div class="row g-3">
                    <label for="livro_id">Livro:</label>
                    <select name="livro_id" id="livro_id">
                        <?php
                        $sql1 = "SELECT * FROM livro";
                        $resultado_livro = mysqli_query($ligacao, $sql1) or die(mysqli_error($ligacao));
                        //enquanto conseguir ler dados do array resultado imprime
                        while ($linha1 = mysqli_fetch_assoc($resultado_livro)) {
                            $selected = ($linha1['livro_id'] == $linha['livro_id']) ? 'selected' : '';
                            echo "<option value='" . $linha1['livro_id'] . "' $selected>" . $linha1['titulo'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="leitor_id">Leitor: </label>
                    <select name="leitor_id" id="leitor_id">
                        <?php
                        $sql2 = "SELECT * FROM leitor";
                        $resultado2 = mysqli_query($ligacao, $sql2) or die(mysqli_error($ligacao));
                        //enquanto conseguir ler dados do array resultado imprime
                        while ($linha2 = mysqli_fetch_assoc($resultado2)) {
                            $selected = ($linha2['leitor_id'] == $linha['leitor_id']) ? 'selected' : '';
                            echo "<option value='" . $linha2['leitor_id'] . "' $selected>" . $linha2['primeiro_nome'] . " " . $linha2['ultimo_nome'] . "</option>";
                        }
                        ?>
                    </select>

                    
                    <label for="data_emp">Data empréstimo:</label>
                    <input type="date" name="data_emp" value="<?php echo $linha['data_emp']; ?>">

                    <label for="data_vencimento">Data vencimento:</label>
                    <input type="date" name="data_vencimento" value="<?php echo $linha['data_vencimento']; ?>">

                    <label for="data_entrega">Data entrega:</label>
                    <input type="date" name="data_entrega" value="<?php echo $linha['data_entrega']; ?>">
                    
                    
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