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
        return $this->bdd->execute("update postule set postule.IdStatut = ? where postule.IdEtudiant = ? and postule.IdOffre = ?", [($idStatut + 1), $idEtud, $idOffre]);
    }
}
?>