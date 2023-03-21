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
    public function Search(String $NomOffre)
    {
        $this->bdd->execute("SELECT IdOffre FROM OFFRE WHERE nomOffre LIKE '{%?%}'",[$NomOffre]);
    }
    public function SearchPromo(String $NomOffre, String $Promo)
    {
        $this->bdd->execute("SELECT IdOffre FROM Offre AS O INNER JOIN demande_promo AS D ON O.IdOffre = D.IdOffre INNER JOIN Promotion AS P ON D.IdPromo = P.IdPromo WHERE nomOffre LIKE '%?%' AND Promotion = '?'",[$NomOffre, $Promo]);
    }
    public function SearchComp(String $NomOffre, String $Comp)
    {
        $this->bdd->execute("SELECT O.IdOffre FROM Offre AS O INNER JOIN demande AS D ON O.IdOffre = D.IdOffre INNER JOIN compétences AS C ON D.IdComp = C.IdComp WHERE nomOffre LIKE '%?%' AND compétences = '?'",[$NomOffre, $Comp]);
    }
    public function SearchSecteur(String $NomOffre, String $Secteur)
    {
        $this->bdd->execute("SELECT IdOffre FROM OFFRE INNER JOIN travail_dans ON Offre.IdEntreprise = travail_dans.IdEntreprise INNER JOIN secteuractivite ON travail_dans.Id_Secteur = secteuractivite.Id_Secteur WHERE nomOffre LIKE '%?%' AND Secteur_Activite = '?'",[$NomOffre,$Secteur]);
    }
    public function SearchEntreprise(String $NomEntreprise)
    {
        $this->bdd->execute("SELECT IdEntreprise FROM entreprise WHERE nomEntreprise LIKE '%?%''",[$NomEntreprise]);
    }
}
?>