<?php
/* Smarty version 4.2.1, created on 2023-03-21 10:12:07
  from 'C:\www\ProjetMobile\ptest\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641974e7c01237_76452884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7bad9c181406ff36b29710b3d333d775b5a213' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\ptest\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679389852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641974e7c01237_76452884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_735629600641974e7bffd84_12363377', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_747495533641974e7c00c48_40419693', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_735629600641974e7bffd84_12363377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_735629600641974e7bffd84_12363377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/connexion.css">
<?php
}
}
/* {/block "navbarcss"} */
/* {block 'content'} */
class Block_747495533641974e7c00c48_40419693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_747495533641974e7c00c48_40419693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="allh">
        <div class="wrapper">
            <div class="form">
                <form action="index.php" method="post">
                    <input class="champ" id="email" type="email" name="mail" placeholder="Adresse e-mail">
                    <input class="champ" id="password" type="password" name="mdp" placeholder="Mot de passe">
                    <button class="champ" id="connect" type="submit" name="p" value="home">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
