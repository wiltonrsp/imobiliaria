<?php
require 'conexao.php';
$id = $_POST['id'];
$endereco = $_POST['endereco'];
$aluguel = $_POST['aluguel'];
$inquilino = $_POST['inquilino'];
$foto2 = $_POST['foto2'];

if($_FILES['foto']['name']!=''){
    unlink('domicilios/'.$foto2);
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $nomenovo = md5(time()).'.'.$extensao;
    $diretorio ="domicilios/"; 
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomenovo); 
    $sql = "UPDATE domicilios SET foto='$nomenovo',endereco='$endereco',aluguel='$aluguel',inquilino='$inquilino'  WHERE id='$id'";
}else{
    $sql = "UPDATE domicilios SET endereco='$endereco',aluguel='$aluguel',inquilino='$inquilino'  WHERE id='$id'";
}


if(mysqli_query($conn, $sql)){

}else{
    echo 1;
}

?>