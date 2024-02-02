<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  
  <title>Registrar</title>


  <style>   
      
 body{
	background: #FFFFFF url("imagens/loginn.png") no-repeat right top fixed;
  
 }
 h4{
	color:white;
}
  </style>
</head>

<body>


<!-- CONTEINER 1 -->
  <div class="container">
    <header class="header">
      <h1>StardewEvents</h1> <!--tittle conteiner esquerdo -->
      <div class="BUTTON NAV">

      <!-- NAVIGATION (header)-->
        <form action="login.html" method="post"> <!-- NAV REGISTRAR CONTA -->
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Registrar Conta</span>
          </button>
        </form>

        <form action="cadastrar.html" method="post">
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Escolher Fazenda</span><!-- NAV ESCOLHER FAZENDA -->
          </button>
        </form>

        <form action="encontrarFilme.php" method="post">
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Detalhes de fazendas</span><!--NAV DETALHES DE FAZENDAS -->
          </button>
        </form>


      </div>
    </header>
 <center>
    <!--TITLE TOP-->
    <p class="sectionTitle" id="backToTop">LOGIN</p>
    <p class="sectionDescription">Faça seu login para adicionar amigos</p>
    <form action="loginADM.php" method="post"><p>

                <h4>NOME</h4></p>
                <input type="text" name="nome"></p>
                <h4>SENHA</h4></p>
                <input type="text" name="senha"></p>

                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">LOGAR</span>
            </button>
</form>
            <?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["nome"];
    $password = $_POST["senha"];

    $user = "admin";
    $senha = "admin";

    // Verificação de credenciais (exemplo simples)
    if ($username === "$user" && $password === "$senha") {
        echo "Login bem-sucedido! Bem-vindo, $username!";
        $pagina_destino = "inicioAdm.php";
        echo "<a href=\"$pagina_destino\">Ir para a página inicial</a>";
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>




            </center>
    
</body>

</html>

  