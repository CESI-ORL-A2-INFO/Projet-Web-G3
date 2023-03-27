<?php
require_once(RACINE_DIR . "/src/models/modelUpdate.php");
require_once(RACINE_DIR . "/src/models/modelHomePage.php");
class ControllerAction
{
    private $upd;
    private $home;
    public function __construct()
    {
        $this->upd = new ModelUpdate();
        $this->home = new ModelHomePage();
    }
    public function __destruct()
    {
        $this->upd = null;
        $this->home = null;
    }
    public function changeStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->upd->updStatutOffre($idEtud, $idOffre, $idStatut);
    }
    public function addStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->upd->addStatutOffre($idEtud, $idOffre, $idStatut);
    }
    public function addCommentaire(int $idEtud, string $nomEntr, int $note, string $com)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->addComEntr($idEtud, $note, $com, $idEntr[0]['IdEntreprise']);
    }
    public function updCommentaire(int $idEtud, string $nomEntr, int $note, string $com)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->updComEntr($idEtud, $note, $com, $idEntr[0]['IdEntreprise']);
    }
    public function delCommentaire(int $idEtud, string $nomEntr)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->delComEntr($idEtud, $idEntr[0]['IdEntreprise']);
    }
    public function addCommentairePerm(int $idPil, string $nomEntr, int $note, string $com)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->addComEntrPil($idPil, $note, $com, $idEntr[0]['IdEntreprise']);
    }
    public function updCommentairePerm(int $idPil, string $nomEntr, int $note, string $com)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->updComEntrPil($idPil, $note, $com, $idEntr[0]['IdEntreprise']);
    }
    public function delCommentairePerm(int $idPil, string $nomEntr)
    {
        $idEntr = $this->upd->getIdEntr($nomEntr);
        $this->upd->delComEntrPil($idPil, $idEntr[0]['IdEntreprise']);
    }
    public function isBook(int $idUser, $idOffre)
    {
        $book = $this->upd->getBook($idUser, $idOffre);
        if ($book == array()) {
            $this->upd->addBook($idUser, $idOffre);
        } else {
            $this->upd->delBook($idUser, $idOffre);
        }
    }
    public function addOffre(array $data, array $promo, array $comp)
    {
        if ($this->upd->getMail($data['email']) != array()) {
            $idMail = $this->upd->getMail($data['email']);
        } else {
            $this->upd->addMail($data['email']);
            $idMail = $this->upd->getMail($data['email']);
        } // Ajout idMail
        $idEntr = $this->upd->getIdEntr($data['nomEntr']);
        $this->upd->addOffre($data['nomOffre'], $data['duree'], $data['remu'], $data['dateDebut'], $data['nbPlace'], $data['dateEmi'], $idMail[0]['Id_Adresse'], $idEntr[0]['IdEntreprise'], $data['desc']);
        $idOffre = $this->upd->getLastOffre();
        for ($i = 0; $i < count($promo); $i++) {
            if ($promo[$i] != null) {
                $idPromo = $this->upd->getIdPromo($promo[$i]);
                $this->upd->addDemPromo($idOffre[0]['IdOffre'], $idPromo[0]['IdPromo']);
            }
        }
        for ($i = 0; $i < count($comp); $i++) {
            if ($comp[$i]['comp'] != "") {
                $idComp = $this->upd->getIdComp($comp[$i]['comp']);
                $this->upd->addDemComp($idOffre[0]['IdOffre'], $idComp[0]['IdComp'], $comp[$i]['lvl']);
            }
        }
    }
    public function supprOffre(int $idOffre)
    {
        $this->upd->delOffre($idOffre);
    }
    public function modifOffre(array $data, array $promo, array $comp, int $idOffre)
    {
        if ($this->upd->getMail($data['email']) != array()) {
            $idMail = $this->upd->getMail($data['email']);
        } else {
            $this->upd->addMail($data['email']);
            $idMail = $this->upd->getMail($data['email']);
        }
        $idEntr = $this->upd->getIdEntr($data['nomEntr']);
        $this->upd->updOffre($data['nomOffre'], $data['duree'], $data['remu'], $data['dateDebut'], $data['nbPlace'], $data['dateEmi'], $idMail[0]['Id_Adresse'], $idEntr[0]['IdEntreprise'], $data['desc'], $idOffre);
        $currentPromo = $this->home->getPromo($idOffre);
        for ($i = 0; $i < count($promo); $i++) {
            if ($promo[$i] != "") {
                $idPromo = $this->upd->getIdPromo($promo[$i]);
                if (!isset($currentPromo[$i]['Promotion']) && isset($idPromo[0]['IdPromo'])) {
                    $this->upd->addDemPromo($idOffre, $idPromo[0]['IdPromo']);
                } else if ($promo[$i] == "none" && isset($currentPromo[$i]['Promotion'])){
                    $this->upd->delDemPromo($idOffre, $currentPromo[$i]['IdPromo']);
                } else if (isset($currentPromo[$i]['Promotion']) && $promo[$i] != $currentPromo[$i]['Promotion']) {
                    if ($this->upd->getPromo($currentPromo[$i]['IdPromo'], $idPromo[0]['IdPromo']) == array()) {
                        $this->upd->addDemPromo($idOffre, $idPromo[0]['IdPromo']);
                    } else {
                        $this->upd->updDemPromo($idOffre, $idPromo[0]['IdPromo'], $currentPromo[$i]['IdPromo']);
                    }
                }
            }
        }
        $currentComp = $this->home->getComp($idOffre);
        for ($i = 0; $i < count($comp); $i++) {
            if ($comp[$i]['comp'] != "") {
                $idComp = $this->upd->getIdComp($comp[$i]['comp']);
                if (!isset($currentComp[$i]['Compétences']) && isset($idComp[0]['IdComp'])) {
                    $this->upd->addDemComp($idOffre, $idComp[0]['IdComp'], $comp[0]['lvl']);
                } else if ($comp[$i]['comp'] == "none" && isset($currentComp[$i]['Compétences'])){  
                    $this->upd->delDemComp($idOffre, $currentComp[$i]['IdComp']);
                } else if (isset($currentComp[$i]['Compétences']) && $comp[$i]['comp'] != $currentComp[$i]['Compétences']) {
                    if ($this->upd->getCompOffre($currentComp[$i]['IdComp'], $currentComp[0]['IdOffre']) == array()) {
                        $this->upd->addDemComp($idOffre, $idComp[0]['IdComp'], $comp[0]['lvl']);
                    } else {
                        $this->upd->updDemComp($idOffre, $idComp[0]['IdComp'], $currentComp[$i]['IdComp'], $comp[0]['lvl']);
                    }
                }
            }
        }
    }
    public function modifEntr(int $idEntr, string $nomEntr, array $adr, array $sect, int $nbStagiaire)
    {
        if ($this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']) != array()) {
            $idAdr = $this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
        } else {
            $this->upd->addAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
            $idAdr = $this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
        }
        $this->upd->updAdrEntr($idEntr, $idAdr[0]['IdAdresse']);
        $this->upd->updEntr($idEntr, $nomEntr, $nbStagiaire);
        $currentSect = $this->home->getSecteurEntr($idEntr);
        for ($i = 0; $i < count($sect); $i++) {
            if ($sect[$i] != "") {
                $idSect = $this->upd->getIdSect($sect[$i]);
                if (!isset($currentSect[$i]['Secteur_Activite']) && isset($idSect[0]['Id_Secteur'])) {
                    $this->upd->addTravailDans($idEntr, $idSect[0]['Id_Secteur']);
                } else if ($sect[$i] == "none" && isset($currentSect[$i]['Secteur_Activite'])){
                    $this->upd->delTravailDans($idEntr, $currentSect[$i]['Id_Secteur']);
                } else if (isset($currentSect[$i]['Secteur_Activite']) && $sect[$i] != $currentSect[$i]['Secteur_Activite']) {
                    if ($this->upd->getSect($currentSect[$i]['Id_Secteur'], $idEntr) == array()) {
                        $this->upd->addTravailDans($idEntr, $idSect[0]['Id_Secteur']);
                    } else {
                        $this->upd->updTravailDans($idEntr, $idSect[0]['Id_Secteur'], $currentSect[$i]['Id_Secteur']);
                    }
                }
            }
        }
        return $this->home->getEntrById($idEntr)[0]['NomEntreprise'];
    }
    public function supprEntr(int $idEntr)
    {
        $this->upd->delTravailDansIdEntr($idEntr);
        $this->upd->delSeSitue($idEntr);
        $this->upd->delComEntrByIdEntr($idEntr);
        $this->upd->delOffreByIdEntr($idEntr);
        $this->upd->delEntr($idEntr);
    }
    public function ajouterEntr(string $nomEntr, array $adr, array $sect, int $nbStagiaire)
    {
        $this->upd->addEntr($nomEntr, $nbStagiaire);
        $idEntr = $this->upd->getEntrIdLast();
        if ($this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']) != array()) {
            $idAdr = $this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
            $this->upd->updAdrEntr($idEntr[0]['IdEntreprise'], $idAdr[0]['IdAdresse']);
        } else {
            $this->upd->addAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
            $idAdr = $this->upd->getAdresse($adr['numRue'], $adr['nomRue'], $adr['cp'], $adr['ville'], $adr['pays']);
            $this->upd->updAdrEntr($idEntr[0]['IdEntreprise'], $idAdr[0]['IdAdresse']);
        }
        $this->upd->updAdrEntr($idEntr[0]['IdEntreprise'], $idAdr[0]['IdAdresse']);
        for ($i = 0; $i < count($sect); $i++) {
            if ($sect[$i] != "none") {
                $idSect = $this->upd->getIdSect($sect[$i]);
                $this->upd->addTravailDans($idEntr[0]['IdEntreprise'], $idSect[0]['Id_Secteur']);
            }
        }
        return $this->home->getEntrById($idEntr[0]['IdEntreprise'])[0]['NomEntreprise'];
    }
    public function addEtudiant(int $idPil, string $nomEtud, string $prenomEtud, int $idPromo)
    {
        $pil = $this->home->getPil($idPil);
        $this->upd->createUser($nomEtud.$prenomEtud."@viacesi.fr", $nomEtud);
        $idUser = $this->upd->getLastUser();
        $this->upd->addEtud($nomEtud, $prenomEtud, $idUser[0]['Id_user'], $idPromo, $pil[0]['IdCentre'], $idPil);
    }
    public function addEtudiantCentre(int $idPil, string $nomEtud, string $prenomEtud, int $idPromo, int $centre)
    {
        $this->upd->createUser($nomEtud.$prenomEtud."@viacesi.fr", $nomEtud);
        $idUser = $this->upd->getLastUser();
        $this->upd->addEtud($nomEtud, $prenomEtud, $idUser[0]['Id_user'], $idPromo, $centre, $idPil);
    }
    public function updEtudiant(int $idEtud, string $nom, string $prenom, int $idCentre, int $idPilote, string $promo)
    {
        $idPromo = $this->upd->getIdPromo($promo)[0][0];
        $this->upd->updEtud($idEtud, $nom, $prenom, $idCentre, $idPilote, $idPromo);
    }
    public function delEtud(int $idEtud)
    {
        $this->upd->delEtudiant($idEtud);
    }
    public function addPromo(int $idPil, int $idPromo)
    {
        $this->upd->addPromotion($idPil, $idPromo);
    }
    public function delPromo(int $idPil, int $idPromo)
    {
        $this->upd->delPromotion($idPil, $idPromo);
    }
    public function modifPil(int $idPil, string $nomPil, string $prenomPil, int $idCentre)
    {
        $this->upd->updPil($idPil, $nomPil, $prenomPil, $idCentre);
    }
    public function supprPil(int $idPil)
    {
        $this->upd->delComPil($idPil);
        $this->upd->delPilPromo($idPil);
        $this->upd->updEtudIdPil($idPil);
        $this->upd->delPil($idPil);
    }
    public function addPilote(string $nomPil, string $prenomPil, int $centre, int $isAdmin)
    {
        $this->upd->createUserAdmin($nomPil.$prenomPil."@viacesi.fr", $nomPil, $isAdmin);
        $idUser = $this->upd->getLastUser()[0][0];
        $this->upd->addPil($nomPil, $prenomPil, $idUser, $centre);
    }
}
?>