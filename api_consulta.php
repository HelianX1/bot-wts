<?php
$categoria = $_GET['produto'];
// converter tudo em minusculo
include 'coneccao/coneccao.php';
include 'function.php';
// consultar produtos
$result = consulta($coneccao,$categoria);
if($result){
    echo $result[0]['produto'];
}else{
    echo "440";
}
?>
