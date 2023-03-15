<?php
/* Smarty version 4.2.1, created on 2023-03-15 11:46:16
  from 'C:\www\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411a1f8612183_98182507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051407a9e2b65c4af3b4751e50d9fdbd3bbe015d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1678877174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411a1f8612183_98182507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14424723566411a1f8611312_60684729', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8665102546411a1f8611c80_27655915', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_14424723566411a1f8611312_60684729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_14424723566411a1f8611312_60684729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./connexion/connexion.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_8665102546411a1f8611c80_27655915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8665102546411a1f8611c80_27655915',
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
                    <a href="" id="forgorPassword">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
<?php
}
}
/* {/block 'content'} */
}
