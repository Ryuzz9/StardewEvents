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
    </header>
 <center>
    <!--TITLE TOP-->
    <p class="sectionTitle" id="backToTop">Registrar</p>
    <p class="sectionDescription">Crie sua conta para registrar em fazendas</p>
    <form action="registrarConta.php" method="post"><p>
                <h4>NICKNAME</h4></p>
                <input type="text" name="nick"placeholder="steam,xbox,playstation...etc"></p>
                <h4>NOME</h4></p>
                <input type="text" name="nome"></p>
                <h4>EMAIL</h4></p>
                <input type="text" name="email"></p>
                <h4>SENHA</h4></p>
                <input type="text" name="senha"></p>

                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Registrar conta</span>
            </button></p>
</form>
        <?php
        include("conexao.php"); //pagina da conexão do banco


        $nickname=$_POST['nick'];
        
        $nome=$_POST['nome'];
        
        $email=$_POST['email'];
        
        $senha=$_POST['senha'];
        
        
        
        
        
        //vai receber o comando para inserir dados em uma tabela
        
        $sql="INSERT INTO  login (nickname, nome, email, senha)  VALUES ('$nickname','$nome','$email','$senha')"; //inserindo valores da tabela q tu criou no banco  
        
       
        
        
        if (mysqli_query($conexao, $sql)) {
        
            echo "conta cadastrada ";
            $pagina_destino = "index.html";
        echo "<a href=\"$pagina_destino\">Ir para a página inicial</a>";
           
        
        
        
        } else {
        
            echo "erro" . mysqli_error($conexao);
        
        
        
        
        
        
        }
        mysqli_close($conexao);
        
        ?>
            </center>
          
    
</body>

</html>


  