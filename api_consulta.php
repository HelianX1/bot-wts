<?php
$categoria = $_GET['produto'];
// converter tudo em minusculo
$categoria = strtolower($categoria);
// palavra chave para remover
$palavras =array("motorola ","samsung ","lg ","apple ","asus ","sony ","microsoft ","nokia ","lenovo ","huawei ","xiaomi ","do ","de ","com ","tem a ","tela ","display ","moto ","aro ","preto ","branco ","verde ","normal ","lcd ","touch ","screen ","touchscreen ","original");
// remover palavras chave for
foreach($palavras as $palavra){
    $categoria = str_replace($palavra,"",$categoria);
}
include 'coneccao/coneccao.php';
include 'function.php';
// consultar produtos
$result = consulta($coneccao,$categoria);
if($result){
    echo $result[0]['produto'];
}else{
    echo "";
}
?>
