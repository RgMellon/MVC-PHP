<?php
    
    namespace APP\View;

    use APP\Helper\Helper;

    Class View
    {

        public static function render($viewName, array $data)
        {
            if($viewName !== null){
                extract($data);
                require_once Helper::base_path().'View\HomeView.php';    
            }
        }

    }