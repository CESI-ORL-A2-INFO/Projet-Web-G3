<?php
/* Smarty version 4.2.1, created on 2023-03-20 15:35:18
  from 'C:\www\ProjetMobile\projet\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64186f2648d047_86629700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b876b8cf2560d9de3bbdbbed9b0f579ba629b641' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\projet\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679322772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64186f2648d047_86629700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113131455464186f2648b939_49407297', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5304051064186f2648c869_24501625', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_113131455464186f2648b939_49407297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_113131455464186f2648b939_49407297',
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
class Block_5304051064186f2648c869_24501625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5304051064186f2648c869_24501625',
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
