<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controller.php");
require_once(RACINE_DIR . "/src/controllers/controllerBDD.php");



if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = (string) strip_tags($_GET['p']);
} else {
    $p = null;
}

// Controller
$redirection = new Controller();
$controlBDD = new ControllerBDD();

if (isset($_POST['mail']) && isset($_POST['mdp']) && $controlBDD->verifMail($_POST['mail']) == true && $controlBDD->verifMDP($_POST['mdp']) == true) {
    session_start();
    $p = 'home';
}

switch ($p) {
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
    case 'searchPerm':
        $redirection->searchPerm();
    // Student/Pilote
    case 'home':
        $redirection->home();
        break;
    case 'profilPilote':
        $redirection->profilPilote();
        break;
    case 'suivi':
        $redirection->suivi();
        break;
    // Pilote
    case 'homePilote':
        $redirection->homePilote();
        break;
    // Student
    case 'search':
        $redirection->search();
        break;
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
    default:
        $redirection->connexion();
        break;
}
?>