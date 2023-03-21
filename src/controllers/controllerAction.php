<?php
require_once(RACINE_DIR . "/src/models/modelUpdate.php");
class ControllerAction
{
    private $upd;
    public function __construct()
    {
        $this->upd = new ModelUpdate();
    }
    public function __destruct()
    {
        $this->upd = null;
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
}
?>