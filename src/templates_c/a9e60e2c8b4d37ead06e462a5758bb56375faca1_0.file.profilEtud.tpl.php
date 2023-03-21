<?php
<<<<<<< HEAD
/* Smarty version 4.2.1, created on 2023-03-21 09:29:51
=======
/* Smarty version 4.2.1, created on 2023-03-20 15:33:58
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  from 'C:\www\ProjetMobile\projet\Projet-Web-G3\src\templates\profilEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<< HEAD
  'unifunc' => 'content_64196afff17e11_46618968',
=======
  'unifunc' => 'content_64186ed6e00912_27141705',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e60e2c8b4d37ead06e462a5758bb56375faca1' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\projet\\Projet-Web-G3\\src\\templates\\profilEtud.tpl',
      1 => 1679387247,
      1 => 1679322772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64196afff17e11_46618968 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64186ed6e00912_27141705 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86580719764196afff0fd37_79091035', "include");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118914000764186ed6df8af2_95997252', "include");
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
?>


<?php ob_start();
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181462509464196afff10e99_83774290', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204300723064186ed6df9c19_48834089', 'content');
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
<<<<<<< HEAD
class Block_86580719764196afff0fd37_79091035 extends Smarty_Internal_Block
=======
class Block_118914000764186ed6df8af2_95997252 extends Smarty_Internal_Block
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
{
public $subBlocks = array (
  'include' => 
  array (
<<<<<<< HEAD
    0 => 'Block_86580719764196afff0fd37_79091035',
=======
    0 => 'Block_118914000764186ed6df8af2_95997252',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEtud.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_181462509464196afff10e99_83774290 extends Smarty_Internal_Block
=======
class Block_204300723064186ed6df9c19_48834089 extends Smarty_Internal_Block
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_181462509464196afff10e99_83774290',
=======
    0 => 'Block_204300723064186ed6df9c19_48834089',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Le site qui te fera avancer</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <div>
                <input class="champ" id="name" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" readonly>
                <input class="champ" id="centre" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['centre']->value;?>
" readonly>
                <input class="champ" id="pilote" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['nomPilote']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenomPilote']->value;?>
" readonly>
                <input class="champ" id="last" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
" readonly>        
            </div>
        </div>
    </div>
    <div class="wrapperStage">
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
    </form>

    </div>
<?php
}
}
/* {/block 'content'} */
}
