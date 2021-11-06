<?php
    require 'Class\dataBase.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="public\css\index.css">
        <title>CV ~ François Couvé-Bonnaire</title>
        <link rel="icon" href="public\img\thumb.svg"/>
    </head>
    <body class="">
        <main class="bg-light text-light">
            <!-- LEFT SECTION -->
            <section class="bg-primary d-flex flex-column justify-content-between">
                <!-- F-LETTER -->
                <div class="">
                    <div class="ligne mt-3 pt-2 bg-light mx-3"></div>
                    <div class="ms-3 mt-2 text-center" ><img src="public\img\F_letter.svg" class="f_letter"></div>
                    <div class="ligne bg-light mx-3"></div>
                </div>
                <!-- NAME -->
                <div class="name display-6 mx-4 d-flex flex-wrap align-items-center">
                    <div>
                        <h1 class="fw-bold" style="margin: 0px auto;">François</br><span class="fw-bold text-uppercase">Couvé-Bonnaire</span></h1>
                        <p class="fw-light small p-1">Développeur BACK</p>
                    </div>
                </div>
                <!-- PROFIL -->
                <div class="mx-4">
                    <span class="display-6 fw-light small">PROFIL</span></br>
                    <p class="fs-5">
                        Atypique! Celui d'un 'jeune' DEV au demi-siècle passé mais d'une motivation à toutes épreuves!
                        La soif d'apprendre et de collaborer au sein d'une équipe de professionnels. Formez-moi un peu plus et je vous le rendrai au centuple.
                        Mes expériences profesionnelles hors "Dev" vous garantissent de m'acclimater, comprendre et évoluer rapidement.
                    </p>
                </div>

                <!-- CLIP-ART -->
                <a href="https://icons8.com/illustrations/author/5c07e68d82bcbc0092519bb6" target="blank" class="my-5">
                    <div class="bg-light mx-1 rounded" ><img src="public\img\clip-art.png" class="clipart"></div>
                </a>
                
                <!-- ADRESS -->
                <address title="adresse" class="mx-4 fs-5" >
                    <div class="py-1">
                        <span class="fas fa-phone-alt"></span>
                        <a class="text-light"  href="tel: +33670920328" style="text-decoration: none;">0670920328</a></br>
                    </div>
                    <div class="py-1">
                        <span class="far fa-paper-plane"></span>
                        <a href="mailto: fcbonnaire01@gmail.com" class="text-light" target="blank" style="text-decoration: none;">fcbonnaire01@gmail.com</a></br>  
                    </div>
                    <div class="py-1 d-flex">
                        <span class="align-self-start mt-2 fas fa-map-marker-alt"></span>
                        <p class="ms-2"> 150 rue Jean SIBUET</br>73460 SAINT-VITAL</p>
                    </div>
                </address>
            </section>
            <!-- RIGHT SECTION -->
            <section class="">
                <!-- STUDY -->
                <div class="">
                    <ul class="list-group fs-6">
                        <li class="list-group-item active">
                            <i class="ms-2 fas fa-user-graduate"></i>
                            <span class="ms-2">FORMATIONS</span>
                        </li>
                        <?php
                        foreach($db['formations'] as $formation){
                            echo
                            "<li class=' list-group-item border-light '>
                                <i class='fas fa-caret-right'></i>
                                <span class='text-dark'>".$formation['annee']."</span></br>
                                <span class='text-dark fw-bolder ms-2'>".$formation['diplome']."</span>
                                </br><span class='text-dark ms-2'>".$formation['firme']."</span>
                                </br><span class='text-dark ms-2'>".$formation['lieu']."</span>
                            </li>";
                        }?>
                    </ul>
                </div>
                <!-- TECHNOS -->
                <div class="">
                    <ul class="list-group fs-6 mb-2 text-dark" >
                        <li class="list-group-item active ">
                            <i class="ms-2 fs-3 fab fa-dev"></i>
                            <span class="ms-2">TECHNOS</span>
                        </li>
                            <?php
                            foreach($db['technos'] as $key => $techno){
                                echo "<i class='ps-2 text-capitalize'>".$key."</i>";
                                echo "<li class='list-group-item'>";
                                    foreach($db['technos'][$key] as $detail){
                                        echo
                                        "<div class='my-1 d-flex flex-wrap align-items-center'>
                                            <i class='".$detail['icon']."'></i>
                                            <span class='ms-2 text-dark fw-bolder'>".$detail['name']."</span>
                                            <span class='ms-2 fs-6 text-dark'>".$detail['level']."</span>
                                            <span class='progress progress-bar bg-secondary' role='progressbar' style='width: ".$detail['note']."%;'></span>
                                        </div>";
                                    }
                                echo "</li>";
                            }    
                            ?>
                    </ul>
                </div>
                <!-- EXPERIENCES -->
                <div class="">
                    <ul class="list-group fs-6">
                        <li class="list-group-item active fw-bold">
                            <i class="ms-2 fas fa-user-tie"></i>
                            <span class="ms-2">EXPERIENCES</span>
                        </li>
                        <?php
                        foreach($db['experiences'] as $experience){
                            echo
                            "<li class=' list-group-item border-light'>
                                <i class='fas fa-caret-right'></i>
                                <span class='text-dark'>".$experience['annee']."</span>
                                </br><span class='text-dark fw-bolder ms-2 text-uppercase'>".$experience['poste']."</span>
                                </br><span class='text-dark ms-2'>".$experience['firme']."</span>
                                </br><span class='text-dark ms-2'>".$experience['lieu']."</span>
                            </li>";
                        }?>
                    </ul>
                </div>
                <!-- VIE PRIVEE -->
                <div class="">
                    <ul class="list-group fs-6">
                    <li class="list-group-item active fw-bold">
                            <i class="ms-2 fas fa-home"></i>
                            <span class="ms-2 text-uppercase">vie privée</span>
                        </li>
                        <?php
                        foreach($db['vie-privee'] as $vie){
                            echo
                            "<li class=' list-group-item border-light'>
                                <i class='".$vie['icon']."'></i>
                                <span class='ms-2 text-dark'>".$vie['libelle']."</span>
                            </li>";
                        }?>
                    </ul>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>