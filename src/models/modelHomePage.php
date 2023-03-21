<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");

class ModelHomePage
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
    public function getOffrePage(int $idOffre)
    {
        return $this->bdd->executeReturn("select offre.IdOffre, offre.nomOffre, offre.DuréeStage, offre.DateDebut, offre.DateEmission, offre.Description from offre WHERE offre.IdOffre = ?", [$idOffre]);
    }
    public function getIdLastOffre(int $nbOffre)
    {
        return $this->bdd->executeReturn("select offre.IdOffre from offre ORDER BY offre.DateEmission desc LIMIT " . $nbOffre . " ");
    }
    public function getOffrePage6()
    {
        return $this->bdd->executeReturn("select offre.IdOffre, offre.nomOffre, offre.DuréeStage from offre ORDER BY offre.IdOffre desc LIMIT 0,6");
    }
    public function getVille(int $id)
    {
        return $this->bdd->executeReturn("select adresse.Ville from offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise left join se_situe on entreprise.IdEntreprise = se_situe.IdEntreprise left join adresse on se_situe.IdAdresse = adresse.IdAdresse where offre.IdOffre = ?", [$id]);
    }
    public function getEntr(int $id)
    {
        return $this->bdd->executeReturn("select entreprise.NomEntreprise from offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise where offre.IdOffre = ?", [$id]);
    }
    public function getComp(int $id)
    {
        return $this->bdd->executeReturn("select offre.IdOffre, compétences.Compétences, demande.niveau from offre left join demande on offre.IdOffre = demande.IdOffre left join compétences on demande.IdComp = compétences.IdComp where offre.IdOffre = ?", [$id]);
    }
    public function getOffre(int $idOffre)
    {
        return $this->bdd->executeReturn("select offre.IdOffre, offre.nomOffre, offre.DuréeStage, offre.Paie, offre.DateDebut, offre.NbrePlace, offre.DateEmission, offre.Description, mail.adresse_mail, entreprise.NomEntreprise from (offre left join mail on offre.Id_Adresse = mail.Id_Adresse) left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise WHERE offre.IdOffre = ?", [$idOffre]);
    }
    public function getCompetences(int $offre)
    {
        return $this->bdd->executeReturn("SELECT compétences.Compétences, demande.niveau FROM (offre left join demande on offre.IdOffre = demande.IdOffre) INNER JOIN compétences on demande.IdComp = compétences.IdComp where offre.IdOffre = ?", [$offre]);
    }
    public function getAdresse(int $offre)
    {
        return $this->bdd->executeReturn("SELECT adresse.NumRue, adresse.NomRue, adresse.Ville, adresse.CodePostale, adresse.Pays FROM ((offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise) INNER JOIN se_situe on entreprise.IdEntreprise = se_situe.IdEntreprise) INNER JOIN adresse on se_situe.IdAdresse = adresse.IdAdresse where offre.IdOffre = ?", [$offre]);
    }
    public function getPromo(int $offre)
    {
        return $this->bdd->executeReturn("SELECT promotion.Promotion FROM (offre left join demande_promo on offre.IdOffre = demande_promo.IdOffre) INNER JOIN promotion on demande_promo.IdPromo = promotion.IdPromo where offre.IdOffre = ?", [$offre]);
    }
    public function getSecteur(int $offre)
    {
        return $this->bdd->executeReturn("SELECT secteuractivite.Secteur_Activite FROM ((offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise) INNER JOIN travail_dans on entreprise.IdEntreprise = travail_dans.IdEntreprise) INNER JOIN secteuractivite on travail_dans.Id_Secteur = secteuractivite.Id_Secteur where offre.IdOffre = ?", [$offre]);
    }
    public function getStatutEtud(int $idOffre, int $id)
    {
        return $this->bdd->executeReturn("SELECT statutoffre.statut FROM (postule LEFT JOIN statutoffre on postule.IdStatut = statutoffre.IdStatut) WHERE postule.IdEtudiant = ? and postule.IdOffre = ?", [$id, $idOffre]);
    }
    public function getStatut()
    {
        return $this->bdd->executeReturn("SELECT statutoffre.statut from statutoffre");
    }
    public function getNbOffre()
    {
        return $this->bdd->executeReturn("SELECT COUNT(IdOffre) from offre");
    }
}

?>