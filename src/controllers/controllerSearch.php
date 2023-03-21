<?php
require(RACINE_DIR . "/src/lib/appSmartyLib.php");
require_once(RACINE_DIR . "/src/models/modelSearch.php");

class ControllerSearch{
    private $tpl;
    private $search;
    
    public function __construct(){
        $this->tpl = new AppSmarty();
        $this->search = new modelSearch();
    }
}
?>