<?php
$host = "localhost";
$user = "root";
$pass = "";
$coneccao = mysqli_connect($host, $user, $pass);

// criar banco de dados
$sql = "CREATE DATABASE api";
if (mysqli_query($coneccao, $sql)) {
    echo "Banco de dados criado com sucesso";
} else {
    echo "Erro ao criar banco de dados: " . mysqli_error($coneccao);
}

// selecionar o banco de dados
mysqli_select_db($coneccao, "api");

// criar tabela
$sql = "
CREATE TABLE produto (
  id_produto double NOT NULL AUTO_INCREMENT,
  produto text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  palavra_chave text DEFAULT NULL,
  PRIMARY KEY (id_produto)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
";
if (mysqli_query($coneccao, $sql)) {
    echo "Tabela criada com sucesso";
} else {
    echo "Erro ao criar tabela: produto " . mysqli_error($coneccao);
}

?>
