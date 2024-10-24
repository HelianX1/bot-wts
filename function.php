<?php
include 'coneccao/coneccao.php';
// consultar produtos
function consulta($coneccao,$sproduto){
    $sql = "SELECT prod.produto FROM produto as prod WHERE prod.palavra_chave LIKE '%$sproduto%'";
    $resultado = mysqli_query($coneccao,$sql);
    $registos = [];
    while($linha = mysqli_fetch_assoc($resultado)){
        $registos[] = $linha;
    }

    return $registos;
}
//$resultado = consulta($coneccao,'a01');
//var_dump($resultado);

// cadastrar produtos
function cadastra($coneccao,$produto,$palavra_chave){
    try{
    $sql = "INSERT INTO produto (produto,palavra_chave) VALUES ('$produto','$palavra_chave')";
    $resultado = mysqli_query($coneccao,$sql);
    echo '<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>';
    return $resultado;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}


function consultaCompleta($coneccao,$sproduto){
    try{
    $sql = "SELECT prod.id_produto, prod.produto, prod.palavra_chave FROM produto as prod WHERE prod.palavra_chave LIKE '%$sproduto%'";
    $resultado = mysqli_query($coneccao,$sql);
    $registos = [];
    while($linha = mysqli_fetch_assoc($resultado)){
        $registos[] = $linha;
    }

    return $registos;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function alterar($coneccao,$id,$produto,$palavra_chave){
    try{
    $sql = "UPDATE produto SET produto = '$produto', palavra_chave = '$palavra_chave' WHERE id_produto = $id";
    $resultado = mysqli_query($coneccao,$sql);
    return $resultado;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
// escluir o produto
function excluir($coneccao,$id){
    try{
    // verificar se tem o id
    $sql = "SELECT * FROM produto WHERE id_produto = $id";
    $resultado = mysqli_query($coneccao,$sql);
    if(mysqli_num_rows($resultado) == 0){
        echo '<div class="alert alert-danger">
        <strong>Erro!</strong> Produto não encontrado.
        </div>';
    }else{
    $sql = "DELETE FROM produto WHERE id_produto = $id";
    $resultado = mysqli_query($coneccao,$sql);
    echo '<div class="alert alert-success">
    <strong>Excluido!</strong>.
    </div>';
    }
    }catch(Exception $e){
        echo 'Erro ao excluir produto';
    }
}
// $resultado = excluir($coneccao,1);

// listar todos os produtos
function listar($coneccao){
    try{
    $sql = "SELECT prod.id_produto, prod.produto, prod.palavra_chave FROM produto as prod";
    $resultado = mysqli_query($coneccao,$sql);
    $registos = [];
    while($linha = mysqli_fetch_assoc($resultado)){
        $registos[] = $linha;
    }

    return $registos;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

?>



