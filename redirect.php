<?php
    
    require 'vendor/autoload.php';
    
    use APP\Controller\ProdutosController;
    
    $endereco  = $_GET['rota'];
    
    if($endereco == 'salvar') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $p = new ProdutosController();
        $p->save($nome, $preco, $descricao);

    }
    
    
?>