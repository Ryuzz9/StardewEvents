<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  
  <title>Registrar Fazenda</title>


  <style>
      
 body{
	background: #FFFFFF url("imagens/loginn.png") no-repeat right top fixed;
    position: relative;
  
 }
 h4{
	color:white;
}

.folder {
	background-image: url("imagens/folder.png");
	background-size: cover; /* Ajuste conforme necessário */
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
    <p class="sectionTitle" id="backToTop">Registrar Fazenda</p>
    <p class="sectionDescription">Crie sua conta para registrar em fazendas</p>
    <div>
       
        
    <form action="registrarFazenda.php" method="post"><p>
    <p class="folder"></p>
                <h4>NICKNAME</h4></p>
                <input type="text" name="nick"placeholder="steam,xbox,playstation...etc"></p>
                <h4>tipo de fazenda</h4></p>
                <input type="text" name="tipo"></p>
                <h4>ano da fazenda</h4></p>
                <input type="text" name="ano"></p>
                <h4>quantidade de jogadores</h4></p>
                <input type="text" name="quant"></p>
                <label for="mensagem">Descrição</label><br>
    <textarea id="mensagem" name="descricao" rows="4" cols="50"></textarea></p>

                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Registrar Fazenda</span>
            </button>
</form>
            <?php
        include("conexao.php"); //pagina da conexão do banco


        $nickname=$_POST['nick'];
        
        $nome=$_POST['tipo'];
        
        $ano=$_POST['ano'];
        
        $quant=$_POST['quant'];

        $desc=$_POST['descricao'];
        
        
        
        
        
        //vai receber o comando para inserir dados em uma tabela
        
        $sql="INSERT INTO  fazendas (nickname, tipoFazenda, anoFazenda, quantidade, descricao)  VALUES ('$nickname','$nome','$ano','$quant','$desc')"; //inserindo valores da tabela q tu criou no banco  
        
       
        
        
        if (mysqli_query($conexao, $sql)) {
        
            echo "fazenda cadastrada ";
            $pagina_destino = "detalhesFazenda.php";
        echo "<a href=\"$pagina_destino\">Ir para a página inicial</a>";
           
        
        
        
        } else {
        
            echo "erro" . mysqli_error($conexao);
        
        
        
        
        
        
        }
        mysqli_close($conexao);
        
        ?>
            </center>
            </center>
            </div>
    
</body>

</html>

  