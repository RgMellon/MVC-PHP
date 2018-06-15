<?php

    namespace APP\Controller;

    use APP\View\View;
    use APP\Model\Venda;

    Class HomeController 
    {

        public function index()
        {   
           $v = new Venda();
           View::render('Home', [
                'produtos' => $v->getAll(),
           ]);
        }    

    }