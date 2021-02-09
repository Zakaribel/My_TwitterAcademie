<?php

class Controller
{
    private $model;

    function __construct()
    {
        $this->model = new Model();
    }

    function goToPage($page)
    {
        $functionName = "goToPage_$page";
        $this->$functionName();
    }

    function goToPageinscription()
    {
        if (isset($_POST['submit'])) {
            if (
                $_POST['nickname'] != ""
                and $_POST['birthday'] != ""
                and $_POST['email'] != ""
                and $_POST['password'] != ""
            ) {
                $birthday = $_POST['birthday'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $nickname = $_POST['nickname'];

                if ($this->model->register($birthday, $email, $password, $nickname)) {

                    echo "Vous êtes bien inscrit !";
                } else {

                    echo "Erreur : vous n'avez pas pu vous inscrire";
                }
            }
        }
        require './views/view_inscription.php';
    }

    function goToPage_index()
    {
        if (isset($_GET['logout'])) {

            session_destroy();
            header('location:index.php?page=index');
        }
        require './views/view_index.php';
    }

    function goToPage_login()
    {
        require './views/view_login.php';
    }
}