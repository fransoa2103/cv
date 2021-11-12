<?php
require_once 'Controller\controller.php';
try {
    if(isset($_GET['page'])){
        switch ($_GET['page']){
            case 'index.php' : page_1(); break;
            case 'cv.php' : page_2(); break;
            case 'pdf.php' : page_3(); break;
            default : page_1();
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