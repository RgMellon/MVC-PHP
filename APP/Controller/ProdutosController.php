<?php

    namespace APP\Controller;
    
    use APP\Model\Venda;

    class ProdutosController
    {
        public function save($nome, $preco, $descricao)
        {
            $v = new Venda();
            $v->save($nome, $preco, $descricao);
        }
    }