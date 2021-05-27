<?php
require 'conexao.php';
$id = $_POST['id'];
$foto = $_POST['foto'];
$sql = "DELETE FROM domicilios
WHERE id='$id'";
unlink('domicilios/'.$foto);
if(mysqli_query($conn, $sql)){

}else{
    
}

?>