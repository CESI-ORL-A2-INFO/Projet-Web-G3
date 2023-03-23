<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controllerPage.php");
require_once(RACINE_DIR . "/src/controllers/controllerBDD.php");
require_once(RACINE_DIR . "/src/controllers/controllerAction.php");

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
}// filtre search searchfiltre
if (isset($_GET['filtre'])) {
    $_SESSION['filtre'] = $_GET['filtre'];
}
else{
    $_SESSION['filtre'] = "";
}
if (isset($_GET['search'])) {
    $_SESSION['search'] = $_GET['search'];
}
else{
    $_SESSION['search'] = "";
}

if (isset($_GET['searchfiltre'])) {
    $_SESSION['searchfiltre'] = $_GET['searchfiltre'];
}
else{
    $_SESSION['searchfiltre'] = "";
}


/* if(isset($_GET['search'])){
    $redirection->search()
} */
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

// Ajout, modification et suppression Offre

if (isset($_POST['addOffre']) && $_POST['addOffre'] == true) {
    $_SESSION['p'] = 'home';
    $data = [
        'nomOffre' => $_POST['nomOffre'],
        'nomEntr' => $_POST['nomEntr'],
        'duree' => $_POST['duree'],
        'dateDebut' => $_POST['dateDebut'],
        'dateEmi' => $_POST['dateEmi'],
        'remu' => $_POST['remuneration'],
        'email' => $_POST['email'],
        'desc' => $_POST['descr'],
        'nbPlace' => $_POST['nbPlace']
    ];
    $promo = [
        $_POST['promo1'],
        $_POST['promo2'],
        $_POST['promo3'],
        $_POST['promo4']
    ];
    $comp[0] = [
        'comp' => $_POST['comp1'],
        'lvl' => $_POST['lvl1']
    ];
    $comp[1] = [
        'comp' => $_POST['comp2'],
        'lvl' => $_POST['lvl2']
    ];
    $comp[2] = [
        'comp' => $_POST['comp3'],
        'lvl' => $_POST['lvl3']
    ];
    $comp[3] = [
        'comp' => $_POST['comp4'],
        'lvl' => $_POST['lvl4']
    ];
    $comp[4] = [
        'comp' => $_POST['comp5'],
        'lvl' => $_POST['lvl5']
    ];
    $change->addOffre($data, $promo, $comp);
}
if (isset($_POST['action']) && isset($_SESSION['p']) == 'offre') {
    switch ($_POST['action']) {
        case 'suppr':
            $change->supprOffre($_SESSION['offre']);
            $_SESSION['p'] = 'home';
            break;
        case 'modif':
            $data = [
                'nomOffre' => $_POST['nomOffre'],
                'nomEntr' => $_POST['nomEntr'],
                'duree' => $_POST['duree'],
                'dateDebut' => $_POST['dateDebut'],
                'dateEmi' => $_POST['dateEmi'],
                'remu' => $_POST['remuneration'],
                'email' => $_POST['email'],
                'desc' => $_POST['descr'],
                'nbPlace' => $_POST['nbPlace']
            ];
            $promo = [
                $_POST['promo1'],
                $_POST['promo2'],
                $_POST['promo3'],
                $_POST['promo4']
            ];
            $comp[0] = [
                'comp' => $_POST['comp1'],
                'lvl' => $_POST['lvl1']
            ];
            $comp[1] = [
                'comp' => $_POST['comp2'],
                'lvl' => $_POST['lvl2']
            ];
            $comp[2] = [
                'comp' => $_POST['comp3'],
                'lvl' => $_POST['lvl3']
            ];
            $comp[3] = [
                'comp' => $_POST['comp4'],
                'lvl' => $_POST['lvl4']
            ];
            $comp[4] = [
                'comp' => $_POST['comp5'],
                'lvl' => $_POST['lvl5']
            ];
            $change->modifOffre($data, $promo, $comp, $_SESSION['offre']);
            break;
    }
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
    }*/if ($_SESSION['typeUser'] == 'pilote') {
        switch ($_SESSION['p']) {
            case 'profil':
                $redirection->profilPil($_SESSION['idTypeUser']);
                break;
            case 'home':
                $redirection->homePilote();
                break;
            case 'offre':
                $redirection->offrePil($_SESSION['offre']);
                break;
            case 'offreLast':
                $_SESSION['offre'] = $redirection->offreLastPil($_SESSION['offreLast']);
                $_SESSION['p'] = 'offre';
                break;
            case 'addOffre':
                $redirection->addOffre();
                break;
            case 'addEntr':
                $redirection->addEntr();
                break;
            case 'search':
                $redirection->searchPerm($currentPage, 6);
                break;
        }
    } else {
        switch ($_SESSION['p']) {
            case 'search':
                $redirection->search($currentPage, 6, $_SESSION['filtre'], $_SESSION['search'], $_SESSION['searchfiltre']);
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