<?php
include_once 'include/liga_bd.php';
include_once 'include/view/topo.php';
include_once 'include/view/menu.php';

?>
<head>
     <link href="../css/checkout.css" rel="stylesheet">
</head>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/iefp_png" alt="" width="80" height="auto">
                <h2>Inserir livros</h2>
                <p class="lead">Preencha esse formulário para inserir um livro no banco de dados</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulário</h4>
                    <form action="inserir1.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                        <label for="isbn">ISBN:</label>
                        <input type="text" name="isbn" size="13" maxlenght="13" required>
                        
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" size="100" maxlenght="100" required>
                        
                        <label for="autor">Autor:</label>
                        <input type="text" name="autor">
                        
                        <label for="n_paginas">Número de páginas:</label>
                        <input type="number" name="n_paginas"  size="5" min="1" max="99999" required>
                        
                        <label for="editora">Editora:</label>
                        <input type="text" name="editora" size="50" maxlenght="50">
                        
                        <label for="tamanho">Tamanho:</label>
                        <input type="text" name="tamanho" size="10" maxlenght="10">
                        <label for="ficheiro">Foto:</label>
                            <input type="file" name="ficheiro" required>
                    </div>
                        <br>
                        <input type="submit" value="Inserir">
                    </form>
                </div>
            </div>
        </main>

<?php
include_once 'include/view/rodape.php';
?>