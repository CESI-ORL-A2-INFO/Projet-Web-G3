<?php
define('RACINE_DIR', __DIR__);
require_once(RACINE_DIR . "/src/controllers/controller.php");
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = (string) strip_tags($_GET['p']);
} else {
    $p = null;
}
// Controller
$redirection = new Controller();
$p = 'home';
switch($p){
    default:
        $redirection->connexion();
        break;
    case 'home':
        $redirection->home();
        break;
    case 'search':
        $redirection->search();
        break;
}
?>