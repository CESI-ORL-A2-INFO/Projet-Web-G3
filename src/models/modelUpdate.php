<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");
class ModelUpdate
{
    private $bdd;
    public function __construct()
    {
        $this->bdd = new Database();
    }
    public function __destruct()
    {
        $this->bdd = null;
    }
    public function updStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->bdd->execute("update postule set postule.IdStatut = ? where postule.IdEtudiant = ? and postule.IdOffre = ?", [($idStatut + 1), $idEtud, $idOffre]);
    }
    public function addStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->bdd->execute("insert into postule values(?,?,?) ", [$idEtud, $idOffre, $idStatut + 1]);
    }
    public function addComEntr(int $idEtud, int $note, string $com, int $idEntr)
    {
        $this->bdd->execute("INSERT INTO évalue_stagiaire VALUES(?, ?, ?, ?)", [$idEtud, $note, $com, $idEntr]);
    }
    public function updComEntr(int $idEtud, int $note, string $com, int $idEntr)
    {
        $this->bdd->execute("UPDATE évalue_stagiaire SET IdEtudiant = ?, note = ?, commentaire = ?, IdEntreprise = ? WHERE IdEtudiant = ? AND IdEntreprise = ?", [$idEtud, $note, $com, $idEntr, $idEtud, $idEntr]);
    }
    public function delComEntr(int $idEtud, int $idEntr)
    {
        $this->bdd->execute("DELETE FROM évalue_stagiaire WHERE IdEtudiant = ? AND IdEntreprise = ?", [$idEtud, $idEntr]);
    }
    public function getIdEntr(string $nomEntr)
    {
        return $this->bdd->executeReturn("SELECT entreprise.IdEntreprise FROM entreprise WHERE entreprise.NomEntreprise = ?", [$nomEntr]);
    }
    public function getBook(int $idUser, int $idOffre)
    {
        return $this->bdd->executeReturn("SELECT * FROM enregistre WHERE enregistre.IdEtudiant = ? AND enregistre.IdOffre = ?", [$idUser, $idOffre]);
    }
    public function addBook(int $idUser, int $idOffre)
    {
        $this->bdd->executeReturn("INSERT INTO enregistre VALUES(?,?)", [$idUser, $idOffre]);
    }
    public function delBook(int $idUser, int $idOffre)
    {
        $this->bdd->executeReturn("DELETE FROM enregistre WHERE enregistre.IdEtudiant = ? AND enregistre.IdOffre = ?", [$idUser, $idOffre]);
    }
}
?>