<?php
/* Smarty version 4.2.1, created on 2023-03-25 11:03:39
  from 'C:\www\Projet-Web-G3\src\templates\promoPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641ec6fb468ed0_96067545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57151fe34dc38ae3cdaded01af6f00befec2981d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\promoPerm.tpl',
      1 => 1679738418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ec6fb468ed0_96067545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_658070625641ec6fb460568_75691879', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_592380128641ec6fb460f41_92767439', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_658070625641ec6fb460568_75691879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_658070625641ec6fb460568_75691879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/promotion.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_592380128641ec6fb460f41_92767439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_592380128641ec6fb460f41_92767439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
 : </h1>
    <form class="newEtud" method="post" accept="index.php">
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
        <button type="submit" name="action" value="add">Ajouter un étudiant</button>
        <button type="submit" name="actionPromo" value="del">Supprimer la promotion</button>
    </form>
    <h2>Etudiant : </h2>
    <form class="cardContainer" method="get" action="index.php">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etudiant']->value, 'etud');
$_smarty_tpl->tpl_vars['etud']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['etud']->value) {
$_smarty_tpl->tpl_vars['etud']->do_else = false;
?>
            <button class="card" name="etud" value="<?php echo $_smarty_tpl->tpl_vars['etud']->value['IdEtudiant'];?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['etud']->value['NomEtudiant'];?>
 <?php echo $_smarty_tpl->tpl_vars['etud']->value['PrenomEtudiant'];?>
</p>
            </button>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
<?php
}
}
/* {/block 'content'} */
}
