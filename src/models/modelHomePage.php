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
        return $this->bdd->executeReturn("SELECT offre.IdOffre, offre.nomOffre, offre.DuréeStage, offre.DateDebut, offre.Paie, offre.NbrePlace, offre.DateEmission, offre.Description, entreprise.NomEntreprise, mail.adresse_mail FROM offre LEFT JOIN entreprise ON offre.IdEntreprise = entreprise.IdEntreprise LEFT JOIN mail ON offre.Id_Adresse =  mail.Id_Adresse WHERE offre.IdOffre = ?", [$idOffre]);
    }
    public function getAllOffre()
    {
        return $this->bdd->executeReturn("SELECT offre.IdOffre, offre.nomOffre, entreprise.NomEntreprise, offre.Description FROM offre LEFT JOIN entreprise ON offre.IdEntreprise = entreprise.IdEntreprise", []);
    }
    public function getIdLastOffre(int $nbOffre, int $offset)
    {
        return $this->bdd->executeReturn("select offre.IdOffre from offre ORDER BY offre.DateEmission desc LIMIT " . $offset . "," . $nbOffre . " ");
    }
    public function getIdAllLastOffre()
    {
        return $this->bdd->executeReturn("select offre.IdOffre from offre ORDER BY offre.DateEmission desc", []);
    }
    public function getOffrePage6()
    {
        return $this->bdd->executeReturn("select offre.IdOffre, offre.nomOffre, offre.DuréeStage from offre ORDER BY offre.dateEmission desc LIMIT 0,6");
    }
    public function getVille(int $id)
    {
        return $this->bdd->executeReturn("select adresse.Ville from offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise left join se_situe on entreprise.IdEntreprise = se_situe.IdEntreprise left join adresse on se_situe.IdAdresse = adresse.IdAdresse where offre.IdOffre = ?", [$id]);
    }
    public function getEntr(int $id)
    {
        return $this->bdd->executeReturn("select entreprise.NomEntreprise from offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise where offre.IdOffre = ?", [$id]);
    }
    public function getEntrByName(string $nom)
    {
        return $this->bdd->executeReturn("SELECT entreprise.IdEntreprise, entreprise.NbreStagiaire, entreprise.NomEntreprise, adresse.NumRue, adresse.NomRue, adresse.Ville, adresse.CodePostale, adresse.Pays FROM entreprise LEFT JOIN se_situe ON entreprise.IdEntreprise = se_situe.IdEntreprise LEFT JOIN adresse ON se_situe.IdAdresse = adresse.IdAdresse WHERE entreprise.NomEntreprise = ?", [$nom]);
    }
    public function getEntrById(int $idEntr)
    {
        return $this->bdd->executeReturn("SELECT entreprise.IdEntreprise, entreprise.NbreStagiaire, entreprise.NomEntreprise, adresse.NumRue, adresse.NomRue, adresse.Ville, adresse.CodePostale, adresse.Pays FROM entreprise LEFT JOIN se_situe ON entreprise.IdEntreprise = se_situe.IdEntreprise LEFT JOIN adresse ON se_situe.IdAdresse = adresse.IdAdresse WHERE entreprise.IdEntreprise = ?", [$idEntr]);
    }
    public function getComp(int $id)
    {
        return $this->bdd->executeReturn("select offre.IdOffre, compétences.Compétences, demande.niveau, compétences.IdComp from offre left join demande on offre.IdOffre = demande.IdOffre left join compétences on demande.IdComp = compétences.IdComp where offre.IdOffre = ?", [$id]);
    }
    public function getOffre(int $idOffre)
    {
        return $this->bdd->executeReturn("select offre.IdOffre, offre.nomOffre, offre.DuréeStage, offre.Paie, offre.DateDebut, offre.NbrePlace, offre.DateEmission, offre.Description, mail.adresse_mail, entreprise.NomEntreprise from (offre left join mail on offre.Id_Adresse = mail.Id_Adresse) left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise WHERE offre.IdOffre = ?", [$idOffre]);
    }
    public function getCompetences(int $offre)
    {
        return $this->bdd->executeReturn("SELECT compétences.IdComp, compétences.Compétences, demande.niveau FROM (offre left join demande on offre.IdOffre = demande.IdOffre) INNER JOIN compétences on demande.IdComp = compétences.IdComp where offre.IdOffre = ?", [$offre]);
    }
    public function getAdresse(int $offre)
    {
        return $this->bdd->executeReturn("SELECT adresse.NumRue, adresse.NomRue, adresse.Ville, adresse.CodePostale, adresse.Pays FROM ((offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise) INNER JOIN se_situe on entreprise.IdEntreprise = se_situe.IdEntreprise) INNER JOIN adresse on se_situe.IdAdresse = adresse.IdAdresse where offre.IdOffre = ?", [$offre]);
    }
    public function getPromo(int $offre)
    {
        return $this->bdd->executeReturn("SELECT promotion.IdPromo, promotion.Promotion FROM (offre left join demande_promo on offre.IdOffre = demande_promo.IdOffre) INNER JOIN promotion on demande_promo.IdPromo = promotion.IdPromo where offre.IdOffre = ?", [$offre]);
    }
    public function getSecteur(int $offre)
    {
        return $this->bdd->executeReturn("SELECT secteuractivite.Secteur_Activite FROM ((offre left join entreprise on offre.IdEntreprise = entreprise.IdEntreprise) INNER JOIN travail_dans on entreprise.IdEntreprise = travail_dans.IdEntreprise) INNER JOIN secteuractivite on travail_dans.Id_Secteur = secteuractivite.Id_Secteur where offre.IdOffre = ?", [$offre]);
    }
    public function getSecteurEntr(int $idEntr)
    {
        return $this->bdd->executeReturn("SELECT secteuractivite.Secteur_Activite, secteuractivite.Id_Secteur FROM travail_dans LEFT JOIN secteuractivite ON travail_dans.Id_Secteur = secteuractivite.Id_Secteur WHERE travail_dans.IdEntreprise = ?", [$idEntr]);
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
    public function getSuivi(int $id)
    {
        return $this->bdd->executeReturn("SELECT enregistre.IdOffre FROM enregistre WHERE enregistre.IdEtudiant = ?", [$id]);
    }
    public function getIdPostule(int $idUser)
    {
        return $this->bdd->executeReturn("SELECT postule.IdOffre FROM postule WHERE postule.IdEtudiant = ?", [$idUser]);
    }
    public function getComEtud(int $id)
    {
        return $this->bdd->executeReturn("SELECT etudiant.NomEtudiant, etudiant.PrenomEtudiant, évalue_stagiaire.note, évalue_stagiaire.commentaire FROM évalue_stagiaire RIGHT JOIN etudiant ON évalue_stagiaire.IdEtudiant = etudiant.IdEtudiant WHERE évalue_stagiaire.IdEntreprise = ?", [$id]);
    }
    public function getComEtudById(int $idCom, int $idUser)
    {
        return $this->bdd->executeReturn("SELECT évalue_stagiaire.note, évalue_stagiaire.commentaire FROM évalue_stagiaire RIGHT JOIN etudiant ON évalue_stagiaire.IdEtudiant = etudiant.IdEtudiant WHERE évalue_stagiaire.IdEntreprise = ? AND évalue_stagiaire.IdEtudiant = ?", [$idCom, $idUser]);
    }
    public function getComPilote(int $id)
    {
        return $this->bdd->executeReturn("SELECT pilote.NomPilote, pilote.PrenomPilote, évalue_pilote.confiance, évalue_pilote.commentaire FROM évalue_pilote RIGHT JOIN pilote ON évalue_pilote.IdPilote = pilote.IdPilote WHERE évalue_pilote.IdEntreprise = ?", [$id]);
    }
    public function getComPilById(int $idCom, int $idUser)
    {
        return $this->bdd->executeReturn("SELECT évalue_pilote.confiance, évalue_pilote.commentaire FROM évalue_pilote RIGHT JOIN pilote ON évalue_pilote.IdPilote = pilote.IdPilote WHERE évalue_Pilote.IdEntreprise = ? AND évalue_pilote.IdPilote = ?", [$idCom, $idUser]);
    }
    public function getOffreEntr(int $idEntr)
    {
        return $this->bdd->executeReturn("SELECT offre.IdOffre FROM offre WHERE offre.IdEntreprise = ?", [$idEntr]);
    }
    public function getAllComp()
    {
        return $this->bdd->executeReturn("SELECT compétences.IdComp, compétences.Compétences FROM compétences", []);
    }
    public function getAllNomEntr()
    {
        return $this->bdd->executeReturn("SELECT entreprise.IdEntreprise ,entreprise.NomEntreprise, entreprise.NbreStagiaire FROM entreprise", []);
    }
    public function getAllPromo()
    {
        return $this->bdd->executeReturn("SELECT promotion.IdPromo, promotion.Promotion FROM promotion", []);
    }
    public function getAllSect()
    {
        return $this->bdd->executeReturn("SELECT secteuractivite.Secteur_Activite FROM secteuractivite", []);
    }
    public function getPil(int $idPil)
    {
        return $this->bdd->executeReturn("SELECT * FROM pilote WHERE pilote.IdPilote = ?", [$idPil]);
    }
    public function getNomPromo(int $idPromo)
    {
        return $this->bdd->executeReturn("SELECT promotion.Promotion FROM promotion WHERE promotion.IdPromo = ?", [$idPromo]);
    }
    public function getEtudByCentrePromo(int $idCentr, int $idPromo)
    {
        return $this->bdd->executeReturn("SELECT etudiant.IdEtudiant, etudiant.NomEtudiant, etudiant.PrenomEtudiant FROM etudiant WHERE etudiant.IdCentre = ? AND etudiant.IdPromo = ?", [$idCentr, $idPromo]);
    }
    public function getAllCentre()
    {
        return $this->bdd->executeReturn("SELECT * FROM centre", []);
    }
    public function getAllPilote()
    {
        return $this->bdd->executeReturn("SELECT pilote.IdPilote, pilote.NomPilote, pilote.PrenomPilote, centre.Centre FROM pilote LEFT JOIN centre ON pilote.IdCentre = centre.IdCentre");
    }
    public function getAllEtud()
    {
        return $this->bdd->executeReturn("SELECT etudiant.IdEtudiant, etudiant.NomEtudiant, etudiant.PrenomEtudiant, promotion.Promotion, centre.Centre FROM etudiant LEFT JOIN promotion ON etudiant.IdPromo = promotion.IdPromo LEFT JOIN centre ON etudiant.IdCentre = centre.IdCentre", []);
    }
    public function getCentreByName(string $nomCentre)
    {
        return $this->bdd->executeReturn("SELECT centre.IdCentre FROM centre WHERE centre.Centre = ?", [$nomCentre]);
    }
}

?>