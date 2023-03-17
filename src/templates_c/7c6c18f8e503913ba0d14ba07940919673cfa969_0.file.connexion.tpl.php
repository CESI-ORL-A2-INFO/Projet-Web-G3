<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:58:43
  from 'C:\www\ProjetMobile\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641439d33ef1b3_33438021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c6c18f8e503913ba0d14ba07940919673cfa969' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679047035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641439d33ef1b3_33438021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1814426954641439d33ee277_71158929', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1867232024641439d33eece5_69242330', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block "head"} */
class Block_1814426954641439d33ee277_71158929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1814426954641439d33ee277_71158929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/connexion.css">
<?php
}
}
/* {/block "head"} */
/* {block 'content'} */
class Block_1867232024641439d33eece5_69242330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1867232024641439d33eece5_69242330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="all">
            <div class="wrapper">
                <div class="form">
                    <form action="index.php" method="post">
                        <input class="champ" id="email" type="email" name="mail" placeholder="Adresse e-mail">
                        <input class="champ" id="password" type="password" name="mdp" placeholder="Mot de passe">
                        <button class="champ" id="connect" type="submit" name="co" value="try">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
<?php
}
}
/* {/block 'content'} */
}
