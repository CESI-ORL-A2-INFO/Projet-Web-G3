<?php
require_once(RACINE_DIR . "/src/lib/bddLib.php");
class modelEtud {
    private $bdd;
    public function __construct()
    {
        $this->bdd = new Database();
    }
}

?>