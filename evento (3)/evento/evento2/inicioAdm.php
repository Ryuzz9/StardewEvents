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
            <span class="label">Detalhes de fazendas</span><!--NAV DETALHES DE FAZENDAS -->
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
    <p class="sectionTitle" id="backToTop">BEM VINDO AO StardewEvents!!</p>
    <p class="sectionDescription">Aqui é onde você encontra filmes de todas as faixas e generos.</p>
    <section class="gridContainer">
      <div class="mainContent">
        
      <!-- categoria 1-->
        <div class="categoryCard">

        
          <p class="Genero"><!--classe -->
          <form action="registrarConta.php" method="post">

            <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Registrar conta</span>
            </button>
          </form>
          <img src="imagens/pp_840x830-pad_1000x1000_f8f8f8-removebg-preview.png" width="100" height="100" /><!--imagem -->
          <p class="Descrição">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
            reprehenderit hic blanditiis quam voluptates dolorum, adipisci dignissimos id ea temporibus.</p>
        </div>

        
       
        <!-- categoria 3 -->
        <div class="categoryCard">

          <form action="detalhesFazenda.php" method="post">
            <p class="Genero"></p><!--classe -->
            <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Detalhes de eventos</span>
            </button>
          </form>
          <img src="imagens/peixeFeio.png" width="100" height="120" /><!--imagem -->
          <p class="Descrição">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
            reprehenderit hic blanditiis quam voluptates dolorum, adipisci dignissimos id ea temporibus.</p>
        </div>

        <!--categoria 4 -->
        <div class="categoryCard">

          <form action="registrarFazenda.php" method="post">
            <p class="Genero"></p><!--classe -->
            <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Criar Fazenda</span>
            </button>
          </form>
          <img src="imagens/fazenda.png" width="200" height="170" /><!--imagem -->
          <p class="Descrição">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
            reprehenderit hic blanditiis quam voluptates dolorum, adipisci dignissimos id ea temporibus.</p>
        </div>
        <div class="categoryCard">

          <form action="excluir.php" method="post">
            <p class="Genero"></p><!--classe -->
            <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Excluir Fazenda</span>
            </button>
          </form>
          <img src="imagens/fazenda.png" width="200" height="170" /><!--imagem -->
          <p class="Descrição">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
            reprehenderit hic blanditiis quam voluptates dolorum, adipisci dignissimos id ea temporibus.</p>
        </div>
        <div class="categoryCard">

          <form action="alterar.php" method="post">
            <p class="Genero"></p><!--classe -->
            <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Alterar Fazenda</span>
            </button>
          </form>
          <img src="imagens/fazenda.png" width="200" height="170" /><!--imagem -->
          <p class="Descrição">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
            reprehenderit hic blanditiis quam voluptates dolorum, adipisci dignissimos id ea temporibus.</p>
        </div>
    </section>  <!--fim de sessão de categorias -->
    <footer class="footer">

      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a> <!-- click ontop -->

    </footer>
  </div>
</body>

</html>