<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controller.php");
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = (string) strip_tags($_GET['p']);
} else {
    $p = null;
}
// Controller
$redirection = new Controller();
$p = 'profilEtud';
switch($p){
    // All
    default:
        $redirection->connexion();
        break;
    case 'search':
        $redirection->search();
        break;
    // Perm Admin
    case 'profilPilPerm':
        $redirection->profilPilPerm();
        break;
    case 'homePerm':
        $redirection->homePerm();
        break;
    // Perm Admin/Pilote
    case 'profilEtudPerm':
        $redirection->profilEtudPerm();
        break;
    case 'offrePerm':
        $redirection->offrePerm();
        break;
    case 'profilEntrPerm':
        $redirection->profilEntrPerm();
        break;
    case 'promotionPerm':
        $redirection->promotionPerm();
        break;
    // Student/Pilote
    case 'home':
        $redirection->home();
        break;
    case 'profilPilote':
        $redirection->profilPilote();
        break;
    case 'suiviEtud':
        $redirection->suiviEtud();
        break;
    // Student
    case 'profilEtud':
        $redirection->profilEtud();
        break;
    case 'offre':
        $redirection->offre();
        break;
    case 'profilEntr':
        $redirection->profilEntr();
        break;
    case 'promotion':
        $redirection->promotion();
        break;
}
?>