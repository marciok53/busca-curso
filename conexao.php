<?php 

$host="127.0.0.1"; //host tem q vir primeiro , caso contrario conexão falha
$user="root";
$pass="";
$db="busca_curso";

//Cria conexao
$conn=mysqli_connect($host, $user, $pass, $db);

// Checa conexao
// if (!$conn) {
//     die("Falha na conexão ao servidor " . mysqli_connect_error());
// }
// echo "Conexão bem sucedida";


 ?>
