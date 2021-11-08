<?php
    require 'Class\dataBase.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <title>CV ~ François Couvé-Bonnaire</title>
        <!-- <link rel="stylesheet" href="public\css\index.css"> -->
        <link rel="icon" href="public\img\thumb.svg"/>
    </head>
    <body>
    <style><?php include 'public\css\index.css' ?></style>
            <!-- LEFT SECTION -->
            <section class="left">
                <!-- F-LETTER -->
                <div class="letter">
                    <div class="ligne"></div>
                    <div class="" ><img src="public\img\F_letter.svg" class="f_letter"></div>
                    <div class="ligne"></div>
                </div>
                <!-- NAME -->
                <div class="name ">
                    <h1>François</br>Couvé-Bonnaire</h1>
                    <p>Développeur BACK</p>
                </div>
                <!-- PROFIL -->
                <div class="profil">
                    <span >PROFIL</span>
                    <p>
                        Atypique! Celui d'un 'jeune' DEV au demi-siècle passé mais d'une motivation à toutes épreuves!
                        La soif d'apprendre et de collaborer au sein d'une équipe de professionnels.</br>Formez-moi un peu plus et je vous le rendrai au centuple.
                        Mes expériences profesionnelles hors "Dev" vous garantissent de m'acclimater, comprendre et évoluer rapidement.
                    </p>
                </div>
                <!-- ADRESS -->
                <address class="adresse" >
                    <span class="fas fa-phone-alt"></span>
                    <a class=""  href="tel: +33670920328" style="text-decoration: none;">0670920328</a></br>
                    <span class="far fa-paper-plane"></span>
                    <a href="mailto: fcbonnaire01@gmail.com" class="" target="blank" style="text-decoration: none;">fcbonnaire01@gmail.com</a></br>  
                    <div class="adresse_2">
                        <span class="fas fa-map-marker-alt"></span>
                        <p class=""> 150 rue Jean SIBUET</br>73460 SAINT-VITAL</p>
                    </div>
                </address>
            </section>
            <!-- RIGHT SECTION -->
            <hr class="">
            <section class="right">
                <!-- TECHNOS -->
                    <ul>
                        <i class="fab fa-dev"></i>
                        <span class="titre_uppercase">technos</span>
                        <hr>
                        <div class   =   "techno">
                            <?php
                            foreach($db['technos'] as $key => $techno){
                                echo "<i class=''>".$key."</i>";
                                echo "<li class=''>";
                                    foreach($db['technos'][$key] as $detail){
                                        echo
                                        "<i class='".$detail['icon']."'></i>
                                        <span class=''>".$detail['name']."</span>
                                        <div class='aligns-center'>
                                            <span class='progress' role='progressbar' style='width: ".$detail['note']."%;'>
                                                <span class=''>".$detail['level']."</span>
                                            </span>
                                        </div>";
                                    }
                                echo "</li>";
                            }    
                            ?>
                        </div>
                    </ul>
                <!-- STUDY -->
                    <ul>
                        <i class="fas fa-user-graduate"></i>
                        <span class="titre_uppercase">formations</span>
                        <hr>
                        <div class='study'>
                            <?php
                            foreach($db['formations'] as $formation){
                                echo
                                "<li>
                                    <i class='fas fa-caret-right'></i>
                                    <span class=''>".$formation['annee']."</span></br>
                                    <span class='  '>".$formation['diplome']."</span>
                                    </br><span class=' '>".$formation['firme']."</span>
                                    </br><span class=' '>".$formation['lieu']."</span>
                                </li>";
                            }?>
                        </div>
                    </ul>
                <!-- EXPERIENCES -->
                    <ul>
                        <i class=" fas fa-user-tie"></i>
                        <span class="titre_uppercase">expériences</span>
                        <hr>
                        <div class="exp">
                            <?php
                            foreach($db['experiences'] as $experience){
                                echo "<li><span class='fas fa-caret-right'></span>";
                                foreach(array_keys($experience) as $cle){
                                    echo "<p class=''>".$experience[$cle]."</p>";
                                }    
                                echo "</li>";
                            }?>
                        </div>
                    </ul>
                <!-- VIE PRIVEE -->
                    <ul>
                        <i class="fas fa-home"></i>
                        <span class="titre_uppercase">vie privée</span>
                        <hr>
                        <?php
                        foreach($db['vie-privee'] as $vie){
                            echo
                            "<li class='  '>
                                <i class='".$vie['icon']."'></i>
                                <span class=' '>".$vie['libelle']."</span>
                            </li>";
                        }
                        ?>
                    </ul>
            </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>