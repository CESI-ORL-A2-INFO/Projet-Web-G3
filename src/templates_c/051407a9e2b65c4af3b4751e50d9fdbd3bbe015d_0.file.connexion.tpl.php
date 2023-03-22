<?php
/* Smarty version 4.2.1, created on 2023-03-21 13:30:46
  from 'C:\www\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419a3762c2384_28790222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051407a9e2b65c4af3b4751e50d9fdbd3bbe015d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679401831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419a3762c2384_28790222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9192626006419a3762c1480_29612543', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1720497806419a3762c1df6_72188224', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_9192626006419a3762c1480_29612543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_9192626006419a3762c1480_29612543',
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
class Block_1720497806419a3762c1df6_72188224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1720497806419a3762c1df6_72188224',
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
