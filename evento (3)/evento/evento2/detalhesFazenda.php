<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.cdnfonts.com/css/pixel-art" rel="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>StardewEvents</title>

  <link href="https://fonts.cdnfonts.com/css/pixel-art" rel="stylesheet">
sty
</head>

<body>


<!-- CONTEINER 1 -->
  <div class="container">
    <header class="header">
      <h1>StardewEvents</h1> <!--tittle conteiner esquerdo -->
      <div class="BUTTON NAV">

      <!-- NAVIGATION (header)-->
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

      </div>
    </header>

    <!--TITLE TOP-->
    <p class="sectionTitle" id="backToTop">SERVIDORES</p>
    <p class="sectionDescription">informações na tabela abaixo</p>
    <section class="gridContainer">
      <div class="mainContent">
        <form action="detalhesFazenda.php" method="post">
      <h4>NOME</h4></p>
                <input type="text" name="nome"></p>
                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Encontrar</span>
            </button>
            </form>
      <!-- categoria 1-->
      <?php
include("conexao.php");

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $result_server = "SELECT * FROM fazendas WHERE nickname LIKE '%$nome%'";
    $resultado_server = mysqli_query($conexao, $result_server);

    if (mysqli_num_rows($resultado_server) > 0) {
        echo '<table class="styled-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>nickname</th>';
        echo '<th>tipo</th>';
        echo '<th>ano</th>';
        echo '<th>quantidade</th>';
        echo '<th>descrição</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row_server = mysqli_fetch_assoc($resultado_server)) {
            echo '<tr>';
            echo '<td>' . $row_server['nickname'] . '</td>';
            echo '<td>' . $row_server['tipoFazenda'] . '</td>';
            echo '<td>' . $row_server['anoFazenda'] . '</td>';
            echo '<td>' . $row_server['quantidade'] . '</td>';
            echo '<td>' . $row_server['descricao'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo "Nenhum filme encontrado com esse nome.";
    }
} else {
    echo "A variável 'nome' não está definida.";
}
?>

    </footer>
  </div>
  
</body>

</html>
