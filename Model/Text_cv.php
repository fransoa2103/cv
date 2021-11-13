<?php

function displayMyCV($section){
    require 'DataBase.php';
    echo "<ul class='list-group mb-2 pb-2 border border-primary'>
            <li class='list-group-item active'>
                <i class='".$db['icons'][0][$section]."'></i>
                <span class='ms-2 text-uppercase'>".$section."</span>
            </li>";
            displayText($db[$section], $section);
    echo "</ul>";
}

function displayText($arrayToControl, $section){
    
    foreach($arrayToControl as $key => $control){
        if (is_array($control)){
            displayText($control, $section);
        }
        else
        {
            foreach($arrayToControl as $cle =>$item){
                if ($cle == 'title' && $arrayToControl[$cle]!== '__BACK__'){
                    echo "<br/>";
                }
                switch ($cle){
                    case 'note'     : echo ""; break;
                    
                    case 'firme'    : echo "<li class='ms-5'><span>".$arrayToControl[$cle].", </span>"; break;
                    case 'lieu'     : echo "<span>".$arrayToControl[$cle]."</span></li>"; break;
                    
                    case 'icon'     : echo "<li class='ms-1 ms-md-5'><i class='me-2 ".$arrayToControl[$cle]."'></i>"; break;
                    case 'libelle'  : echo "<span>".$arrayToControl[$cle]."</span></li>"; break;
                    case 'name'     : echo "<span>".$arrayToControl[$cle]."</span></li>"; break;

                    case 'annee'    : echo "<li class='ms-3'><i class='me-2 fas fa-caret-right'></i>".$arrayToControl[$cle]."</li>"; break;
                    case 'diplome'  : echo "<li class='ms-5'><b>".$arrayToControl[$cle]."</b></li>"; break;
                    case 'poste'    : echo "<li class='ms-5'><b>".$arrayToControl[$cle]."</b></li>"; break;
                    case 'title'    : echo "<li class='ms-3'><b>".$arrayToControl[$cle]."</b></li>"; break;
                    case 'level'    : echo "<li class='ms-1 ms-md-5 progress' style='height: 20px;min-width: 150px; max-width: ".(5*$arrayToControl['note'])."px;'><span>".$arrayToControl[$cle]." ".$arrayToControl['note']."%</span></li>"; break;
                    default: echo "<li class='ms-5'>".$arrayToControl[$cle]."</li>";
                }
            }
            break;
        }
    }
}

