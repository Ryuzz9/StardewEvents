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
    <p class="sectionTitle" id="backToTop">Excluir Fazenda</p>
<p class="sectionDescription">Exclua pelo id</p>
<form action="excluir.php" method="post">
    <p><h4>ID</h4></p>
    <input type="text" name="id" placeholder="Digite o ID para exclusão">
    <button>
        <span class="transition"></span>
        <span class="gradient"></span>
        <span class="label">EXCLUIR CONTA</span>
    </button>
</form>

<?php
include("conexao.php"); // Conexão com o banco de dados

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Utilize uma instrução preparada para evitar injeção de SQL
    $exclusao = $conexao->prepare("DELETE FROM fazendas WHERE id = ?");
    $exclusao->bind_param("i", $id); // "i" representa um inteiro

    // Execute a instrução preparada
    if ($exclusao->execute()) {
        echo "Fazenda excluída com sucesso.";
    } else {
        echo "Erro: " . $exclusao->error;
    }

    // Feche a instrução preparada
    $exclusao->close();
} else {
    echo "A variável 'id' não está declarada.";
}
?>


            </center>
    
</body>

</html>

  