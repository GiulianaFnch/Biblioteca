<?php
include_once 'includes/liga_bd.php';
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';

?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestão da Biblioteca</h1>
                    
                    <!--
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <form action="pesquisar.php" method="get">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1">
                                <input type="text" name="valor" required maxlength="50">
                                <select name="campo">
                                    <option value="primeiro_nome">Primeiro nome</option>
                                    <option value="ultimo_nome">Último nome</option>
                                    <option value="data_aniversario">Data aniversário</option>
                                    <option value="morada">Morada</option>
                                    <option value="telemovel">Telemóvel</option>
                                    <option value="email">Email</option>
                                </select>
                                <input type="submit" value="Pesquisar">
                                
                            </button>
                        </form>
                    </div> -->
                    
                </div>


                <h2>Listagem Empréstimos</h2>
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID </th>
                                <th scope="col">Livro</th>
                                <th scope="col">Leitor</th>
                                <th scope="col">Data Empréstimo</th>
                                <th scope="col">Data Vencimento</th>
                                <th scope="col">Data Entrega</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            //enquanto conseguir ler dados do array resultado imprime
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                                
                                $sql_livro = "SELECT * FROM livro WHERE livro_id=" . $linha['livro_id'];
                                $res_livro = mysqli_query($ligacao, $sql_livro) or die(mysqli_error($ligacao));
                                $linha_livro = mysqli_fetch_assoc($res_livro);
                                
                                $sql_leitor = "SELECT * FROM leitor WHERE leitor_id=" . $linha['leitor_id'];
                                $res_leitor = mysqli_query($ligacao, $sql_leitor) or die(mysqli_error($ligacao));
                                $linha_leitor = mysqli_fetch_assoc($res_leitor);
                                
                                echo "<td>" . $linha['emprestimo_id'] . "</td>";
                                echo "<td>" . $linha_livro['titulo'] . "</td>";
                                echo "<td>" . $linha_leitor['primeiro_nome'] ." ". $linha_leitor['ultimo_nome']. "</td>";
                                echo "<td>" . $linha['data_emp'] . "</td>";
                                echo "<td>" . $linha['data_vencimento'] . "</td>";
                                echo "<td>" . $linha['data_entrega'] . "</td>";
                                echo "<td>
                                    <form action='alterar.php' method='post'>
                                        <input type='hidden' name='emprestimo_id' value='" . $linha['emprestimo_id'] . "'>
                                        <button type='submit' class='btn btn-sm btn-outline-primary'>Editar</button>
                                    </form>
                                </td>";
                                echo "<td>
                                    <form action='eliminar.php' method='post'>
                                        <input type='hidden' name='emprestimo_id' value='" . $linha['emprestimo_id'] . "'>
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
                <a href='inserir.php'><button type="button" class='btn btn-sm btn-outline-primary'>Adicionar Empréstimo</button></a>
            </main>

<?php
include_once 'includes/view/rodape.php';
?>