<?php
require_once(RACINE_DIR . "/src/models/modelConnexion.php");
require_once(RACINE_DIR . "/src/models/modelHomePage.php");

class ControllerBDD {

    private $con;
    private $home;
    public function __construct()
    {
        $this->con = new ModelConnexion();
        $this->home = new ModelHomePage();
    }
    public function __destruct()
    {
        $this->con = null;
    }
    public function verifConnexion(string $mail, string $mdp)
    {
        $id = $this->con->identifiant($mail, $mdp);
        if ($id != null){
            return $id[0][0];
        }
        return false;
    }
    public function isAdmin(int $id){
        return $this->con->admin($id)[0][0];
    }
    public function isPilote(int $id)
    {
        if ($this->con->pilote($id) != null){
            return true;
        }
        return false;
    }
    public function getIDEtud(int $id)
    {
        return $this->con->idEtud($id);
    }
    public function getIdPilote(int $id)
    {
        return $this->con->idPilote($id);
    }

}

?>