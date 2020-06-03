<!-- Conteudo dos Menus -->
  <div class="main">
    <?php include "conecta.inc.php";?><?php 
			// Trazendo dados da tabela Página
			$query = mysqli_query($conexao, "SELECT * FROM paginas WHERE id = 8");
			// Litando valores retornados da tabela "paginas"
			while($tabela = mysqli_fetch_array($query)){
			echo $tabela['conteudo'];
			}
		?>
</div> 



