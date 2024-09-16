<?php
include_once 'includes/liga_bd.php';
include_once 'includes/view/topo.php';
include_once 'includes/view/menu.php';

?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestão da Biblioteca</h1>
                    
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
                    </div>
                    
                </div>


                <h2>Listagem Leitores</h2>
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Primeiro nome</th>
                                <th scope="col">Último nome</th>
                                <th scope="col">Aniversário</th>
                                <th scope="col">Morada</th>
                                <th scope="col">Telemóvel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tipo usuário</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            //enquanto conseguir ler dados do array resultado imprime
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                                echo "<td>" . $linha['primeiro_nome'] . "</td>";
                                echo "<td>" . $linha['ultimo_nome'] . "</td>";
                                echo "<td>" . $linha['data_aniversario'] . "</td>";
                                echo "<td>" . $linha['morada'] . "</td>";
                                echo "<td>" . $linha['telemovel'] . "</td>";
                                echo "<td>" . $linha['email'] . "</td>";
                                echo "<td>" . $linha['tipo_user'] . "</td>";
                                echo "<td>
                                    <form action='alterar.php' method='post'>
                                        <input type='hidden' name='leitor_id' value='" . $linha['leitor_id'] . "'>
                                        <button type='submit' class='btn btn-sm btn-outline-primary'>Editar</button>
                                    </form>
                                </td>";
                                echo "<td>
                                    <form action='eliminar.php' method='post'>
                                        <input type='hidden' name='leitor_id' value='" . $linha['leitor_id'] . "'>
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
                <a href='inserir.php'><button type="button" class='btn btn-sm btn-outline-primary'>Adicionar Leitor</button></a>
            </main>

<?php
include_once 'includes/view/rodape.php';
?>