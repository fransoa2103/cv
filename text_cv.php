<?php
function text0_cv($svg, $titre,$section){
    require 'Class\dataBase.php';
    foreach($db[$section] as $key => $content){
        if (gettype($key) == 'integer'){
            foreach($content as $item){
                echo $item."</br>";
            }
        }
        else{
            // echo var_dump($key)."</br>";
            foreach($content as $key => $item){
                if (gettype($key) == 'integer'){
                    foreach($item as $key => $content){
                        echo $content."</br>";
                    }    
                }
            }
            // echo "ce n'est pas un entier</br>";
        }
        // echo var_dump($db[$section][$key])."</br>";
        // echo var_dump($content)."</br>";

    }
}

function texty_cv($svg, $titre,$section){
    require 'Class\dataBase.php';
    foreach($db[$section] as $array_1){
        if (is_array($array_1)){
            foreach($array_1 as $array_2){
                if (is_array($array_2)){
                    foreach($array_2 as $cle){
                        echo $cle."</br>";
                    }
                }
                else
                {
                    foreach($array_1 as $cle){
                        echo $cle."</br>";
                    }
                }
            }
        }
    }
}

function text_cv($svg, $titre,$section){
    require 'Class\dataBase.php';
    echo
        "<ul>
            <img src='".$svg."' class='svg'>
            <span class='titre_uppercase'>".$titre."</span>
            <hr>
            <div class='exp'>";
                foreach($db[$section] as $db_tab){
                    echo "<li>";
                        echo "<img src='public\img\arrow_right.svg' class='svg'>";
                        foreach(array_keys($db_tab) as $cle){
                            echo ($cle !='icon') ? $txt = "<span>$db_tab[$cle]</span>" : "" ;
                        }    
                    echo "</li>";
                }
            echo "</div></ul>";
}

function text2_cv($svg, $titre,$section){
    require 'Class\dataBase.php';
    echo "<span>nombre d'itérations dan le tableau: ".count($db['formations']);
    echo "<ul>
        <img src='".$svg."' class='svg'>
        <span class='titre_uppercase'>".$titre."</span>
        <hr>
        <div class='exp'>";
            foreach($db[$section] as $db2){
                foreach($db2 as $db_tab){
                    echo "<li>";
                        echo "<img src='public\img\arrow_right.svg' class='svg'>";
                        foreach(array_keys($db_tab) as $cle){
                            switch ($cle){
                                case 'icon'     : echo ""; break;
                                case 'note'     : echo ""; break;
                                case 'level'    : echo "    <div class='progress' style='width: ".(5*$db_tab['note'])."px;'>
                                                                <span>".$db_tab[$cle]."</span>
                                                            </div>"; break;
                                default: echo "<span>".$db_tab[$cle]."</span>";
                            }
                        }
                    echo "</li>";
                }
            }   
        echo "</div>
    </ul>";
}



function text3_cv($svg, $titre,$section){
    require 'Class\dataBase.php';
    echo
        "<ul>
            <img src='".$svg."' class='svg'>
            <span class='titre_uppercase'>".$titre."</span>
            <hr>
            <div class='exp'>";
            foreach($db[$section] as $key => $techno){
                echo "<i class=''>".$key."</i>";
                echo "<li class=''>";
                    foreach($db['technos'][$key] as $detail){
                        $detail['note'] *= 5;
                        var_dump($detail);
                        die;
                        echo
                        "<span>".$detail['name']."</span>
                        <div>
                            <div class='progress' style='width: ".$detail['note']."px;'>
                                <span>".$detail['level']."</span>
                            </div>
                        </div>";
                    }
                echo "</li>";
            }    
        echo "</div></ul>";
}