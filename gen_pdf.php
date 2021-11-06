<?php
session_start();

use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf\autoload.inc.php';

$dompdf     = new Dompdf(); // appel la Class crÃ©ation nouveau fichier.pdf
$options    = new Options(); // appel la Class des options
$options->set('defaultFont', 'courier');

// Pour afficher les images dans le format pdf il m'a fallu chercher une solution, la voici:
// j'ai supprimÃ© des lignes de codes dans le fichier /dompdf/src/img/cache.php
// les lignes 125 Ã  150 ont Ã©tÃ© mis en commentaire, ce qui permet l'affichage des images Ã  l'Ã©cran et en PDF

$dompdf     = new Dompdf($options);

ob_start();
require_once 'index.php';
$html = ob_get_contents();
ob_end_clean();

$dompdf->loadHtml($html); // charge du code html
$dompdf->setPaper('A4', 'portrait'); // dÃ©finit le format de page
$dompdf->render(); // gÃ©nÃ¨re le fichier en mÃ©moire

$fichier = 'CV_Francois_Couve_Bonnaire.pdf';
$dompdf->stream($fichier); // crÃ©ee le fichier en ligne
// $dompdf->stream(); // crÃ©ee le fichier en ligne