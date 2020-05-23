<?php
@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$telefone = $_POST['telefone'];
@$assunto = $_POST['assunto'];
@$mensagem = $_POST['mensagem'];
@$dados = "INSERT INTO pedidos (nome, email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
$query = mysqli_query($conexao,$dados);
?>