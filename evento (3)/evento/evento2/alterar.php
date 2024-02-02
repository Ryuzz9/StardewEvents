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
 <center>
    <!--TITLE TOP-->
    <p class="sectionTitle" id="backToTop">Registrar</p>
    <p class="sectionDescription">Crie sua conta para registrar em fazendas</p>
    <form action="alterarFazenda.php" method="post"><p>
                <h4>digite o id do evento</h4></p>
                <input type="text" name="id"></p>
                
                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Alterar</span>
            </button>

            </center>
    
</body>

</html>

  