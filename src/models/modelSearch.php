<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");

class modelSearch
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
    public function Search(String $NomOffre, int $offset, int $nbParPage)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM OFFRE WHERE nomOffre LIKE ? LIMIT {$offset},{$nbParPage}",[("%{$NomOffre}%")]);
    }
    public function SearchPromo(String $NomOffre, String $Promo, int $offset, int $nbParPage)
    {
        return $this->bdd->executeReturn("SELECT O.IdOffre FROM Offre AS O INNER JOIN demande_promo AS D ON O.IdOffre = D.IdOffre INNER JOIN Promotion AS P ON D.IdPromo = P.IdPromo WHERE nomOffre LIKE ? AND Promotion = ? LIMIT {$offset},{$nbParPage}",[("%{$NomOffre}%"), $Promo]);
    }
    public function SearchComp(String $NomOffre, String $Comp, int $offset, int $nbParPage)
    {
       return $this->bdd->executeReturn("SELECT O.IdOffre FROM Offre AS O INNER JOIN demande AS D ON O.IdOffre = D.IdOffre INNER JOIN compétences AS C ON D.IdComp = C.IdComp WHERE nomOffre LIKE ? AND compétences = ? LIMIT {$offset},{$nbParPage}",[("%{$NomOffre}%"), $Comp]);
    }
    public function SearchSecteur(String $NomOffre, String $Secteur, int $offset, int $nbParPage)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM OFFRE INNER JOIN travail_dans ON Offre.IdEntreprise = travail_dans.IdEntreprise INNER JOIN secteuractivite ON travail_dans.Id_Secteur = secteuractivite.Id_Secteur WHERE nomOffre LIKE ? AND Secteur_Activite = ? LIMIT {$offset},{$nbParPage}",[("%{$NomOffre}%"),$Secteur]);
    }
    public function SearchEntreprise(String $NomEntreprise, string $nomFiltre, int $offset, int $nbParPage)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM offre LEFT JOIN entreprise ON offre.IdEntreprise = entreprise.IdEntreprise WHERE entreprise.NomEntreprise LIKE ? AND offre.nomOffre LIKE ? LIMIT {$offset},{$nbParPage}", [("%{$nomFiltre}%"), ("%{$NomEntreprise}%")]);
    }
    public function SearchAll(String $NomOffre)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM OFFRE WHERE nomOffre LIKE ?", [("%{$NomOffre}%")]);
    }
    public function SearchPromoAll(String $NomOffre, String $Promo)
    {
        return $this->bdd->executeReturn("SELECT O.IdOffre FROM Offre AS O INNER JOIN demande_promo AS D ON O.IdOffre = D.IdOffre INNER JOIN Promotion AS P ON D.IdPromo = P.IdPromo WHERE nomOffre LIKE ? AND Promotion = ?",[("%{$NomOffre}%"), $Promo]);
    }
    public function SearchCompAll(String $NomOffre, String $Comp)
    {
       return $this->bdd->executeReturn("SELECT O.IdOffre FROM Offre AS O INNER JOIN demande AS D ON O.IdOffre = D.IdOffre INNER JOIN compétences AS C ON D.IdComp = C.IdComp WHERE nomOffre LIKE ? AND compétences = ?",[("%{$NomOffre}%"), $Comp]);
    }
    public function SearchSecteurAll(String $NomOffre, String $Secteur)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM OFFRE INNER JOIN travail_dans ON Offre.IdEntreprise = travail_dans.IdEntreprise INNER JOIN secteuractivite ON travail_dans.Id_Secteur = secteuractivite.Id_Secteur WHERE nomOffre LIKE ? AND Secteur_Activite = ?",[("%{$NomOffre}%"),$Secteur]);
    }
    public function SearchEntrepriseAll(String $NomEntreprise, string $nomFiltre)
    {
        return $this->bdd->executeReturn("SELECT IdOffre FROM offre LEFT JOIN entreprise ON offre.IdEntreprise = entreprise.IdEntreprise WHERE entreprise.NomEntreprise LIKE ? AND offre.nomOffre LIKE ?", [("%{$nomFiltre}%"), ("%{$NomEntreprise}%")]);
    }
}
?>