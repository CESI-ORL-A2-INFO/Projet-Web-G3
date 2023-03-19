<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");
class ModelConnexion {
    private $bdd;
    public function __construct()
    {
        $this->bdd = new Database();
    }
    public function __destruct()
    {
        $this->bdd = null;
    }
    public function identifiant(string $mail, string $mdp)
    {
        return $this->bdd->executeReturn("select Id_user from Utilisateur where mail = '$mail' and Mot_de_passe = '$mdp'");
    }
    public function admin(int $id)
    {
        return $this->bdd->executeReturn("select admin from Utilisateur where Id_user = ?", [$id]);
    }
    public function pilote(int $id)
    {
        return $this->bdd->executeReturn("select IdPilote from Pilote where Id_User = ?", [$id]);
    }
    public function idEtud(int $id)
    {
        return $this->bdd->executeReturn("SELECT etudiant.IdEtudiant FROM etudiant WHERE etudiant.Id_user = ?", [$id]);
    }
    public function idPilote(int $id)
    {
        return $this->bdd->executeReturn("SELECT pilote.IdPilote FROM pilote WHERE pilote.Id_user = ?", [$id]);
    }
}
?>