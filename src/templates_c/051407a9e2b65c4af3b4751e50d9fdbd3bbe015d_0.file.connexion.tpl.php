<?php
/* Smarty version 4.2.1, created on 2023-03-15 10:19:17
  from 'C:\www\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64118d95dac830_98557518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051407a9e2b65c4af3b4751e50d9fdbd3bbe015d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1678871955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64118d95dac830_98557518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25478792064118d95dab148_06449503', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13898869564118d95dabfb8_74588579', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "head"} */
class Block_25478792064118d95dab148_06449503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_25478792064118d95dab148_06449503',
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
class Block_13898869564118d95dabfb8_74588579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13898869564118d95dabfb8_74588579',
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
/* {/block "content"} */
}
