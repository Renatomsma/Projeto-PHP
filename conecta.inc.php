<?php
// conectando ao servidor
$conexao = mysqli_connect("localhost","id13745096_root","{~SszRICu7EHDA#|");
// conectando ao BD criado
$db = mysqli_select_db($conexao, "id13745096_site");
// Executando query e retornando valores da tabela "pedidos"
$query = mysqli_query($conexao, "SELECT * FROM pedidos");
if($conexao)
?>
