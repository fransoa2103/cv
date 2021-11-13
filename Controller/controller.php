<?php

function main(){
    require 'View\accueil.php';
}

function cv_pdf(){
    require 'Model\gen_pdf.php';
}

function cv_bootstrap(){
    require 'Model\Text_cv.php';
    require 'View\cv_bootstrap_view.php';

}