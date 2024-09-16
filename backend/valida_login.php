<?php
session_start();

// liga á base de dados
$servidor = "localhost";
$utilizador = "root";
$senha = "";
$bd = "id22264266_bd_biblioteca";
//criar a variavel ligacao (1º ip do servidor, 2º nome do utilizador)
// (3º senha por defeito vazia, e 4º nome da base de dados)   
$ligacao = mysqli_connect($servidor, $utilizador, $senha, $bd);
// tento executar a ligação ao meu servidor
if ($ligacao->connect_error)
    die(mysqli_error($ligacao));


$sql = "SELECT * FROM leitor WHERE email='$_POST[email]'";
$resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
$linha = mysqli_fetch_assoc($resultado);

if ($linha == NULL) {
    echo "<h2>Utilizaor inexistente</h2>";
    echo "<input type='button' class='custom-button' value='Voltar a tentar'
            onclick=window.open('index.html','_self')>";
} else {
    if (password_verify($_POST['senha'], $linha['senha'])) {
        if ($linha['tipo_user'] == 1) {
            echo "<h1>Biblioteca</h1>";
            echo "<h2>A sua conta se encontra bloqueada</h2>";
            echo "<img width='200' src='img/bloq.png'>";
            ?>
            <br><input type="button" class="custom-button" value="voltar ao menu" onclick="window.open('index.html','_self')">
            <?php
        } else {
            echo "<h1>Biblioteca</h1>";
            echo "<h2>Bem vindo " . $linha['primeiro_nome'] . "</h2>";
            $_SESSION['leitor_id'] = $linha['leitor_id'];
            $_SESSION['primeiro_nome'] = $linha['primeiro_nome'];
            echo "<h2>Utilizador validado</h2>";
            echo "<input type='button' class='custom-button' value='Continuar'
            onclick=window.open('../livros/','_self')>";
        }
    } else {

        echo "Email: " . $_POST['email'] . "<br>";
        echo "Senha: " . $_POST['senha'] . "<br>";

        echo "<h2>Senha incorreta</h2>";
        echo "<input type='button' class='custom-button' value='Voltar a tentar'
            onclick=window.open('../login.php','_self')>";
    }
}
mysqli_close($ligacao);
?>
