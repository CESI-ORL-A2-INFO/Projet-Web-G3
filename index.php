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
        if ($isAdmin == 1) {
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

// Gestion search
if (isset($_GET['current_page']) && !empty($_GET['current_page'])) {
    $currentPage = (int) strip_tags($_GET['current_page']);
} else if ($_SESSION['p'] == 'search') {
    $currentPage = 1;
}


// filtre search searchfiltre

if (isset($_GET['filtre'])) {
    $_SESSION['filtre'] = $_GET['filtre'];
} else {
    $_SESSION['filtre'] = "";
}
if (isset($_GET['search'])) {
    $_SESSION['search'] = $_GET['search'];
} else {
    $_SESSION['search'] = "";
}
if (isset($_GET['searchfiltre'])) {
    $_SESSION['searchfiltre'] = $_GET['searchfiltre'];
} else {
    $_SESSION['searchfiltre'] = "";
}
//test

// Profil entreprise

if (isset($_GET['entr'])) {
    $_SESSION['p'] = 'profilEntr';
    $_SESSION['entr'] = $_GET['entr'];
} else if (isset($_POST['entr'])) {
    $_SESSION['p'] = 'profilEntr';
    $_SESSION['entr'] = $_POST['entr'];
}

// Commentaire entreprise

if (isset($_POST['action']) && $_SESSION['p'] == 'profilEntr' && $_SESSION['typeUser'] == 'etudiant') {
    if ($_POST['action'] == 'add') {
        $change->addCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'upd') {
        $change->updCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'del') {
        $change->delCommentaire((int) $_SESSION['idTypeUser'], $_SESSION['entr']);
    }
} else if (isset($_POST['action']) && $_SESSION['p'] == 'profilEntr' && $_SESSION['typeUser'] != 'etudiant') {
    if ($_POST['action'] == 'add') {
        $change->addCommentairePerm((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'upd') {
        $change->updCommentairePerm((int) $_SESSION['idTypeUser'], $_SESSION['entr'], (int) $_POST['note'], $_POST['commentaire']);
    } else if ($_POST['action'] == 'del') {
        $change->delCommentairePerm((int) $_SESSION['idTypeUser'], $_SESSION['entr']);
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
if (isset($_POST['action']) && $_SESSION['p'] == 'offre') {
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

// Ajout, modification et suppression entreprise

if (isset($_POST['actionEntr']) && $_SESSION['p'] == 'profilEntr') {
    switch ($_POST['actionEntr']) {
        case 'modif':
            $sect = [
                $_POST['secteur1'],
                $_POST['secteur2'],
                $_POST['secteur3']
            ];
            $adresse = [
                'numRue' => $_POST['numRue'],
                'nomRue' => $_POST['nomRue'],
                'ville' => $_POST['ville'],
                'cp' => $_POST['cp'],
                'pays' => $_POST['pays']
            ];
            $nomEntr = $change->modifEntr($_SESSION['idEntr'], $_POST['nomEntr'], $adresse, $sect, $_POST['nbStagiaire']);
            $_SESSION['entr'] = $nomEntr;
            break;
        case 'suppr':
            $change->supprEntr($_SESSION['idEntr']);
            $_SESSION['p'] = 'home';
            break;
    }
}
if (isset($_POST['actionEntr']) && $_POST['actionEntr'] == 'add') {
    $sect = [
        $_POST['secteur1'],
        $_POST['secteur2'],
        $_POST['secteur3']
    ];
    $adresse = [
        'numRue' => $_POST['numRue'],
        'nomRue' => $_POST['nomRue'],
        'ville' => $_POST['ville'],
        'cp' => $_POST['cp'],
        'pays' => $_POST['pays']
    ];
    $nomEntr = $change->ajouterEntr($_POST['nomEntr'], $adresse, $sect, $_POST['nbStagiaire']);
    $_SESSION['entr'] = $nomEntr;
    $_SESSION['p'] = 'profilEntr';
}

// Gestion promo

if (isset($_GET['promo']) && $_SESSION['p'] == 'profil') {
    $_SESSION['promo'] = $_GET['promo'];
    $_SESSION['p'] = 'promotion';
}

// Ajout etudiant promo

if (isset($_POST['nomEtud']) && isset($_POST['prenomEtud']) && $_SESSION['p'] == 'promotion' && isset($_POST['action'])) {
    if ($_POST['action'] == 'add') {
        $change->addEtudiant($_SESSION['idTypeUser'], $_POST['nomEtud'], $_POST['prenomEtud'], $_SESSION['promo']);
    }
}

// Profil etudiant perm

if (isset($_GET['etud'])) {
    $_SESSION['p'] = 'profilEtud';
    $_SESSION['etud'] = $_GET['etud'];
}

// Gestion etudiant

if (isset($_POST['action']) && $_SESSION['p'] == 'profilEtud') {
    if ($_POST['action'] == 'modif') {
        $change->updEtudiant($_SESSION['etud'], $_POST['nom'], $_POST['prenom'], $_POST['centre'], $_POST['pilote'], $_POST['promo']);
    } else {
        $_SESSION['p'] = 'promotion';
        $change->delEtud($_SESSION['etud']);
    }
}

if (isset($_POST['addEtud']) && $_SESSION['p'] == 'addEtud') {
    $change->addEtudiantCentre($_POST['pilote'], $_POST['nom'], $_POST['prenom'], $_POST['promo'], $_POST['centre']);
    $_SESSION['p'] = 'home';
}

// Add/del promotion

if (isset($_GET['promoAdd']) && $_SESSION['p'] == 'profil') {
    $change->addPromo($_SESSION['idTypeUser'], $_GET['promoAdd']);
} else if (isset($_POST['actionPromo']) && $_SESSION['p'] == 'promotion') {
    $change->delPromo($_SESSION['idTypeUser'], $_SESSION['promo']);
    $_SESSION['p'] = 'profil';
}

// modif/add/suppr profilPilPerm

if (isset($_GET['pil'])) {
    $_SESSION['pil'] = $_GET['pil'];
}
if (isset($_GET['actionPil'])) {
    if ($_GET['actionPil'] == 'modif') {
        $change->modifPil($_SESSION['pil'], $_GET['nom'], $_GET['prenom'], $_GET['centre']);
    } else {
        $change->supprPil($_SESSION['pil']);
        $_SESSION['p'] = 'home';
    }
}

if (isset($_POST['addPil']) && $_SESSION['p'] == 'addPil') {
    $change->addPilote($_POST['nom'], $_POST['prenom'], $_POST['centre'], $_POST['admin']);
    $_SESSION['p'] = 'home';
}
// Deconnexion session
$deco = false;
if (isset($_GET['deconnexion']) && $_GET['deconnexion'] == 'true') {
    session_unset();
    session_destroy();
    $deco = true;  
}

// Choix page

if (isset($_SESSION['id_user']) && $deco == false) {
    if ($_SESSION['isAdmin'] == true) {
        switch ($_SESSION['p']) {
            case 'profil':
                $_SESSION['pil'] = $_SESSION['idTypeUser'];
                $redirection->profilPilPerm($_SESSION['idTypeUser'], $_SESSION['pil']);
                break;
            case 'profilPil':
                $redirection->profilPilPerm($_SESSION['idTypeUser'], $_SESSION['pil']);
                break;
            case 'home':
                $redirection->homePerm();
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
                $_SESSION['p'] = 'home';
                break;
            case 'addEntr':
                $redirection->addEntr();
                $_SESSION['p'] = 'home';
                break;
            case 'addPil':
                $redirection->addPil();
                $_SESSION['p'] = 'home';
                break;
            case 'addEtud':
                $redirection->addEtud();
                $_SESSION['p'] = 'home';
                break;
            case 'search':
                $redirection->searchPerm($currentPage, 6, $_SESSION['filtre'], $_SESSION['search'], $_SESSION['searchfiltre']);
                break;
            case 'profilEntr':
                $_SESSION['idEntr'] = $redirection->profilEntrPerm($_SESSION['entr'], $_SESSION['idTypeUser']);
                break;
            case 'promotion':
                $redirection->promoPerm($_SESSION['idTypeUser'], $_SESSION['promo']);
                break;
            case 'profilEtud':
                $redirection->profilEtudPerm($_SESSION['etud']);
                break;
            case 'CDC':
                $redirection->cdcPerm();
                break;
            case 'CGU':
                $redirection->cguPerm();
                break;
            case 'cookie':
                $redirection->cookiePerm();
                break;
        }
    } else if ($_SESSION['typeUser'] == 'pilote') {
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
                $_SESSION['p'] = 'home';
                break;
            case 'addEntr':
                $redirection->addEntr();
                $_SESSION['p'] = 'home';
                break;
            case 'search':
                $redirection->searchPerm($currentPage, 6, $_SESSION['filtre'], $_SESSION['search'], $_SESSION['searchfiltre']);
                break;
            case 'profilEntr':
                $_SESSION['idEntr'] = $redirection->profilEntrPerm($_SESSION['entr'], $_SESSION['idTypeUser']);
                break;
            case 'promotion':
                $redirection->promoPerm($_SESSION['idTypeUser'], $_SESSION['promo']);
                break;
            case 'profilEtud':
                $redirection->profilEtudPerm($_SESSION['etud']);
                break;
            case 'CDC':
                $redirection->cdcPerm();
                break;
            case 'CGU':
                $redirection->cguPerm();
                break;
            case 'cookie':
                $redirection->cookiePerm();
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
            case 'CDC':
                $redirection->cdc();
                break;
            case 'CGU':
                $redirection->cgu();
                break;
            case 'cookie':
                $redirection->cookie();
                break;
        }
    }
} else {
    $redirection->connexion();
}

?>