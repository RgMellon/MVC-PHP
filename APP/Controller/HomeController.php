<?php

    namespace APP\Controller;

    use APP\View\View;
    

    Class HomeController 
    {

        public function index()
        {   
           
            View::render('Home', ['nome' => 'Renan']);
            
        }    

    }