<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");
require_once(RACINE_DIR . "/src/models/modelHomePage.php");
require_once(RACINE_DIR . "/src/models/modelProfil.php");
require_once(RACINE_DIR . "/src/models/modelUpdate.php");
class Controller
{
    private $tpl;
    private $home;
    private $profilEtud;
    private $upd;
    public function __construct()
    {
        $this->tpl = new AppSmarty();
        $this->home = new ModelHomePage();
        $this->profilEtud = new ModelProfil();
        $this->upd = new ModelUpdate();
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
    public function search(int $currentPage, int $nbParPage) // not started
    {
        $nbOffre = $this->home->getNbOffre();
        $lastPage = ceil($nbOffre[0][0] / $nbParPage);
        $offset = ($currentPage - 1) * $nbParPage;
        $id = $this->home->getIdLastOffre($nbParPage, $offset);
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
                $temp[$i] = $this->home->getOffre($idOffre[0]['IdOffre']);
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
    public function suivi(int $idUser) // not started
    {
        $suivi = $this->home->getSuivi($idUser);
        if ($suivi != null) {
            for ($i = 0; $i < count($suivi); $i++) {
                $temp[$i] = $this->home->getOffre($suivi[0]['IdOffre']);
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
        $etudiant = $this->profilEtud->getInfo($idUser);
        $idOffre = $this->home->getIdPostule($idUser);
        if ($idOffre != null) {
            for ($i = 0; $i < count($idOffre); $i++) {
                $temp[$i] = $this->home->getOffre($idOffre[0]['IdOffre']);
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
        $this->tpl->display('offre.tpl');
        return $lastOffre[0]['IdOffre'];
    }
    public function offrePil(int $idOffre, int $id) // not started
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
    public function haveCurrentStatut(int $idOffre, $idEtud)
    {
        if ($this->home->getStatutEtud($idOffre, $idEtud) != array()) {
            return true;
        }
        return false;
    }
}

?>