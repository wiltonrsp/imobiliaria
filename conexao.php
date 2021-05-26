<?php
$usuario='root';
$senha="";
$host="localhost";
$banco="imobiliaria";
$conn = new PDO('mysql:host='.$host.';dbname='.$banco,$usuario,$senha);
if($conn){
    echo "bom";
}else{
    echo "ruim";
}

?>  