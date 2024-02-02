<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Registrar</title>
  <style>   
    body {
      background: #FFFFFF url("imagens/loginn.png") no-repeat right top fixed;
    }
    h4 {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <header class="header">
      <h1>StardewEvents</h1>
      <div class="BUTTON NAV">
      <form action="registrarConta.php" method="post"> <!-- NAV REGISTRAR CONTA -->
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Registrar Conta</span>
          </button>
        </form>

        <form action="detalhesFazenda.php" method="post">
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Escolher Fazenda</span><!-- NAV ESCOLHER FAZENDA -->
          </button>
        </form>



        <form action="registrarFazenda.php" method="post">
          <button>
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Criar Fazenda</span> <!-- CRIAR FAZENDA -->
          </button>
        </form>
    </header>
    <center>
      <p class="sectionTitle" id="backToTop">LOGIN</p>
      <p class="sectionDescription">Faça seu login para adicionar amigos</p>
      <form action="login.php" method="post">
        <p><h4>NOME</h4></p>
        <input type="text" name="nome">
        <p><h4>SENHA</h4></p>
        <input type="password" name="senha">
        <button>
          <span class="transition"></span>
          <span class="gradient"></span>
          <span class="label">LOGAR</span>
        </button>
      </form>

      <?php
      include("conexao.php"); // Página da conexão do banco

      if (isset($_POST['nome']) && isset($_POST['senha'])) {
          $nome = $_POST['nome'];
          $senha = $_POST['senha'];

          // declaração preparada para evitar injeção de SQL
          $sql = "SELECT * FROM login WHERE nome = ? AND senha = ?";
          $stmt = $conexao->prepare($sql);
          $stmt->bind_param("ss", $nome, $senha);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result->num_rows > 0) {
              echo "LOGIN SUCEDIDO";
              $pagina_destino = "index.html";
              echo "<a href=\"$pagina_destino\">Ir para a página inicial</a>";
          } else {
              echo "NOME OU SENHA INCORRETA";
          }

          $stmt->close();
      } else {
          echo "Preencha todos os campos necessários.";
      }

      mysqli_close($conexao);
      ?>

    </center>
  </div>
</body>

</html>
