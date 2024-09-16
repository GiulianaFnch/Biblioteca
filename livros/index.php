<?php
include_once 'include/liga_bd.php';
include_once 'include/view/topo.php';
include_once 'include/view/menu.php';

?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestão da Biblioteca</h1>
                    
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <form action="livros/pesquisar.php" method="get">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1">
                                <input type="text" name="valor" required maxlength="50">
                                <select name="campo">
                                    <option value="isbn">ISBN</option>
                                    <option value="titulo">Título</option>
                                    <option value="editora">Editora</option>
                                    <option value="autor">Autor</option>
                                    <option value="tamanho">Tamanho</option>
                                    <option value="n_paginas">Número de Páginas</option>
                                </select>
                                <input type="submit" value="Pesquisar">
                                
                            </button>
                        </form>
                    </div>
                    
                </div>


                <h2>Listagem Livros</h2>
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ISBN</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Núm. Páginas</th>
                                <th scope="col">Editora</th>
                                <th scope="col">Tamanho</th>
                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            //enquanto conseguir ler dados do array resultado imprime
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                                echo "<td>" . $linha['isbn'] . "</td>";
                                echo "<td>" . $linha['titulo'] . "</td>";
                                echo "<td>" . $linha['autor'] . "</td>";
                                echo "<td>" . $linha['n_paginas'] . "</td>";
                                echo "<td>" . $linha['editora'] . "</td>";
                                echo "<td>" . $linha['tamanho'] . "</td>";
                                echo "<td><img src='fotos/" . $linha['foto'] . "' class='' width='100px'</td>";
                                
                                echo "<td>
                                    <form action='alterar2.php' method='post'>
                                        <input type='hidden' name='isbn' value='" . $linha['isbn'] . "'>
                                        <button type='submit' class='btn btn-sm btn-outline-primary'>Editar</button>
                                    </form>
                                </td>";
                                echo "<td>
                                    <form action='eliminar2.php' method='post'>
                                        <input type='hidden' name='isbn' value='" . $linha['isbn'] . "'>
                                        <button type='submit' class='btn btn-sm btn-outline-danger'>Excluir</button>
                                    </form>
                                </td>";
                                echo "</tr>";
                                $conta++;
                            }
                            mysqli_close($ligacao);
                            
                            //fecho a instrução de escrita em php
                            ?>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
                <a href='inserir.php'><button type="button" class='btn btn-sm btn-outline-primary'>Adicionar Livro</button></a>
            </main>

<?php
include_once 'include/view/rodape.php';
?>