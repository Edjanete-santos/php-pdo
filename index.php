<?php
include './conexao.php';


/*$sql = "INSERT INTO produtos (descricao, quantidade,valor)
     VALUES (?,?, ?)";*/


$sql = "INSERT INTO produtos (descricao, quantidade,valor)
     VALUES (:desc, :qtd, :val)";

     $stmt = $conexao->prepare($sql);

     $descricao = 'Mouse Gamer';
     $quantidade = 60;
     $valor = 290.90;
    
    

?>