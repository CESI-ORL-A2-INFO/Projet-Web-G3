<?php
/* Smarty version 4.2.1, created on 2023-03-22 13:55:54
  from 'C:\www\ProjetMobile\new\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641afada012fd7_83728432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713c1ee1f47e49703cdd4732e12204032e790bc2' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679475748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641afada012fd7_83728432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1047142603641afada011de1_80053756', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1340270928641afada012b68_58935672', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_1047142603641afada011de1_80053756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_1047142603641afada011de1_80053756',
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
class Block_1340270928641afada012b68_58935672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1340270928641afada012b68_58935672',
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
