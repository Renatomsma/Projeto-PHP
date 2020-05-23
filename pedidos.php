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
         <div class="fakeimg4" style="height:auto;text-align: center;font-size: 25px;">Pedidos
          <div style="height:auto;text-align: center;font-size: 12px;color: #ffffff;">Postado por: Renato em 18 de Maio de 2020<br></div></div>
            <div class="fakeimg3" style="height:auto;text-align:justify;">
<?php include "conecta.inc.php";?><br><br>
<form  id="contactForm" action="" method="post">
<label>Nome:</label> <input type="text" class="form-control" name="nome" required="" 
data-validation-required-message="Insira seu nome!"><br><br>
E-mail: <input type="email" class="form-control" name="email"/><br><br>
Telefone: <input type="tel" class="form-control" name="telefone"/><br><br>
Assunto: <input type="text" class="form-control" name="assunto"/><br><br>
Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="45"></textarea><br><br>
<button type="submit" class="btn btn-primary">Enviar</button><br><br>
</form>
<?php include_once('contatodb.php');?>           
</div>
</div>
<?php include_once('menudireito.php');?>
</div>
</body>
<!-- Rodapé -->
<?php include_once('rodape.php');?>
</html>
