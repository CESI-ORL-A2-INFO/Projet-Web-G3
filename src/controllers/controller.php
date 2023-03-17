<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");

class Controller {
    private $tpl;
    public function __construct()
    {
        $this->tpl = new AppSmarty();
    }
    public function home() // waiting
    {
        $this->tpl->display('home.tpl');
    }
    public function connexion() // finished
    {
        $this->tpl->display('connexion.tpl');
    }
    public function search() // not started
    {
        $this->tpl->display('search.tpl');
    }
    public function profilEtudPerm() // waiting
    {
        $this->tpl->display('profilEtudPerm.tpl');
    }
    public function profilPilPerm() // waiting
    {
        $this->tpl->display('profilPilPerm.tpl');
    }
    public function homePerm() // not started
    {
        $this->tpl->display('homePerm.tpl');
    }
    public function offrePerm() // not started
    {
        $this->tpl->display('offrePerm.tpl');
    }
    public function profilEntrPerm() // not started
    {
        $this->tpl->display('profilEntrPerm.tpl');
    }
    public function profilEntr() // not started
    {
        $this->tpl->display('profilEntr.tpl');
    }
    public function profilPilote() // waiting
    {
        $this->tpl->display('profilPilote.tpl');
    }
    public function suivi() // not started
    {
        $this->tpl->display('suivi.tpl');
    }
    public function profilEtud() // waiting
    {
        $this->tpl->display('profilEtud.tpl');
    }
    public function offre() // not started
    {
        $this->tpl->display('offre.tpl');
    }
    public function promotionPerm() // not started
    {
        $this->tpl->display('promotionPerm.tpl');
    }
    public function promotion() //not started
    {
        $this->tpl->display('promotion.tpl');
    }
    public function homePilote() // waiting
    {
        $this->tpl->display('homePilote.tpl');
    }
    public function searchPerm() // not started
    {
        $this->tpl->display('searchPerm.tpl');
    }
}

?>