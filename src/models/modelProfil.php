<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");

class ModelProfil
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
    public function getInfo(int $id)
    {
        return $this->bdd->executeReturn("SELECT etudiant.NomEtudiant, etudiant.PrenomEtudiant, promotion.Promotion, centre.Centre, pilote.NomPilote, pilote.PrenomPilote FROM ((etudiant LEFT JOIN centre on etudiant.IdCentre = centre.IdCentre) LEFT JOIN promotion ON etudiant.IdPromo = promotion.IdPromo) left JOIN pilote on etudiant.IdPilote = pilote.IdPilote where etudiant.IdEtudiant = ?", [$id]);
    }
}
?>