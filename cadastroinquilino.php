<?php
require 'conexao.php';

 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nome = mysqli_real_escape_string($conn, $_REQUEST['nome']);
$cpf = mysqli_real_escape_string($conn, $_REQUEST['cpf']);
$telefone = mysqli_real_escape_string($conn, $_REQUEST['telefone']);
$rg = mysqli_real_escape_string($conn, $_REQUEST['rg']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO inquilinos (nome, cpf, telefone,rg,email) VALUES ('$nome', '$cpf', '$telefone','$rg','$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/');
$extra = 'mypage.php';
header("Location: http://$host$uri/inquilino.html");
exit;


// Close connection
mysqli_close($conn);
?>
?>