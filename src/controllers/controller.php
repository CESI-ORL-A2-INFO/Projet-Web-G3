<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");

class Controller {
    private $tpl;
    public function __construct()
    {
        $this->tpl = new AppSmarty();
    }
    public function home()
    {
        $this->tpl->display('home.tpl');
    }
    public function connexion()
    {
        $this->tpl->display('connexion.tpl');
    }
    public function search()
    {
        $this->tpl->display('search.tpl');
    }
    public function profilEtudPerm()
    {
        $this->tpl->display('profilEtudPerm.tpl');
    }
    public function ProfilPilPerm()
    {
        $this->tpl->display('profilPilPerm.tpl');
    }
    public function homePerm()
    {
        $this->tpl->display('homePerm.tpl');
    }
    public function offrePerm()
    {
        $this->tpl->display('offrePerm.tpl');
    }
    public function profilEntrPerm()
    {
        $this->tpl->display('profilEntrPerm.tpl');
    }
    public function profilEntr()
    {
        $this->tpl->display('profilEntr.tpl');
    }
    public function profilPilote()
    {
        $this->tpl->display('profilPilote.tpl');
    }
    public function suiviEtud()
    {
        $this->tpl->display('suiviEtud.tpl');
    }
    public function profilEtud()
    {
        $this->tpl->display('profilEtud.tpl');
    }
    public function offre()
    {
        $this->tpl->display('offre.tpl');
    }
    public function promotionPerm()
    {
        $this->tpl->display('promotionPerm.tpl');
    }
    public function promotion()
    {
        $this->tpl->display('promotion.tpl');
    }
}

?>