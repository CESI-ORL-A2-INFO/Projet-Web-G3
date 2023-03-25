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
    public function addComEntrPil(int $idPil, int $note, string $com, int $idEntr)
    {
        $this->bdd->execute("INSERT INTO évalue_pilote VALUES(?, ?, ?, ?)", [$idPil, $note, $com, $idEntr]);
    }
    public function updComEntrPil(int $idPil, int $note, string $com, int $idEntr)
    {
        $this->bdd->execute("UPDATE évalue_pilote SET IdPilote = ?, confiance = ?, commentaire = ?, IdEntreprise = ? WHERE IdPilote = ? AND IdEntreprise = ?", [$idPil, $note, $com, $idEntr, $idPil, $idEntr]);
    }
    public function delComEntrPil(int $idPil, int $idEntr)
    {
        $this->bdd->execute("DELETE FROM évalue_pilote WHERE IdPilote = ? AND IdEntreprise = ?", [$idPil, $idEntr]);
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
        $this->bdd->execute("INSERT INTO enregistre VALUES(?,?)", [$idUser, $idOffre]);
    }
    public function delBook(int $idUser, int $idOffre)
    {
        $this->bdd->execute("DELETE FROM enregistre WHERE enregistre.IdEtudiant = ? AND enregistre.IdOffre = ?", [$idUser, $idOffre]);
    }
    public function addOffre(string $nomOffre, string $duree, float $paie, string $dateDebut, int $nbPlace, string $dateEmi, int $idMail, int $idEntr, string $desc)
    {
        $this->bdd->execute("INSERT INTO offre VALUES(0,?,?,?,?,?,?,?,?,?)",  [$nomOffre, $duree, $paie, $dateDebut, $nbPlace, $dateEmi, $idMail, $idEntr, $desc]);
    }
    public function getAdresse(int $numRue, string $nomRue, int $cp, string $ville, string $pays)
    {
        return $this->bdd->executeReturn("SELECT * FROM adresse WHERE adresse.NumRue = ? AND adresse.NomRue = ? AND adresse.CodePostale = ? AND adresse.Ville = ? AND adresse.Pays = ?", [$numRue, $nomRue, $cp, $ville, $pays]);
    }
    public function addAdresse(int $numRue, string $nomRue, int $cp, string $ville, string $pays)
    {
        $this->bdd->execute("INSERT INTO adresse VALUES(0,?,?,?,?,?)", [$ville, $numRue, $nomRue, $cp, $pays]);
    }
    public function getIdPromo(string $nomPromo)
    {
        return $this->bdd->executeReturn("SELECT promotion.IdPromo FROM promotion WHERE promotion.Promotion = ?", [$nomPromo]);
    }
    public function getIdSect(string $nomSect)
    {
        return $this->bdd->executeReturn("SELECT secteuractivite.Id_Secteur FROM secteuractivite WHERE secteuractivite.Secteur_Activite = ?", [$nomSect]);
    }
    public function addDemPromo(int $idOffre, int $idPromo)
    {
        $this->bdd->execute("INSERT INTO demande_promo VALUES(?,?)", [$idOffre, $idPromo]);
    }
    public function getLastOffre()
    {
        return $this->bdd->executeReturn("SELECT offre.IdOffre FROM offre ORDER BY offre.IdOffre DESC LIMIT 0,1", []);
    }
    public function getIdComp(string $comp)
    {
        return $this->bdd->executeReturn("SELECT compétences.IdComp FROM compétences WHERE compétences.Compétences = ?", [$comp]);
    }
    public function addDemComp(int $idOffre, int $idComp, string $lvl)
    {
        $this->bdd->execute("INSERT INTO demande VALUES(?,?,?)", [$idOffre, $idComp, $lvl]);
    }
    public function getMail(string $email)
    {
        return $this->bdd->executeReturn("SELECT mail.Id_Adresse FROM mail WHERE mail.adresse_mail = ?", [$email]);
    }
    public function addMail(string $email)
    {
        $this->bdd->execute("INSERT INTO mail VALUES(0,?)", [$email]);
    }
    public function delOffre(int $idOffre)
    {
        $this->bdd->execute("DELETE FROM offre WHERE offre.IdOffre = ?", [$idOffre]);
    }
    public function updOffre(string $nomOffre, string $duree, float $paie, string $dateDebut, int $nbPlace, string $dateEmi, int $idMail, int $idEntr, string $desc, int $idOffre)
    {
        $this->bdd->execute("UPDATE offre SET offre.nomOffre = ?, offre.DuréeStage = ?, offre.Paie = ?, offre.DateDebut = ?, offre.NbrePlace = ?, offre.DateEmission = ?, offre.Id_Adresse = ?, offre.IdEntreprise = ?, offre.Description = ? WHERE offre.IdOffre = ?",  [$nomOffre, $duree, $paie, $dateDebut, $nbPlace, $dateEmi, $idMail, $idEntr, $desc, $idOffre]);
    }
    public function getPromo(int $idPromo, int $idOffre)
    {
        return $this->bdd->executeReturn("SELECT * FROM demande_promo WHERE demande_promo.IdPromo = ? AND demande_promo.IdOffre = ?", [$idPromo, $idOffre]);
    }
    public function getSect(int $idSect, int $idEntr)
    {
        return $this->bdd->executeReturn("SELECT * FROM travail_dans WHERE travail_dans.Id_Secteur = ? AND travail_dans.IdEntreprise = ?", [$idSect, $idEntr]);
    }
    public function updDemPromo(int $idOffre, int $idPromo, int $idPromoAncient)
    {
        $this->bdd->execute("UPDATE demande_promo SET demande_promo.IdOffre = ?, demande_promo.IdPromo = ? WHERE demande_promo.IdOffre = ? AND demande_promo.IdPromo = ?", [$idOffre, $idPromo, $idOffre, $idPromoAncient]);
    }
    public function delDemPromo(int $idOffre, int $idPromo)
    {
        $this->bdd->execute("DELETE FROM demande_promo WHERE demande_promo.IdOffre = ? AND demande_promo.IdPromo = ?", [$idOffre, $idPromo]);   
    }
    public function delDemComp(int $idOffre, int $idComp)
    {
        $this->bdd->execute("DELETE FROM demande WHERE demande.IdOffre = ? AND demande.IdComp = ?", [$idOffre, $idComp]);
    }
    public function updDemComp(int $idOffre, int $idComp, int $idCompAncient, string $lvl)
    {
        $this->bdd->execute("UPDATE demande SET demande.IdComp = ?, demande.niveau = ? WHERE demande.IdComp = ? AND demande.IdOffre = ?", [$idComp, $lvl, $idCompAncient, $idOffre]);
    }
    public function getCompOffre(int $idComp, int $idOffre)
    {
        return $this->bdd->executeReturn("SELECT demande.IdOffre, demande.IdComp, demande.niveau, compétences.Compétences FROM demande LEFT JOIN compétences ON demande.IdComp = compétences.IdComp WHERE demande.IdComp = ? AND demande.IdOffre = ?", [$idComp, $idOffre]);
    }
    public function updEntr(int $idEntr, string $nomEntr, int $NbreStagiaire)
    {
        $this->bdd->execute("UPDATE entreprise SET entreprise.NomEntreprise = ?, entreprise.NbreStagiaire = ? WHERE entreprise.IdEntreprise = ?", [$nomEntr, $NbreStagiaire, $idEntr]);
    }
    public function updAdrEntr(int $idEntr, int $idAdr)
    {
        $this->bdd->execute("UPDATE se_situe SET se_situe.IdAdresse = ? WHERE se_situe.IdEntreprise = ?", [$idAdr, $idEntr]);
    }
    public function addTravailDans(int $idEntr, int $idSect)
    {
        $this->bdd->execute("INSERT INTO travail_dans VALUES(?,?)", [$idEntr, $idSect]);
    }
    public function updTravailDans(int $idEntr, int $idSect, int $idSectAncient)
    {
        $this->bdd->execute("UPDATE travail_dans SET travail_dans.IdEntreprise = ?, travail_dans.Id_Secteur = ? WHERE travail_dans.IdEntreprise = ? AND travail_dans.Id_Secteur = ?", [$idEntr, $idSect, $idEntr, $idSectAncient]);
    }
    public function delTravailDans(int $idEntr, int $idSect)
    {
        $this->bdd->execute("DELETE FROM travail_dans WHERE travail_dans.IdEntreprise = ? AND travail_dans.Id_Secteur = ?", [$idEntr, $idSect]);   
    }
    public function delEntr(int $idEntr)
    {
        $this->bdd->execute("DELETE FROM entreprise WHERE idEntreprise = ?", [$idEntr]);
    }
    public function delTravailDansIdEntr(int $idEntr)
    {
        $this->bdd->execute("DELETE FROM travail_dans WHERE idEntreprise = ?", [$idEntr]);
    }
    public function delSeSitue(int $idEntr)
    {
        $this->bdd->execute("DELETE FROM se_situe WHERE idEntreprise = ?", [$idEntr]);
    }
    public function delComEntrByIdEntr($idEntr)
    {
        $this->bdd->execute("DELETE FROM évalue_pilote WHERE IdEntreprise = ?", [$idEntr]);
        $this->bdd->execute("DELETE FROM évalue_stagiaire WHERE IdEntreprise = ?", [$idEntr]);
    }
    public function delOffreByIdEntr(int $idEntr) 
    {
        $this->bdd->execute("DELETE FROM offre WHERE IdEntreprise = ?", [$idEntr]);
    }
    public function addEntr(string $nomEntr, int $NbreStagiaire)
    {
        $this->bdd->execute("INSERT INTO entreprise VALUES(0,?,?)", [$nomEntr, $NbreStagiaire]);
    }
    public function getEntrIdLast()
    {
        return $this->bdd->executeReturn("SELECT entreprise.IdEntreprise FROM entreprise ORDER BY entreprise.IdEntreprise DESC LIMIT 0,1", []);
    }
    public function createUser(string $nomUser, string $prenomUser)
    {
        $this->bdd->execute("INSERT INTO utilisateur VALUES(0,?,?,0)", [$nomUser, $prenomUser]);
    }
    public function getLastUser()
    {
        return $this->bdd->executeReturn("SELECT utilisateur.Id_user FROM utilisateur ORDER BY Id_user DESC LIMIT 0,1", []);
    }
    public function addEtud(string $nom, string $prenom, int $idUser, int $idPromo, int $idCentre, int $idPil)
    {
        $this->bdd->execute("INSERT INTO etudiant VALUES(0,?,?,?,?,?,?)", [$nom, $prenom, $idUser, $idPromo, $idCentre, $idPil]);
    }

    public function updEtud(int $idEtud, string $nom, string $prenom, int $idCentre, int $idPilote, int $idPromo)
    {
        $this->bdd->execute("UPDATE etudiant SET NomEtudiant = ?, PrenomEtudiant = ?, IdPromo = ?, IdCentre = ?, IdPilote = ? WHERE IdEtudiant = ?", [$nom, $prenom, $idPromo, $idCentre, $idPilote, $idEtud]); 
    }
    public function delEtudiant(int $idEtud)
    {
        $this->bdd->execute("DELETE FROM évalue_stagiaire WHERE IdEtudiant = ?", [$idEtud]);
        $this->bdd->execute("DELETE FROM postule WHERE IdEtudiant = ?", [$idEtud]);
        $this->bdd->execute("DELETE FROM enregistre WHERE IdEtudiant = ?", [$idEtud]);
        $this->bdd->execute("DELETE FROM etudiant WHERE IdEtudiant = ?", [$idEtud]);
    }
    public function addPromotion(int $idPil, int $idPromo)
    {
        $this->bdd->execute("INSERT INTO pilote_promo VALUES(?,?)", [$idPil,$idPromo]);
    }
    public function delPromotion(int $idPil, int $idPromo)
    {
        $this->bdd->execute("DELETE FROM pilote_promo WHERE IdPilote = ? AND IdPromo = ?", [$idPil, $idPromo]);
    }
}
?>