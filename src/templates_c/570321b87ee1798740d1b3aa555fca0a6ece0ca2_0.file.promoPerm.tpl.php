<?php
/* Smarty version 4.2.1, created on 2023-03-28 09:46:59
  from 'C:\www\9h24\Projet-Web-G3\src\templates\promoPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64229b73610a56_54173867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570321b87ee1798740d1b3aa555fca0a6ece0ca2' => 
    array (
      0 => 'C:\\www\\9h24\\Projet-Web-G3\\src\\templates\\promoPerm.tpl',
      1 => 1679988297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64229b73610a56_54173867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72822042464229b735fc0f6_85620759', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202924640564229b735fd179_26177263', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_72822042464229b735fc0f6_85620759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_72822042464229b735fc0f6_85620759',
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
class Block_202924640564229b735fd179_26177263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202924640564229b735fd179_26177263',
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
