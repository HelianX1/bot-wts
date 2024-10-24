<?php
$categoria = $_GET['produto'];
include 'coneccao/coneccao.php';
include 'function.php';
// consultar produtos
$result = consulta($coneccao,$categoria);
if($result){
    echo $result[0]['produto'];
}else{
    echo "Nenhum produto encontrado";
}
?>
