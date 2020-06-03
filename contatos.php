<!DOCTYPE html>
<html>
<head>
  <title>Código 88</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <meta charset="UTF-8" language="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<?php include_once('estilos.php');?>
</style>
</head>
<body>
<?php include_once('topo.php');?>
<div class="row">
<?php include_once('menuesquerdo.php');?>
  <div class="main">
    <div class="fakeimg4" style="height:auto;text-align: center;font-size: 25px;">Contatos
      <div style="height:auto;text-align: center;font-size: 12px;color: #ffffff;">Postado por: Renato em 18 de Maio de 2020<br></div></div>
        <div class="fakeimg3" style="height:auto;text-align:justify;">
		<?php include "config.inc.php";?><?php 
			// Trazendo dados da tabela Página
			$query = mysqli_query($conexao, "SELECT * FROM paginas WHERE id = 7");
			// Litando valores retornados da tabela "paginas"
			while($tabela = mysqli_fetch_array($query)){
			echo $tabela['conteudo'];
			}
		?>
        <br><br>
      </div>
  </div>
<?php include_once('menudireito.php');?>
</div>
</body>
<!-- Rodapé -->
<?php include_once('rodape.php');?>
</html>
