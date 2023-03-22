<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controllerPage.php");
require_once(RACINE_DIR . "/src/controllers/controllerBDD.php");
require_once(RACINE_DIR . "/src/controllers/controllerAction.php");
require_once(RACINE_DIR . "/src/controllers/controllerPagePil.php");

// Session

if (session_status() != 2) {
    session_start();
}

// Page

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $_SESSION['p'] = (string) strip_tags($_GET['p']);
} elseif (isset($_SESSION['p']) && !empty($_SESSION['p'])) {
} else {
    $_SESSION['p'] = null;
}

// Controller
$redirection = new Controller();
$redirectionPil = new controllerPagePil();
$controlBDD = new ControllerBDD();
$change = new ControllerAction();
$isAdmin = false;

// Connexion

if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    $connected = $controlBDD->verifConnexion($_POST['mail'], $_POST['mdp']);
    if ($connected != null) {
        $_SESSION['id_user'] = $connected;
        $isAdmin = $controlBDD->isAdmin($connected);
        if ($isAdmin == true) {
            $_SESSION['isAdmin'] = $isAdmin;
        } else {
            $_SESSION['isAdmin'] = false;
        }
        $isPilote = $controlBDD->isPilote($connected);
        if ($isPilote != null) {
            $_SESSION['typeUser'] = 'pilote';
            $_SESSION['idTypeUser'] = (int) $controlBDD->getIdPilote($_SESSION['id_user'])[0][0];
        } else {
            $_SESSION['typeUser'] = 'etudiant';
            $_SESSION['idTypeUser'] = (int) $controlBDD->getIDEtud($_SESSION['id_user'])[0][0];
        }
        $_SESSION['p'] = 'home';
    }
}

// Offre home page

if (isset($_GET['offreLast'])) {
    $_SESSION['offreLast'] = $_GET['offreLast'];
    $_SESSION['p'] = 'offreLast';
}

// Offre other pages

if (isset($_GET['offre'])) {
    $_SESSION['offre'] = $_GET['offre'];
    $_SESSION['p'] = 'offre';
}

// Statut offre

if (isset($_POST['statut']) && $_POST['statut'] != null) {
    if ($redirection->haveCurrentStatut($_SESSION['offre'], $_SESSION['idTypeUser']) == true) {
        $change->changeStatutOffre($_SESSION['idTypeUser'], $_SESSION['offre'], $_POST['statut']);
    } else {
        $change->addStatutOffre($_SESSION['idTypeUser'], $_SESSION['offre'], $_POST['statut']);
    }
}

// Deconnexion session
$deco = false;

if (isset($_GET['deconnexion']) && $_GET['deconnexion'] == true) {
    session_destroy();
    $deco = true;
}

// Gestion search

if (isset($_GET['current_page']) && !empty($_GET['current_page'])) {
    $currentPage = (int) strip_tags($_GET['current_page']);
} else if ($_SESSION['p'] == 'search') {
    $currentPage = 1;
}

// Profil entreprise

if (isset($_GET['entr'])) {
    $_SESSION['p'] = 'profilEntr';
    $_SESSION['entr'] = $_GET['entr'];
}

// Commentaire entreprise

if (isset($_POST['action']) && $_SESSION['p'] == 'profilEntr') {
    if ($_POST['action'] == 'add') {
        $change->addCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'upd') {
        $change->updCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'del') {
        $change->delCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr']);
    }
}

// Suivi

if (isset($_GET['bookmark']) && $_GET['bookmark'] == true) {
    $change->isBook((int) $_SESSION['idTypeUser'], $_SESSION['offre']);
}

// Choix page

if (isset($_SESSION['id_user']) && $deco == false) {
/*     if ($_SESSION['isAdmin'] == true && $_SESSION['typeUser'] == 'pilote') {
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
    }*/ if ($_SESSION['typeUser'] == 'pilote') {
        switch ($_SESSION['p']) {
            case 'profil':
                $redirectionPil->profilPil();
                break;
            case 'home':
                $redirectionPil->homePilote();
                break;
            case 'offre':
                $redirectionPil->offrePil($_SESSION['offre']);
                break;
            case 'offreLast':
                $_SESSION['offre'] = $redirectionPil->offreLastPil($_SESSION['offreLast'], $_SESSION['idTypeUser']);
                $_SESSION['p'] = 'offre';
                break;
        }
    } else {
        switch ($_SESSION['p']) {
            case 'search':
                $redirection->search($currentPage, 6);
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
                $redirection->profilEntr($_SESSION['entr'], $_SESSION['idTypeUser']);
                break;
            case 'home':
                $redirection->home();
                break;
            case 'suivi':
                $redirection->suivi($_SESSION['idTypeUser']);
                break;
        }
    }
} else {
    $redirection->connexion();
}

?>