<?php
/* Smarty version 4.2.1, created on 2023-03-15 09:28:12
  from 'C:\www\Projet-Web-G3\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411819c5cc209_26726889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e2f52068c06451c65b259ac6516b55de9c760d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\index.php',
      1 => 1678868891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411819c5cc209_26726889 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

define('RACINE_DIR', __DIR__);
require("./src/lib/appSmartyLib.php");
$test = new AppSmarty();

$test->display('connexion.tpl');
/* header('Location: ./connexion/connexion.html');
die() */
<?php echo '?>';
}
}
