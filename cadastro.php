<?php

include("./conexao.php")

$nome = $_POST['name'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(mysqli_query($conexão. $sql)){
    echo "Cadastro realizado com sucesso!";
}else(
    echo "ERRO!" .mysqli_connect_error($conexao);
)

/*
$sql = "INSERT INTO cadastro(nome, nascimento, email & senha") VALUES ('$nome', '$nascimento', 'email', '$senha');
$nome = $_POST['name'];
$genero = $_POST['genero'];
$estado = $_POST['estado'];
$qtdIrmaos = $_POST['irmao'];
foreach ($qtdIrmaos as $val) {
    $msg .= $val . ", ";
}

echo "O nome é $nome, o gênero é $genero, o estado é $estado e são $msg irmãos.";
*/
?>