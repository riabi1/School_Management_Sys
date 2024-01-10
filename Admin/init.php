<?php 



    // Include the Database class
    require_once 'Classes/Database.php';

    // Include the Etudiant class
    require_once 'Classes/Etudiant.php';

    // Include the Etudiant class
    require_once 'Classes/Enseignant.php';

    // Include the Matiere class
    require_once 'classes/Matiere.php';

    // Include the CStatus class
    require_once 'classes/CStatus.php';

    $tpl    = 'includes/template/'; 
    $css    = 'layout/css/';
    $js     = 'layout/js/';
    $func   = 'includes/functions/';


    //including the importtant files 
    include $func . 'functions.php';
    include $tpl . 'header.php';

    if(!isset($noNavbar)){ include $tpl . 'navbar.php'; }