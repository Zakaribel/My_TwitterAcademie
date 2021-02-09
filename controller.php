<?php



class Controller{


    private $model;


    function __construct()    
    {
        $this->model = new Model();
    }

    function goToPage($page){

        $functionName = "goToPage_$page";
        $this->$functionName();

    }

    function goToPageinscription(){



        require './views/view_inscription.php';

    }


    function goToPage_index(){

        require './views/view_index.php';

    }

    function goToPage_login(){


        require './views/view_login.php';

    }


    
}