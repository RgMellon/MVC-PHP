<?php

    namespace APP\Database;
    
    use APP\Database\ConnectionFactory;
    
    class VendaDatabase
    {   
        private $con;

        public function __construct() {
            $this-> con = ConnectionFactory::getCon();
        }

        public function save($nome, $preco, $desc)
        {
            $sql = "INSERT INTO produto (nome, preco, descricao)".
                        " values ('$nome', $preco, '$desc') ";
                
            $this->con->query($sql);
            
        }

        public function getAll() {
           $sql = "SELECT * FROM produto";
           $result = $this->con->query($sql);
           
           $results = array();

         
           $object = $result->fetchAll(\PDO::FETCH_ASSOC);
           
           return $object;
           
        }
    }