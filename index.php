<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controllerPage.php");
require_once(RACINE_DIR . "/src/controllers/controllerBDD.php");
require_once(RACINE_DIR . "/src/controllers/controllerAction.php");

if (session_status() != 2) {
    session_start();
}

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $_SESSION['p'] = (string) strip_tags($_GET['p']);
} elseif (isset($_SESSION['p']) && !empty($_SESSION['p'])) {
} else {
    $_SESSION['p'] = null;
}

// Controller
$redirection = new Controller();
$controlBDD = new ControllerBDD();
$change = new ControllerAction();
$isAdmin = false;

if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    $connected = $controlBDD->verifConnexion($_POST['mail'], $_POST['mdp']);
    if ($connected != null) {
        $_SESSION['id_user'] = $connected;
        $isAdmin = $controlBDD->isAdmin($connected);
        if ($isAdmin == true) {
            $_SESSION['isAdmin'] = $isAdmin;
            $_SESSION['p'] = 'homePerm';
        } else {
            $_SESSION['isAdmin'] = false;
        }
        $isPilote = $controlBDD->isPilote($connected);
        if ($isPilote != null) {
            $_SESSION['typeUser'] = 'pilote';
            $_SESSION['idTypeUser'] = (int) $controlBDD->getIdPilote($_SESSION['id_user'])[0][0];
            $_SESSION['p'] = 'homePilote';

        } else {
            $_SESSION['typeUser'] = 'etudiant';
            $_SESSION['idTypeUser'] = (int) $controlBDD->getIDEtud($_SESSION['id_user'])[0][0];
            $_SESSION['p'] = 'home';
        }

    }
}

if (isset($_GET['offreLast'])) {
    $_SESSION['offreLast'] = $_GET['offreLast'];
    $_SESSION['p'] = 'offreLast';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'modif') {
        $_SESSION['p'] = 'offre';
    } else {
        $_SESSION['p'] = 'home';
    }
}

if (isset($_POST['statut']) && $_POST['statut'] != null) {
    if ($redirection->haveCurrentStatut($_SESSION['offre'], $_SESSION['idTypeUser']) == true){
        $change->changeStatutOffre($_SESSION['idTypeUser'], $_SESSION['offre'], $_POST['statut']);
    } else {
        $change->addStatutOffre($_SESSION['idTypeUser'], $_SESSION['offre'], $_POST['statut']);
    }
}

/* var_dump($_SESSION['p']);
var_dump($_SESSION['isAdmin']);
var_dump($_SESSION['typeUser']);
*/
$deco = false;

if (isset($_GET['deconnexion']) && $_GET['deconnexion'] == true){
    session_destroy();
    $deco = true;
}

if (isset($_SESSION['id_user']) && $deco == false) {
    if ($_SESSION['isAdmin'] == true && $_SESSION['typeUser'] == 'pilote') {
        switch ($_SESSION['p']) {
            case 'profilEtud':
                $redirection->profilEtudPerm();
                break;
            case 'offre':
                $redirection->offrePerm($_SESSION['offrePerm']);
                break;
            case 'profilEntr':
                $redirection->profilEntrPerm();
                break;
            case 'promotion':
                $redirection->promotionPerm();
                break;
            case 'search':
                $redirection->searchPerm();
        }
    } elseif ($_SESSION['isAdmin'] == true) {
        switch ($_SESSION['p']) {
            case 'profilPil':
                $redirection->profilPilPerm();
                break;
            case 'home':
                $redirection->homePerm();
                break;
        }
    } elseif ($_SESSION['typeUser'] == 'pilote') {
        switch ($_SESSION['p']) {
            case 'profilPil':
                $redirection->profilPilote();
                break;
            case 'home':
                $redirection->homePilote();
                break;
            case 'offre':
                $redirection->offrePerm($_SESSION['offre']);
                break;
        }
    } else {
        switch ($_SESSION['p']) {
            case 'search':
                $redirection->search();
                break;
            case 'profilEtud':
                $redirection->profilEtud($_SESSION['idTypeUser']);
                break;
            case 'offreLast':
                $_SESSION['offre'] = $redirection->offreLast($_SESSION['offreLast'], $_SESSION['idTypeUser']);
                $_SESSION['p'] = 'offre';
                break;
            case 'offre':
                $redirection->offre($_SESSION['offre'], $_SESSION['idTypeUser']);
                break;
            case 'profilEntr':
                $redirection->profilEntr();
                break;
            case 'home':
                $redirection->home();
                break;
            case 'suivi':
                $redirection->suivi();
                break;
        }
    }
} else {
    $redirection->connexion();
}

/* switch ($_SESSION['p']) {
// Admin / Pilote
case 'profilEtudPerm':
$redirection->profilEtudPerm();
break;
case 'offrePerm':
$redirection->offrePerm($_SESSION['offrePerm']);
break;
case 'profilEntrPerm':
$redirection->profilEntrPerm();
break;
case 'promotionPerm':
$redirection->promotionPerm();
break;
case 'searchPerm':
$redirection->searchPerm();
// Admin
case 'profilPilPerm':
$redirection->profilPilPerm();
break;
case 'homePerm':
$redirection->homePerm();
break;
// Pilote / Student
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
$redirection->offre($_SESSION['offre']);
break;
case 'profilEntr':
$redirection->profilEntr();
break;
case 'promotion':
$redirection->promotion();
break;
case 'home':
$redirection->home();
break;
default:
$redirection->connexion();
break;
} */

?>