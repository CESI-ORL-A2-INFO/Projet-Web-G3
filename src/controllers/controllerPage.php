<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");
require_once(RACINE_DIR . "/src/models/modelHomePage.php");
require_once(RACINE_DIR . "/src/models/modelProfil.php");

class Controller
{
    private $tpl;
    private $home;
    private $profilEtud;
    public function __construct()
    {
        $this->tpl = new AppSmarty();
        $this->home = new ModelHomePage();
        $this->profilEtud = new ModelProfil();
    }
    public function home() // waiting
    {
        /* $lastOffres = $this->home->getOffrePage6();
        for ($i = 0; $i < count($lastOffres); $i++) {

        }
        $ville = $this->home->getVille6($idOffres);
        $competences = $this->home->getComp6($idOffres);
        $promo = $this->home->getPromo6($idOffres);
        $entr = $this->home->getEntr6($idOffres);
        $this->tpl->assign('nomOffre', $idOffres);
        $this->tpl->assign('nomEntr', $entr); */
        $this->tpl->display('home.tpl');
    }
    public function connexion() // finished
    {
        $this->tpl->display('connexion.tpl');
    }
    public function search() // not started
    {
        $this->tpl->display('search.tpl');
    }
    public function profilEtudPerm() // waiting
    {
        $this->tpl->display('profilEtudPerm.tpl');
    }
    public function profilPilPerm() // waiting
    {
        $this->tpl->display('profilPilPerm.tpl');
    }
    public function homePerm() // not started
    {
        $this->tpl->display('homePerm.tpl');
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
    public function profilEntrPerm() // not started
    {
        $this->tpl->display('profilEntrPerm.tpl');
    }
    public function profilEntr() // not started
    {
        $this->tpl->display('profilEntr.tpl');
    }
    public function profilPilote() // waiting
    {
        $this->tpl->display('profilPilote.tpl');
    }
    public function suivi() // not started
    {
        $this->tpl->display('suivi.tpl');
    }
    public function profilEtud(int $id) // waiting
    {
        $etudiant = $this->profilEtud->getInfo($id);
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
        $this->tpl->assign('currentStatut', $currentStatut[0]['statut']);
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
        $statut = $this->home->getStatut();
        $currentStatut = $this->home->getStatutEtud($lastOffre[0]['IdOffre'], $id);
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
        $this->tpl->assign('currentStatut', $currentStatut[0]['statut']);
        $this->tpl->display('offre.tpl');
    }
    public function promotionPerm() // not started
    {
        $this->tpl->display('promotionPerm.tpl');
    }
    public function promotion() //not started
    {
        $this->tpl->display('promotion.tpl');
    }
    public function homePilote() // waiting
    {
        $this->tpl->display('homePilote.tpl');
    }
    public function searchPerm() // not started
    {
        $this->tpl->display('searchPerm.tpl');
    }
}

?>