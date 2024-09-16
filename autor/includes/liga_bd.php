<?php
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
//crio a instrução sql para selecionar todos os registos
$sql = "SELECT * FROM autor";
// a variavel resultado vai guardar todos os dados de todos os manuais
// o primeiro parametro é a base dados e o segundo a instrução sql
$resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
//variavel para contar os registos
$conta = 0;
?>