<?php
/* Smarty version 4.2.1, created on 2023-03-23 16:25:46
  from 'C:\www\Projet-Web-G3\src\templates\addEntreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641c6f7a363b36_82022689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8094914020b0813bb6482ba209ba926b9ab514' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\addEntreprise.tpl',
      1 => 1679585145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c6f7a363b36_82022689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1634625451641c6f7a34d203_36344556', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837876135641c6f7a350173_21948789', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_1634625451641c6f7a34d203_36344556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_1634625451641c6f7a34d203_36344556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEntr.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1837876135641c6f7a350173_21948789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1837876135641c6f7a350173_21948789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="index.php" method="post" class="info">
        <p>Nom de l'entreprise : </p>
    <input class="champ" name="nomEntr" value="" placeholder="Nom de l'entreprise">
    <p class="adresse">Adresse : </p>
    <input class="champ" name="numRue" value="" placeholder="Numéro de rue">
    <input class="champ" name="nomRue" value="" placeholder="Nom de rue">
    <input class="champ" name="ville" value="" placeholder="Ville">
    <input class="champ" name="cp" value="" placeholder="Code Postal">
    <input class="champ" name="pays" value="" placeholder="Pays">
    <p>Secteur : </p>
    <select class="secteur" name="secteur1">
        <option value="none">Secteur</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect1');
$_smarty_tpl->tpl_vars['sect1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect1']->value) {
$_smarty_tpl->tpl_vars['sect1']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <select class="secteur" name="secteur2">
        <option value="none">Secteur</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect2');
$_smarty_tpl->tpl_vars['sect2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect2']->value) {
$_smarty_tpl->tpl_vars['sect2']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <select class="secteur" name="secteur3">
        <option value="none">Secteur</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect3');
$_smarty_tpl->tpl_vars['sect3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect3']->value) {
$_smarty_tpl->tpl_vars['sect3']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <p>Nombre de stagiaire : </p>
    <input type="text" name="nbStagiaire" value="" placeholder="Nombre de stagiaires">
    <button type="submit" name="actionEntr" value="add">Ajouter une entreprise</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
