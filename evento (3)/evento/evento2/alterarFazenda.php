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
 <center>
    <!--TITLE TOP-->
    <p class="sectionTitle" id="backToTop">Registrar Fazenda</p>
    <p class="sectionDescription">Crie sua conta para registrar em fazendas</p>
    <div>


       <?php

       include("conexao.php");
    if (isset($_POST['id'])){

$id = $_POST['id'];

    }





$fazendas = "SELECT *FROM fazendas WHERE id = $id";



$con_usuario = mysqli_query($conexao, $fazendas);



if(!$con_usuario){



echo "Error " . mysqli_error($conexao);



}else{



$info_usuario = mysqli_fetch_assoc($con_usuario);



}
?>
    <form action="alterarFazenda.php" method="post"><p>
    <p class="folder"></p>
    <label for="Nome">Nome</label>

<input type="text" value="<?php echo $info_usuario["nickname"]?>"  name= "nick">
<label for="Nome">Nome</label>

<input type="text" value="<?php echo $info_usuario["tipoFazenda"]?>"  name= "tipo">
<label for="Nome">Nome</label>

<input type="text" value="<?php echo $info_usuario["anoFazenda"]?>"  name= "ano">
<label for="Nome">Nome</label>

<input type="text" value="<?php echo $info_usuario["quantidade"]?>"  name= "quant">
                

                <button>
              <span class="transition"></span>
              <span class="gradient"></span>
              <span class="label">Registrar Fazenda</span>
            </button>
</form>
<?php

 

 

include( "conexao.php");

 

 

 

 

if(isset($_POST['nick']) &&isset($_POST['tipo'])&& isset($_POST['ano'])&& isset($_POST['quant'])){

 

    $nickname = $_POST['nick'];

    $tipo = $_POST['tipo'];

    $ano = $_POST['ano'];

    $quant = $_POST['quant'];


    $id = $_POST['id'];

   

   

    $alterar = "UPDATE fazendas SET nickname='{$nickname}', tipoFazenda='{$tipo}'anoFazenda='{$ano}', quantidade='{$quant}'descricao='{$descricao}' WHERE id = $id";

 

    $operacao_alterar = mysqli_query($conexao, $alterar);

 

 

    if(!$operacao_alterar){

 

        echo "error" . mysqli_query ($conexao);

    }else{

        echo "Alteração realizada com sucesso ";

    }

}

 

 

?>
            </center>
            
            </div>
    
</body>

</html>

  