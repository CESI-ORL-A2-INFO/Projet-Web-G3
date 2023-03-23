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
            if ($promo[$i] != null) {
                if ($promo[$i] != $currentPromo[$i]['Promotion']) {
                    $idPromo = $this->upd->getIdPromo($promo[$i]);
                    $this->upd->addDemPromo($idOffre, $idPromo[0]['IdPromo']);
                }
            }
        }
        $currentComp = $this->home->getComp($idOffre);
        for ($i = 0; $i < count($comp); $i++) {
            if ($comp[$i]['comp'] != "") {
                if ($comp[$i]['comp'] != $currentComp[$i]['Compétences']) {
                    $idComp = $this->upd->getIdComp($comp[$i]['comp']);
                    $this->upd->addDemComp($idOffre, $idComp[0]['IdComp'], $comp[$i]['lvl']);
                }
            }
        }
    }
}
?>