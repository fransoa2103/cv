<?php
function displayMyCV($svg, $section){
    require 'Class\dataBase.php';
    echo "<h2>".strtoupper($section)."</h2>";
    displayText($db[$section], $section);
    echo $section != 'vie-privee' ? "<hr>" : "";
}

function displayText($arrayToControl, $section){
    foreach($arrayToControl as $key => $control){
        if (is_array($control)){
            displayText($control, $section);
        }
        else
        {
            echo $section != 'technos' ? "<ul>" : "<div>";
            foreach($arrayToControl as $cle =>$item){
                switch ($cle){
                    case 'icon'     : echo ""; break;
                    case 'note'     : echo ""; break;
                    case 'level'    : echo "    <li class='progress' style='width: ".(5*$arrayToControl['note'])."px;'>
                                                    <span>".$arrayToControl[$cle]."</span>
                                                </li>"; break;
                    case 'diplome'  : echo "<li><b>".$arrayToControl[$cle]."</b></li>"; break;
                    case 'poste'    : echo "<li><b>".$arrayToControl[$cle]."</b></li>"; break;
                    case 'title'    : echo "<li class='text_title'>".$arrayToControl[$cle]."</li>"; break;
                    default: echo "<li>".$arrayToControl[$cle]."</li>";
                }
            }
            echo $section != 'technos' ? "</ul>" : "</div>";
            break;
        }
    }
}

