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
}
?>