<?php



$host = "localhost"; //Endereço do servidor

$usuario = "root"; //Nome do usario do banco de dados

$senha = "Senac@2023"; // A senha do meu banco de dados

$dbname = "eventstardew"; // Nome do banco de dados



//Utilize a conexao com banco de dados  

$conexao = mysqli_connect($host, $usuario, $senha, $dbname); // script para fazer a comunicação com o banco de dados





if ($conexao->connect_error) {

    echo "Error" . mysqli_error($conexao); // se houver erro na minha conexão com o banco de dados

} else {

    echo "Conexão efetuada" . "<br>";

}





//mysqli_close ($conexao);// fecha uma conexão com o banco de dados





?>