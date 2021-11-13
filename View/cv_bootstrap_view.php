<?php ob_start();?>
<style>
    <?php
        require 'public\css\bootstrap\style.css';
        require 'Model\DataBase.php';
    ?>
</style>

<main class="container d-lg-flex">
    
    <!-- LEFT SECTION -->
    <section id="section_left" class="left bg-primary text-light">
        
        <!-- F-LETTER -->
        <div class="f_letter">
            <div class="ligne mt-3 pt-2 bg-light mx-3"></div>
            <div class="ms-3 mt-2 text-center" >
                <img src="public\img\cv_bootstrap\F_letter.svg" class="f_letter">
            </div>
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
        <div class="profil mx-4">
            <span class="display-6 fw-light small">PROFIL</span></br>
            <p class="">
                Atypique! Celui d'un 'jeune' DEV au demi-siècle passé mais d'une motivation hors-pair!
                La soif d'apprendre et de collaborer au sein d'une équipe professionnelle. Formez-moi encore un peu plus et je vous le rendrai au centuple.
                Mon tempérament et mes expériences hors "Dev", vous garantissent de m'intégrer et évoluer avec vous rapidement.
            </p>
        </div>
        
        <!-- ADRESS -->
        <address class="mx-4">
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
                <p class="ms-2">150 rue Jean SIBUET</br>73460 SAINT-VITAL</p>
            </div>
        </address>
        
        <!-- LIENS -->
        <!-- <hr class="border border-primary"> -->
        <div class="liens mx-4">
            <?php
                foreach($db['liens'] as $lien){
                    echo
                    "<a class='pe-3 text-light' target='blank' href='".$lien['link']."'>
                    <span class='".$lien['icon']."'></span>
                    </a>";
                }
            ?>
        </div>
    </section>

    <!-- RIGHT SECTION -->
    <hr class="d-lg-none border border-primary">
    <section class="right ">
        <?php
            displayMyCV('formations');
            displayMyCV('technos');
            displayMyCV('experiences');
            displayMyCV('vie-privee');
        ?>
    </section>
</main>

<?php
$content = ob_get_clean();
include 'template.php';