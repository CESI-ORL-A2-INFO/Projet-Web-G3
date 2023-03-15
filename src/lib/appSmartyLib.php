<?php
define('APP_DIR', __DIR__ . "\\..\\"); // constante APP_DIR : répertoire de l'application
require('./src/lib/smarty-4.2.1/libs/Smarty.class.php'); //A modifier*
class AppSmarty extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(APP_DIR . 'templates');
        $this->setCompileDir(APP_DIR . 'templates_c');
        $this->setConfigDir(APP_DIR . 'configs');
        $this->setCacheDir(APP_DIR . '.cache');
    }
}
?>