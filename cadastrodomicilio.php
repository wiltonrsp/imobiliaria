<?php
require 'conexao.php';
$endereco = $_POST['endereco'];
$aluguel = $_POST['aluguel'];
$inquilino = $_POST['inquilino'];
  
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $nomenovo = md5(time()).'.'.$extensao;
    $diretorio ="domicilios/"; 
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomenovo); 


$sql = "INSERT INTO domicilios (foto,endereco,aluguel,inquilino) VALUES ('$nomenovo','$endereco','$aluguel','$inquilino')";
if(mysqli_query($conn, $sql)){

}else{
    echo 1;
}

?>