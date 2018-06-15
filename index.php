<?php
    
    require_once 'vendor/autoload.php';
    
    use APP\Controller\HomeController;
    use APP\Controller\ProdutosController;
    
    $h = new HomeController();
    $h->index();

?>