<?php

// conexão com o banco
include "conecta_banco.php";


// cadastrar/inserir dados no banco
$banco = "INSERT INTO cadastro_usuario (id, nome, sobrenome, idade, telefone, email, senha) 
VALUES (' ', '$_POST[nome]', '$_POST[sobrenome]', '$_POST[idade]', '$_POST[telefone]', '$_POST[email]','$_POST[senha]')";
	
  
if (mysqli_query($conexao, $banco)) {
 
    echo "Cadastro feito com sucesso!";
} else {
    echo "Error: " . $banco . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>