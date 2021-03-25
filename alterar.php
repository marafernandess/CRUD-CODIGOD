<?php

// conecta com o banco
include "conecta_banco.php";

// campos que podem ser alterados
$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$banco = "UPDATE cadastro_aluno SET senha = '$senha' WHERE nome = '$usuario'";
if (mysqli_query($conexao, $banco)) 
{
	echo "Senha alterada com sucesso!";
}
else
{
	echo "Falha na alteracao da senha";
}

?>