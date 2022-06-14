<?php

//Fazer uma conexão simples no banco de dados 
$servidor = "localhost";
$bdname = "cadastro";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($sevidor, $usuario, $senha, $bdname);

//Verifica se deu certo a conexão ocm o banco de dados
if(!$conexao){
    die("Problemas na conexão com o banco de dados, Descrição do problema:" . mysqli_connect_error());
}
 echo "Operação realizada com sucesso! <br>";
 //echo "<br>";
 echo "Obrigado por utilizar nosso sistema!";
// Fecha a conexão BD
mysqli_close($conexao);

/*
Formas padrão, 
*/
?>