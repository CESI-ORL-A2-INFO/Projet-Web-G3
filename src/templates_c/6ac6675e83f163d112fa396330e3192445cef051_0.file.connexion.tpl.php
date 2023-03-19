<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:27:43
  from 'D:\www\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414e95f8c6363_62465773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac6675e83f163d112fa396330e3192445cef051' => 
    array (
      0 => 'D:\\www\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679091645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414e95f8c6363_62465773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18064178556414e95f8c4b58_08854661', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15243939216414e95f8c5d53_89238061', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block "head"} */
class Block_18064178556414e95f8c4b58_08854661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_18064178556414e95f8c4b58_08854661',
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
class Block_15243939216414e95f8c5d53_89238061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15243939216414e95f8c5d53_89238061',
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
