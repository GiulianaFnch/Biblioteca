<?php
include_once 'include/view/topo.php';
include_once 'include/view/menu.php';
include_once 'include/liga_bd.php';

$sql = "SELECT * FROM livro Where isbn='" . $_POST['isbn'] . "'";
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
        <h1 class="h2">Alterar livros</h1>
        <p class="lead">Editar livros na base de dados</p>
    </div>

    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <form action="alterar3.php" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <label for="isbn">ISBN:</label>
                    <input type="text" name="isbn" size="13" readonly value="<?php echo $linha['isbn']; ?>" />

                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" size="80" required maxlength="100"
                        value="<?php echo $linha['titulo']; ?>">

                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" size="80" required maxlength="100"
                        value="<?php echo $linha['autor']; ?>" />

                    <label for="n_paginas">Nº Páginas:</label>
                    <input type="number" name="n_paginas" size="5" min="1" max="99999"
                        value="<?php echo $linha['n_paginas']; ?>">

                    <label for="editora">Editora:</label>
                    <input type="text" name="editora" size="50" maxlength="50" value="<?php echo $linha['editora']; ?>">

                    <label for="tamanho">Tamanho:</label>
                    <input type="text" name="tamanho" size="10" maxlength="10" value="<?php echo $linha['tamanho']; ?>">

                    <label>Foto: <img src="fotos/<?php echo $linha['foto']; ?>" width="100">
                        <input type="hidden" name="nome_foto" value="<?php echo $linha['foto']; ?>">
                    </label>

                    <label for="foto">Nova foto:</label>
                    <input type="file" name="ficheiro">
                    

                    <!--O botao submit envia os dados para a pagina inserir.php o reset limpa
                os dados de todos os campos -->
                </div><br>
                <input type="submit" value="Atualizar">
                <input type="reset" value="Limpar">
            </form>
        </div>
    </div>

    </div>
</main>
<?php
include_once 'include/view/rodape.php';
?>