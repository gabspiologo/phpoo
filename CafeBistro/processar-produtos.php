<?php
require "conexao.php";
require "Modelo\produto.php";
require "Repositorio\ProdutoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $nome = $_POST["tipo"];
    $tipo = $_POST["nome"];
    $descricao =  $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];    

    $produto= new Produto(10
    $_POST= ["tipo"],
    $_POST= ["nome"],
    $_POST= ["descricao"],
    $_POST= ["preco"],
    $_POST= ["imagem"],
);
    $produtoRepositorio = new ProdutoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: cadastrar-produtos-sucesso.php");
}
    
    

?>