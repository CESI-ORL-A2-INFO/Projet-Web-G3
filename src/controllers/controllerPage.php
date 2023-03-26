<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");
require_once(RACINE_DIR . "/src/models/modelHomePage.php");
require_once(RACINE_DIR . "/src/models/modelProfil.php");
require_once(RACINE_DIR . "/src/models/modelUpdate.php");
require_once(RACINE_DIR . "/src/models/modelSearch.php");
class Controller
{
    private $tpl;
    private $home;
    private $profil;
    private $upd;

    private $search;
    public function __construct()
    {
        $this->tpl = new AppSmarty();
        $this->home = new ModelHomePage();
        $this->profil = new ModelProfil();
        $this->upd = new ModelUpdate();
        $this->search = new modelSearch();
    }
    public function home() // waiting
    {
        $lastOffres = $this->home->getOffrePage6();
        for ($i = 5; $i >= 0; $i--) {
            $promo[$i] = $this->home->getPromo($lastOffres[$i]['IdOffre']);
            $secteur[$i] = $this->home->getSecteur($lastOffres[$i]['IdOffre']);
            $comp[$i] = $this->home->getComp($lastOffres[$i]['IdOffre']);
            $ville[$i] = $this->home->getVille($lastOffres[$i]['IdOffre']);
            $entr[$i] = $this->home->getEntr($lastOffres[$i]['IdOffre']);
        }
        for ($i = 0; $i < count($lastOffres); $i++) {
            $idOffre[$i] = $lastOffres[$i]['IdOffre'];
            $nomOffre[$i] = $lastOffres[$i]['nomOffre'];
            $duree[$i] = $lastOffres[$i]['DuréeStage'];
            $nomEntr[$i] = $entr[$i][0];
            $vil[$i] = $ville[$i][0];
        }
        $this->tpl->assign('idOffre', $idOffre);
        $this->tpl->assign('promo', $promo);
        $this->tpl->assign('competences', $comp);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('nomOffre', $nomOffre);
        $this->tpl->assign('nomEntr', $nomEntr);
        $this->tpl->assign('ville', $vil);
        $this->tpl->assign('duree', $duree);
        $this->tpl->display('home.tpl');
    }
    public function connexion() // finished
    {
        $this->tpl->display('connexion.tpl');
    }
    public function search(int $currentPage, int $nbParPage, string $filtre, string $nom, string $nomfilter) // not started
    {
        $offset = ($currentPage - 1) * $nbParPage;
        switch ($filtre) {
            default:
                $id = $this->home->getIdLastOffre($nbParPage, $offset); // Juste pour offre sans filtre
                $lastPage = ceil(count($this->home->getIdAllLastOffre()) / $nbParPage);
                break;
            case "offre":
                $id = $this->search->Search($nom, $offset, $nbParPage);
                $lastPage = ceil(count($this->search->searchAll($nom)) / $nbParPage);
                break;
            case "entreprise":
                $id = $this->search->SearchEntreprise($nom, $offset, $nbParPage);
                $lastPage = ceil(count($this->search->SearchEntrepriseAll($nom)) / $nbParPage);
                break;
            case "comp":
                $id = $this->search->SearchComp($nom, $nomfilter, $offset, $nbParPage);
                $lastPage = ceil(count($this->search->SearchCompAll($nom, $nomfilter)) / $nbParPage);
                break;
            case "secteur":
                $id = $this->search->SearchSecteur($nom, $nomfilter, $offset, $nbParPage);
                $lastPage = ceil(count($this->search->SearchSecteurAll($nom, $nomfilter)) / $nbParPage);
                break;
            case "promotion":
                $id = $this->search->SearchPromo($nom, $nomfilter, $offset, $nbParPage);
                $lastPage = ceil(count($this->search->SearchPromoAll($nom, $nomfilter)) / $nbParPage);
                break;
        }
        for ($i = 0; $i < count($id); $i++) {
            $temp[$i] = $this->home->getOffre($id[$i]['IdOffre']);
            $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
            $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
            $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
            $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
            $card[$i]['descr'] = $temp[$i][0]['Description'];
            $card[$i]['promo'] = $this->home->getPromo($temp[$i][0]['IdOffre']);
            $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
            $card[$i]['competences'] = $this->home->getComp($temp[$i][0]['IdOffre']);
            $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
            $card[$i]['nomEntr'] = $this->home->getEntr($temp[$i][0]['IdOffre']);
        }
        $this->tpl->assign('card', $card);
        $this->tpl->assign('lastPage', $lastPage);
        $this->tpl->assign('content', $nom);
        $this->tpl->assign('current_page', $currentPage);
        $this->tpl->display('search.tpl');
    }
    public function offrePerm(int $idOffre) // not started
    {
        $lastOffre = $this->home->getOffre($idOffre);
        $comp = $this->home->getCompetences($lastOffre[0]['IdOffre']);
        $adresse = $this->home->getAdresse($lastOffre[0]['IdOffre']);
        $promo = $this->home->getPromo($lastOffre[0]['IdOffre']);
        $secteur = $this->home->getSecteur($lastOffre[0]['IdOffre']);
        $this->tpl->assign('nomOffre', $lastOffre[0]['nomOffre']);
        $this->tpl->assign('nomEntr', $lastOffre[0]['NomEntreprise']);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('promo', $promo);
        $this->tpl->assign('addresse', $adresse);
        $this->tpl->assign('duree', $lastOffre[0]['DuréeStage']);
        $this->tpl->assign('competence', $comp);
        $this->tpl->assign('descr', $lastOffre[0]['Description']);
        $this->tpl->assign('dateOffre', $lastOffre[0]['DateDebut']);
        $this->tpl->assign('dateEmission', $lastOffre[0]['DateEmission']);
        $this->tpl->assign('place', $lastOffre[0]['NbrePlace']);
        $this->tpl->assign('paie', $lastOffre[0]['Paie']);
        $this->tpl->assign('mail', $lastOffre[0]['adresse_mail']);
        $this->tpl->display('offrePerm.tpl');
    }
    public function profilEntr(string $nomEntr, int $idUser) // not started
    {
        $infoEntr = $this->home->getEntrByName($nomEntr);
        $comPilote = $this->home->getComPilote($infoEntr[0]['IdEntreprise']);
        $comEtud = $this->home->getComEtud($infoEntr[0]['IdEntreprise']);
        $comEtudIdUser = $this->home->getComEtudById($infoEntr[0]['IdEntreprise'], $idUser);
        $comEtudIdUser[0] = $comEtudIdUser == array() ? array() : $comEtudIdUser[0];
        $idOffre = $this->home->getOffreEntr($infoEntr[0]['IdEntreprise']);
        if ($idOffre != null) {
            for ($i = 0; $i < count($idOffre); $i++) {
                $temp[$i] = $this->home->getOffre($idOffre[$i]['IdOffre']);
                $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
                $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
                $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
                $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
                $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
                $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
            }
        } else {
            $card = [];
        }
        $this->tpl->assign('card', $card);
        $this->tpl->assign('infoEntr', $infoEntr[0]);
        $this->tpl->assign('comUser', $comEtudIdUser[0]);
        $this->tpl->assign('comPil', $comPilote);
        $this->tpl->assign('comEtud', $comEtud);
        $this->tpl->display('profilEntr.tpl');
    }
    public function profilEntrPerm(string $nomEntr, int $idUser) // not started
    {
        $infoEntr = $this->home->getEntrByName($nomEntr);
        $secteur = $this->home->getAllSect();
        $comPilote = $this->home->getComPilote($infoEntr[0]['IdEntreprise']);
        $comEtud = $this->home->getComEtud($infoEntr[0]['IdEntreprise']);
        $comPilIdUser = $this->home->getComPilById($infoEntr[0]['IdEntreprise'], $idUser);
        $comPilIdUser[0] = $comPilIdUser == array() ? array() : $comPilIdUser[0];
        $idOffre = $this->home->getOffreEntr($infoEntr[0]['IdEntreprise']);
        if ($idOffre != null) {
            for ($i = 0; $i < count($idOffre); $i++) {
                $temp[$i] = $this->home->getOffre($idOffre[$i]['IdOffre']);
                $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
                $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
                $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
                $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
                $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
                $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
            }
        } else {
            $card = [];
        }
        $this->tpl->assign('card', $card);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('infoEntr', $infoEntr[0]);
        $this->tpl->assign('comUser', $comPilIdUser[0]);
        $this->tpl->assign('comPil', $comPilote);
        $this->tpl->assign('comEtud', $comEtud);
        $this->tpl->display('profilEntrPerm.tpl');
        return $infoEntr[0]['IdEntreprise'];
    }
    public function suivi(int $idUser) // not started
    {
        $suivi = $this->home->getSuivi($idUser);
        if ($suivi != null) {
            for ($i = 0; $i < count($suivi); $i++) {
                $temp[$i] = $this->home->getOffre($suivi[$i]['IdOffre']);
                $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
                $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
                $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
                $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
                $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
                $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
                $card[$i]['nomEntr'] = $this->home->getEntr($temp[$i][0]['IdOffre']);
            }
        } else {
            $card = [];
        }
        $this->tpl->assign('card', $card);
        $this->tpl->display('suivi.tpl');
    }
    public function profilEtud(int $idUser) // waiting
    {
        $etudiant = $this->profil->getInfoEtud($idUser);
        $idOffre = $this->home->getIdPostule($idUser);
        if ($idOffre != null) {
            for ($i = 0; $i < count($idOffre); $i++) {
                $temp[$i] = $this->home->getOffre($idOffre[$i]['IdOffre']);
                $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
                $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
                $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
                $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
                $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
                $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
                $card[$i]['nomEntr'] = $this->home->getEntr($temp[$i][0]['IdOffre']);
                $card[$i]['statut'] = $this->home->getStatutEtud($temp[$i][0]['IdOffre'], $idUser);
            }
        } else {
            $card = [];
        }
        $this->tpl->assign('card', $card);
        $this->tpl->assign('nom', $etudiant[0]['NomEtudiant']);
        $this->tpl->assign('prenom', $etudiant[0]['PrenomEtudiant']);
        $this->tpl->assign('centre', $etudiant[0]['Centre']);
        $this->tpl->assign('nomPilote', $etudiant[0]['NomPilote']);
        $this->tpl->assign('prenomPilote', $etudiant[0]['PrenomPilote']);
        $this->tpl->assign('promo', $etudiant[0]['Promotion']);
        $this->tpl->display('profilEtud.tpl');
    }
    public function offreLast(int $lastPage, int $id) // not started
    {
        $lastOffre = $this->home->getOffrePage($lastPage);
        $comp = $this->home->getCompetences($lastOffre[0]['IdOffre']);
        $adresse = $this->home->getAdresse($lastOffre[0]['IdOffre']);
        $promo = $this->home->getPromo($lastOffre[0]['IdOffre']);
        $secteur = $this->home->getSecteur($lastOffre[0]['IdOffre']);
        $statut = $this->home->getStatut();
        $currentStatut = $this->home->getStatutEtud($lastOffre[0]['IdOffre'], $id);
        $this->tpl->assign('isBook', $this->upd->getBook($id, $lastPage));
        $this->tpl->assign('nomOffre', $lastOffre[0]['nomOffre']);
        $this->tpl->assign('nomEntr', $lastOffre[0]['NomEntreprise']);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('promo', $promo);
        $this->tpl->assign('addresse', $adresse);
        $this->tpl->assign('duree', $lastOffre[0]['DuréeStage']);
        $this->tpl->assign('competence', $comp);
        $this->tpl->assign('descr', $lastOffre[0]['Description']);
        $this->tpl->assign('dateOffre', $lastOffre[0]['DateDebut']);
        $this->tpl->assign('dateEmission', $lastOffre[0]['DateEmission']);
        $this->tpl->assign('place', $lastOffre[0]['NbrePlace']);
        $this->tpl->assign('paie', $lastOffre[0]['Paie']);
        $this->tpl->assign('mail', $lastOffre[0]['adresse_mail']);
        $this->tpl->assign('statut', $statut);
        if ($currentStatut != array()) {
            $this->tpl->assign('currentStatut', $currentStatut[0]['statut']);
        } else {
            $this->tpl->assign('currentStatut', null);
        }
        $this->tpl->display('offre.tpl');
        return $lastOffre[0]['IdOffre'];
    }
    public function offre(int $idOffre, int $id) // not started
    {
        $lastOffre = $this->home->getOffre($idOffre);
        $comp = $this->home->getCompetences($lastOffre[0]['IdOffre']);
        $adresse = $this->home->getAdresse($lastOffre[0]['IdOffre']);
        $promo = $this->home->getPromo($lastOffre[0]['IdOffre']);
        $secteur = $this->home->getSecteur($lastOffre[0]['IdOffre']);
        $currentStatut = $this->home->getStatutEtud($lastOffre[0]['IdOffre'], $id);
        $statut = $this->home->getStatut();
        $this->tpl->assign('isBook', $this->upd->getBook($id, $idOffre));
        $this->tpl->assign('idOffre', $lastOffre[0]['IdOffre']);
        $this->tpl->assign('nomOffre', $lastOffre[0]['nomOffre']);
        $this->tpl->assign('nomEntr', $lastOffre[0]['NomEntreprise']);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('promo', $promo);
        $this->tpl->assign('addresse', $adresse);
        $this->tpl->assign('duree', $lastOffre[0]['DuréeStage']);
        $this->tpl->assign('competence', $comp);
        $this->tpl->assign('descr', $lastOffre[0]['Description']);
        $this->tpl->assign('dateOffre', $lastOffre[0]['DateDebut']);
        $this->tpl->assign('dateEmission', $lastOffre[0]['DateEmission']);
        $this->tpl->assign('place', $lastOffre[0]['NbrePlace']);
        $this->tpl->assign('paie', $lastOffre[0]['Paie']);
        $this->tpl->assign('mail', $lastOffre[0]['adresse_mail']);
        $this->tpl->assign('statut', $statut);
        if ($currentStatut != array()) {
            $this->tpl->assign('currentStatut', $currentStatut[0]['statut']);
        } else {
            $this->tpl->assign('currentStatut', null);
        }
        $this->tpl->display('offre.tpl');
    }
    public function homePilote() // waiting
    {
        $lastOffres = $this->home->getOffrePage6();
        for ($i = 5; $i >= 0; $i--) {
            $promo[$i] = $this->home->getPromo($lastOffres[$i]['IdOffre']);
            $secteur[$i] = $this->home->getSecteur($lastOffres[$i]['IdOffre']);
            $comp[$i] = $this->home->getComp($lastOffres[$i]['IdOffre']);
            $ville[$i] = $this->home->getVille($lastOffres[$i]['IdOffre']);
            $entr[$i] = $this->home->getEntr($lastOffres[$i]['IdOffre']);
        }
        for ($i = 0; $i < count($lastOffres); $i++) {
            $idOffre[$i] = $lastOffres[$i]['IdOffre'];
            $nomOffre[$i] = $lastOffres[$i]['nomOffre'];
            $duree[$i] = $lastOffres[$i]['DuréeStage'];
            $nomEntr[$i] = $entr[$i][0];
            $vil[$i] = $ville[$i][0];
        }

        $this->tpl->assign('idOffre', $idOffre);
        $this->tpl->assign('promo', $promo);
        $this->tpl->assign('competences', $comp);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('nomOffre', $nomOffre);
        $this->tpl->assign('nomEntr', $nomEntr);
        $this->tpl->assign('ville', $vil);
        $this->tpl->assign('duree', $duree);
        $this->tpl->display('homePilote.tpl');
    }
    public function offreLastPil(int $lastPage) // not started
    {
        $lastOffre = $this->home->getOffrePage($lastPage);
        $comp = $this->home->getAllComp();
        $nomEntr = $this->home->getAllNomEntr();
        $promo = $this->home->getAllPromo();
        $compOffre = $this->home->getCompetences($lastOffre[0]['IdOffre']);
        $adresse = $this->home->getAdresse($lastOffre[0]['IdOffre']);
        $promoOffre = $this->home->getPromo($lastOffre[0]['IdOffre']);
        $secteur = $this->home->getSecteur($lastOffre[0]['IdOffre']);
        for ($i = 0; $i < 5; $i++) {
            if (isset($compOffre[$i]) == false) {
                $compOffre[$i]['niveau'] = "";
            }
        }
        $this->tpl->assign('idOffre', $lastOffre[0]['IdOffre']);
        $this->tpl->assign('nomOffre', $lastOffre[0]['nomOffre']);
        $this->tpl->assign('nomEntr', $nomEntr);
        $this->tpl->assign('nomEntrSelect', $lastOffre[0]['NomEntreprise']);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('promotion', $promo);
        $this->tpl->assign('promoOffre', $promoOffre);
        $this->tpl->assign('compOffre', $compOffre);
        $this->tpl->assign('adresse', $adresse);
        $this->tpl->assign('duree', $lastOffre[0]['DuréeStage']);
        $this->tpl->assign('competences', $comp);
        $this->tpl->assign('descr', $lastOffre[0]['Description']);
        $this->tpl->assign('dateOffre', $lastOffre[0]['DateDebut']);
        $this->tpl->assign('dateEmission', $lastOffre[0]['DateEmission']);
        $this->tpl->assign('place', $lastOffre[0]['NbrePlace']);
        $this->tpl->assign('paie', $lastOffre[0]['Paie']);
        $this->tpl->assign('mail', $lastOffre[0]['adresse_mail']);
        $this->tpl->display('offrePerm.tpl');
        return $lastOffre[0]['IdOffre'];
    }
    public function offrePil(int $idOffre) // not started
    {
        $lastOffre = $this->home->getOffre($idOffre);
        $comp = $this->home->getAllComp();
        $nomEntr = $this->home->getAllNomEntr();
        $promo = $this->home->getAllPromo();
        $compOffre = $this->home->getCompetences($lastOffre[0]['IdOffre']);
        $adresse = $this->home->getAdresse($lastOffre[0]['IdOffre']);
        $promoOffre = $this->home->getPromo($lastOffre[0]['IdOffre']);
        $secteur = $this->home->getSecteur($lastOffre[0]['IdOffre']);
        for ($i = 0; $i < 5; $i++) {
            if (isset($compOffre[$i]) == false) {
                $compOffre[$i]['niveau'] = "";
            }
        }
        $this->tpl->assign('idOffre', $lastOffre[0]['IdOffre']);
        $this->tpl->assign('nomOffre', $lastOffre[0]['nomOffre']);
        $this->tpl->assign('nomEntr', $nomEntr);
        $this->tpl->assign('nomEntrSelect', $lastOffre[0]['NomEntreprise']);
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->assign('promotion', $promo);
        $this->tpl->assign('promoOffre', $promoOffre);
        $this->tpl->assign('compOffre', $compOffre);
        $this->tpl->assign('adresse', $adresse);
        $this->tpl->assign('duree', $lastOffre[0]['DuréeStage']);
        $this->tpl->assign('competences', $comp);
        $this->tpl->assign('descr', $lastOffre[0]['Description']);
        $this->tpl->assign('dateOffre', $lastOffre[0]['DateDebut']);
        $this->tpl->assign('dateEmission', $lastOffre[0]['DateEmission']);
        $this->tpl->assign('place', $lastOffre[0]['NbrePlace']);
        $this->tpl->assign('paie', $lastOffre[0]['Paie']);
        $this->tpl->assign('mail', $lastOffre[0]['adresse_mail']);
        $this->tpl->display('offrePerm.tpl');
    }
    public function profilPil(int $idUser)
    {
        $pilote = $this->profil->getInfoPil($idUser);
        $promo = $this->profil->getPromoPil($idUser);
        $pasPromo = $this->profil->getPasPromo($idUser);
        $this->tpl->assign('nom', $pilote[0]['NomPilote']);
        $this->tpl->assign('prenom', $pilote[0]['PrenomPilote']);
        $this->tpl->assign('centre', $pilote[0]['Centre']);
        $this->tpl->assign('promotion', $promo);
        $this->tpl->assign('pasPromo', $pasPromo);
        $this->tpl->display('profilPilote.tpl');
    }
    public function haveCurrentStatut(int $idOffre, $idEtud)
    {
        if ($this->home->getStatutEtud($idOffre, $idEtud) != array()) {
            return true;
        }
        return false;
    }
    public function addOffre()
    {
        $comp = $this->home->getAllComp();
        $nomEntr = $this->home->getAllNomEntr();
        $promo = $this->home->getAllPromo();
        $this->tpl->assign('nomEntr', $nomEntr);
        $this->tpl->assign('promotion', $promo);
        $this->tpl->assign('competences', $comp);
        $this->tpl->display('addOffre.tpl');
    }
    public function addEntr()
    {
        $secteur = $this->home->getAllSect();
        $this->tpl->assign('secteur', $secteur);
        $this->tpl->display('addEntreprise.tpl');
    }
    public function searchPerm(int $currentPage, int $nbParPage, string $filtre, string $nom, string $nomfilter)
    {
        $nbOffre = $this->home->getNbOffre();
        $lastPage = ceil($nbOffre[0][0] / $nbParPage);
        $offset = ($currentPage - 1) * $nbParPage;
        if ($offset != 0) {
            $offset++;
        }
        switch ($filtre) {
            default:
                $id = $this->home->getIdLastOffre($nbParPage, $offset); // Juste pour offre sans filtre
                break;
            case "offre":
                $id = $this->search->Search($nom, $offset, $nbParPage);
                break;
            case "entreprise":
                $id = $this->search->SearchEntreprise($nom, $offset, $nbParPage);
                break;
            case "comp":
                $id = $this->search->SearchComp($nom, $nomfilter, $offset, $nbParPage);
                break;
            case "secteur":
                $id = $this->search->SearchSecteur($nom, $nomfilter, $offset, $nbParPage);
                break;
            case "promotion":
                $id = $this->search->SearchPromo($nom, $nomfilter, $offset, $nbParPage);
                break;
        }
        for ($i = 0; $i < count($id); $i++) {
            $temp[$i] = $this->home->getOffre($id[$i]['IdOffre']);
            $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
            $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
            $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
            $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
            $card[$i]['descr'] = $temp[$i][0]['Description'];
            $card[$i]['promo'] = $this->home->getPromo($temp[$i][0]['IdOffre']);
            $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
            $card[$i]['competences'] = $this->home->getComp($temp[$i][0]['IdOffre']);
            $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
            $card[$i]['nomEntr'] = $this->home->getEntr($temp[$i][0]['IdOffre']);
        }

        $this->tpl->assign('content', $nom);
        $this->tpl->assign('card', $card);
        $this->tpl->assign('lastPage', $lastPage);
        $this->tpl->assign('current_page', $currentPage);
        $this->tpl->display('searchPerm.tpl');
    }
    public function promoPerm(int $idPil, int $promo)
    {
        $nomPromo = $this->home->getNomPromo($promo);
        $infoPil = $this->home->getPil($idPil);
        $etud = $this->home->getEtudByCentrePromo($infoPil[0]['IdCentre'], $promo);
        $this->tpl->assign('etudiant', $etud);
        $this->tpl->assign('promo', $nomPromo[0][0]);
        $this->tpl->display('promoPerm.tpl');
    }
    public function profilEtudPerm(int $idEtud)
    {
        $etudiant = $this->profil->getInfoEtud($idEtud);
        $idOffre = $this->home->getIdPostule($idEtud);
        $centres = $this->home->getAllCentre();
        $promotions = $this->home->getAllPromo();
        $pilotes = $this->home->getAllPilote();
        if ($idOffre != null) {
            for ($i = 0; $i < count($idOffre); $i++) {
                $temp[$i] = $this->home->getOffre($idOffre[$i]['IdOffre']);
                $card[$i]['IdOffre'] = $temp[$i][0]['IdOffre'];
                $card[$i]['nomOffre'] = $temp[$i][0]['nomOffre'];
                $card[$i]['duree'] = $temp[$i][0]['DuréeStage'];
                $card[$i]['dateDebut'] = $temp[$i][0]['DateDebut'];
                $card[$i]['secteur'] = $this->home->getSecteur($temp[$i][0]['IdOffre']);
                $card[$i]['ville'] = $this->home->getVille($temp[$i][0]['IdOffre']);
                $card[$i]['nomEntr'] = $this->home->getEntr($temp[$i][0]['IdOffre']);
                $card[$i]['statut'] = $this->home->getStatutEtud($temp[$i][0]['IdOffre'], $idEtud);
            }
        } else {
            $card = [];
        }
        $this->tpl->assign('card', $card);
        $this->tpl->assign('nom', $etudiant[0]['NomEtudiant']);
        $this->tpl->assign('prenom', $etudiant[0]['PrenomEtudiant']);
        $this->tpl->assign('centre', $etudiant[0]['Centre']);
        $this->tpl->assign('nomPilote', $etudiant[0]['NomPilote']);
        $this->tpl->assign('prenomPilote', $etudiant[0]['PrenomPilote']);
        $this->tpl->assign('promo', $etudiant[0]['Promotion']);
        $this->tpl->assign('allCentre', $centres);
        $this->tpl->assign('allPromotion', $promotions);
        $this->tpl->assign('allPilote', $pilotes);
        $this->tpl->display('profilEtudPerm.tpl');
    }
    public function cdc()
    {
        $this->tpl->display("CDC.tpl");
    }
    public function cdcPerm()
    {
        $this->tpl->display("CDCPerm.tpl");
    }
    public function cgu()
    {
        $this->tpl->display("CGU.tpl");
    }
    public function cguPerm()
    {
        $this->tpl->display("CGUPerm.tpl");
    }
    public function homePerm()
    {
        $offre = $this->home->getAllOffre();
        $entreprise = $this->home->getAllNomEntr();
        $pilote = $this->home->getAllPilote();
        $etudiant = $this->home->getAllEtud();
        $this->tpl->assign('offre', $offre);
        $this->tpl->assign('entr', $entreprise);
        $this->tpl->assign('pilote', $pilote);
        $this->tpl->assign('etud', $etudiant);
        $this->tpl->display("homePerm.tpl");
    }
    public function profilPilPerm(int $idUser, int $idPil)
    {
        $pilote = $this->profil->getInfoPil($idPil);
        $promo = $this->profil->getPromoPil($idUser);
        $pasPromo = $this->profil->getPasPromo($idUser);
        $centre = $this->home->getAllCentre();
        $this->tpl->assign('allCentre', $centre);
        $this->tpl->assign('promotion', $promo);
        $this->tpl->assign('pasPromo', $pasPromo);
        $this->tpl->assign('nom', $pilote[0]['NomPilote']);
        $this->tpl->assign('prenom', $pilote[0]['PrenomPilote']);
        $this->tpl->assign('centre', $pilote[0]['Centre']);
        $this->tpl->assign('idPil', $idPil);
        $this->tpl->assign('user', $idUser);
        $this->tpl->display('profilPilPerm.tpl');
    }
    public function addPil()
    {
        $centres = $this->home->getAllCentre();
        $this->tpl->assign('allCentre', $centres);
        $this->tpl->display('addPil.tpl');
    }
    public function addEtud()
    {
        $centres = $this->home->getAllCentre();
        $promotions = $this->home->getAllPromo();
        $pilotes = $this->home->getAllPilote();
        $this->tpl->assign('allCentre', $centres);
        $this->tpl->assign('allPromotion', $promotions);
        $this->tpl->assign('allPilote', $pilotes);
        $this->tpl->display('addEtud.tpl');
    }
    public function cookie()
    {
        $this->tpl->display('cookie.tpl');
    }
    public function cookiePerm()
    {
        $this->tpl->display('cookiePerm.tpl');
    }
}

?>