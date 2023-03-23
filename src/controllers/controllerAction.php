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
                    $this->upd->addDemComp($idOffre, $idComp[0]['IdComp'], $idComp[0]['lvl']);
                } else if ($comp[$i]['comp'] == "none" && isset($currentComp[$i]['Compétences'])){
                    print_r('del');
                    $this->upd->delDemComp($idOffre, $currentComp[$i]['IdComp']);
                } else if (isset($currentComp[$i]['Compétences']) && $comp[$i]['comp'] != $currentComp[$i]['Compétences']) {
                    if ($this->upd->getComp($currentComp[$i]['IdComp'], $idComp[0]['IdComp']) == array()) {
                        $this->upd->addDemComp($idOffre, $idComp[0]['IdComp'], $idComp[0]['lvl']);
                    } else {
                        $this->upd->updDemComp($idOffre, $idComp[0]['IdComp'], $currentComp[$i]['IdComp'], $idComp[0]['lvl']);
                    }
                }
            }
        }
    }
}
?>