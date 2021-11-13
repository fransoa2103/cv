<?php
require_once 'Controller\controller.php';
try {
    if(isset($_GET['page'])){
        switch ($_GET['page']){
            case 'index.php' : main(); break;
            case 'pdf.php' : cv_pdf(); break;
            case 'bs.php' : cv_bootstrap(); break;
            default : main();
        }
    }
    else {
        throw new Exception("file does not exist");
        // header('location: http://localhost/FCB_CV/?page=index.php') ;
        // exit();
    }
}
catch(Exception $php_errormsg){
    $php_errormsg = $php_errormsg->getmessage();
    echo $php_errormsg;
    die();
}