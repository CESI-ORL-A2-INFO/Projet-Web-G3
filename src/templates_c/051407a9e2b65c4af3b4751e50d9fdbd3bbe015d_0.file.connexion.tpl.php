<?php
/* Smarty version 4.2.1, created on 2023-03-15 09:46:24
  from 'C:\www\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641185e03c5e86_54096715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051407a9e2b65c4af3b4751e50d9fdbd3bbe015d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1678869606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641185e03c5e86_54096715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53072236641185e03c1bb2_91728713', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270816948641185e03c4808_73841261', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "head"} */
class Block_53072236641185e03c1bb2_91728713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_53072236641185e03c1bb2_91728713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./connexion/connexion.css">
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1270816948641185e03c4808_73841261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1270816948641185e03c4808_73841261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="all">
            <div class="wrapper">
                <div class="form">
                    <form action="" method="post">
                        <input class="champ" id="email" type="email" value="" placeholder="Adresse e-mail">
                        <input class="champ" id="password" type="password" value="" placeholder="Mot de passe">
                        <input class="champ" id="connect" type="submit" value="Se connecter">
                    </form>
                    <a href="" id="forgorPassword">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
<?php
}
}
/* {/block "content"} */
}
