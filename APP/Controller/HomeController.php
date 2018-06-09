<?php

    namespace APP\Controller;

    use APP\View\View;
    use APP\Database\ConnectionFactory;

    Class HomeController 
    {

        public function index()
        {   
           
            View::render('Home', ['nome' => 'Renan']);
            var_dump(ConnectionFactory::getCon());
        }    

    }