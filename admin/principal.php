<!-- Conteudo dos Menus -->
  <div class="main">
    <div class="fakeimg4" style="height:auto;text-align: center;font-size: 25px;">Painel Administrativo</div>
        <div class="fakeimg3" style="height:auto;text-align:justify;">
        <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active"><a href="?pg=listar">Listar Páginas</a></li>
                    <li class="active"><a href="?pg=inserir">Inserir Nova Página</a></li>
                </ol>
                <?php
        // Declarando as variáveis de acesso as páginas
        $var = "admin/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            
        } else {
            include("$pg.php");
        }
    ?>
          </div>
        </div>
</div> 



