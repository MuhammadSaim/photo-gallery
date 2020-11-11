<?php

    require_once "config.php";
    require_once "helpers/general_helpers.php";

    require_once "includes/header.php";





    if(isset($_GET['page']) && !empty($_GET['page'])){
        $page = $_GET['page'];
        if($page === 'home'){
            include_once "pages/home.php";
        }elseif ($page === 'signin'){
            include_once "pages/signin.php";
        }else if($page === 'signup'){
            include_once "pages/signup.php";
        }else{
            include_once "pages/home.php";
        }
    }else{
        include_once "pages/home.php";
    }







    require_once "includes/footer.php";

