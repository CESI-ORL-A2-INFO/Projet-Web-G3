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
    public function getInfoEtud(int $id)
    {
        return $this->bdd->executeReturn("SELECT etudiant.NomEtudiant, etudiant.PrenomEtudiant, promotion.Promotion, centre.Centre, pilote.NomPilote, pilote.PrenomPilote FROM ((etudiant LEFT JOIN centre on etudiant.IdCentre = centre.IdCentre) LEFT JOIN promotion ON etudiant.IdPromo = promotion.IdPromo) left JOIN pilote on etudiant.IdPilote = pilote.IdPilote where etudiant.IdEtudiant = ?", [$id]);
    }
    public function getInfoPil(int $id)
    {
        return $this->bdd->executeReturn("SELECT pilote.NomPilote, pilote.PrenomPilote, centre.Centre FROM pilote LEFT JOIN centre ON pilote.IdCentre = centre.IdCentre WHERE pilote.IdPilote = ?", [$id]);
    }
    public function getPromoPil(int $id)
    {
        return $this->bdd->executeReturn("SELECT promotion.IdPromo, promotion.Promotion FROM pilote LEFT JOIN pilote_promo ON pilote.IdPilote = pilote_promo.IdPilote LEFT JOIN promotion ON pilote_promo.IdPromo = promotion.IdPromo WHERE pilote.IdPilote = ?", [$id]);
    }
    public function getPasPromo(int $idUser)
    {
        return $this->bdd->executeReturn("SELECT promotion.IdPromo, promotion.Promotion FROM promotion LEFT JOIN pilote_promo ON promotion.IdPromo = pilote_promo.IdPromo LEFT JOIN pilote ON pilote_promo.IdPilote = pilote.IdPilote WHERE promotion.IdPromo NOT IN (SELECT promotion.IdPromo FROM promotion INNER JOIN pilote_promo ON promotion.IdPromo = pilote_promo.IdPromo WHERE pilote_promo.IdPilote = ?)", [$idUser]);
    }
}
?>