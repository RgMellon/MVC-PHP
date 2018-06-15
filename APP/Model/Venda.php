<?php

    namespace APP\Model;
    
    use APP\Database\VendaDatabase;

    class Venda 
    {
        private $nome;
        private $preco;
        private $desc;
        private $vendaDatabase;

        public function __construct() {
            $this->vendaDatabase = new VendaDatabase();
        }

        public function save($nome, $preco, $desc) {
            $this->vendaDatabase->save($nome, $preco, $desc);
        }

        public function getAll() {
            return $this->vendaDatabase->getAll();
        }

    }
