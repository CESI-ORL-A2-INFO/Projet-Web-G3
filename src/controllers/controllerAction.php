<?php
require_once(RACINE_DIR . "/src/models/modelUpdate.php");
class ControllerAction
{

    private $upd;
    public function __construct()
    {
        $this->upd = new ModelUpdate();
    }
    public function __destruct()
    {
        $this->upd = null;
    }
    public function changeStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->upd->updStatutOffre($idEtud, $idOffre, $idStatut);
    }
    public function addStatutOffre(int $idEtud, int $idOffre, int $idStatut)
    {
        $this->upd->addStatutOffre($idEtud, $idOffre, $idStatut);
    }
}
?>