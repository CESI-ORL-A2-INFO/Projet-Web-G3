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
}
?>