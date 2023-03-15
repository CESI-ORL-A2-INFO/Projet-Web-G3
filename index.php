<?php
define('RACINE_DIR', __DIR__);
require_once("./src/controllers/controller.php");
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = (string) strip_tags($_GET['p']);
} else {
    $p = null;
}

$redirection = new Controller();

switch($p){
    default:
        $redirection->connexion();
    case 'home':
        $redirection->home();
}
?>