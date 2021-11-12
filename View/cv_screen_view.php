<?php
    require 'Model\Class\DataBase.php';
    require 'Model\Class\Text_cv.php';
    ?>
<!-- <style></style> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public\css\index_php.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
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
                <div class="adresse" >
                    <a class=""  href="tel: +33670920328" style="text-decoration: none;">0670920328</a></br>
                    <a href="mailto: fcbonnaire01@gmail.com" class="" target="blank" style="text-decoration: none;">fcbonnaire01@gmail.com</a>  
                    <p class=""> 150 rue Jean SIBUET</br>73460 SAINT-VITAL</p>
                </div>
            </td>
            
            <td class="right">
                <?php
                displayMyCV('public\img\F_letter.svg','formations');
                displayMyCV('public\img\F_letter.svg','technos'); 
                displayMyCV('public\img\F_letter.svg','experiences'); 
                displayMyCV('public\img\F_letter.svg','vie-privee');
                 ?>
            </td>
        </tr>
    </tbody>
</table>