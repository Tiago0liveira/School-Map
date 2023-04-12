<?php
//Configuração para conexão com o banco de dados
$dbHost = 'Localhost';
$dbUsername = "root";
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //if ($conexao->connect_errno)
   //{
   //  echo "erro";
   //}
   //else{
   //    echo "conexao efetuada";
   //}

?>