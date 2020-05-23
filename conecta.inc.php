<?php
// conectando ao servidor
$conexao = mysqli_connect("localhost","root","");
// conectando ao BD criado
$db = mysqli_select_db($conexao, "site");
// Executando query e retornando valores da tabela "pedidos"
$query = mysqli_query($conexao, "SELECT * FROM pedidos");
if($conexao)
echo "Conectado ao Banco!";
else
echo "Sem conexão com o Banco!";
?>
