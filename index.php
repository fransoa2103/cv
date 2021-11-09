<?php
    require 'Class\dataBase.php';
    require 'text_cv.php';
?>
<style><?php require 'public\css\index_php.css'; ?></style>

<table>
    <tbody>
        <tr>
            <!-- LEFT td -->
            <td class="left">
                <!-- F-LETTER -->
                <div class="letter">
                    <div class="ligne"></div>
                    <div class="" ><img src="public\img\clip-art.png" class="clipart"></div>
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
            </td>
            
            <td class="right">
                <!-- TECHNOS -->
                
                <?php
                    text0_cv('public\img\F_letter.svg','technos', 'technos'); 
                    text0_cv('public\img\F_letter.svg','expériences', 'experiences'); 
                    text0_cv('public\img\F_letter.svg','formations', 'formations');
                    text0_cv('public\img\F_letter.svg','vie-privee', 'vie-privee');
                 ?>
            </td>
        </tr>
    </tbody>
</table>
        