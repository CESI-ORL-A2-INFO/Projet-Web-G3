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
}

?>