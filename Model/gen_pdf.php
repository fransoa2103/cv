<?php
session_start();

use Dompdf\Dompdf;
use Dompdf\Options;

// require_once './dompdf/autoload.inc.php';
require_once 'Vendor/dompdf/autoload.inc.php';

$dompdf     = new Dompdf(); // appel la Class création nouveau fichier.pdf
$options    = new Options(); // appel la Class des options
$options->set('defaultFont', 'arial');

// Pour afficher les images dans le format pdf il m'a fallu chercher une solution, la voici:
// j'ai supprimé des lignes de codes dans le fichier /dompdf/src/img/cache.php
// les lignes 125 à 150 ont été mis en commentaire, ce qui permet l'affichage des images à l'écran et en PDF

$dompdf     = new Dompdf($options);


ob_start();
require_once 'View\cv_pdf_view.php';
$html = ob_get_contents();
ob_end_clean();

$dompdf->loadHtml($html); // charge du code html
$dompdf->setPaper('A4', 'portrait'); // définit le format de page
$dompdf->render(); // génère le fichier en mémoire

$fichier = 'CV_FCB.pdf';
$dompdf->stream($fichier); // créee le fichier en ligne
// $dompdf->stream(); // créee le fichier en ligne