<?php
/* Smarty version 4.2.1, created on 2023-03-26 12:56:10
  from 'C:\www\Projet-Web-G3\src\templates\addEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642024caf3c779_04965600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2aa574a9c23aff1750fd3e8ecd577ea90671a2a' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\addEtud.tpl',
      1 => 1679828167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642024caf3c779_04965600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318271876642024caf2a102_80983920', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783966949642024caf2aec1_86132502', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_318271876642024caf2a102_80983920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_318271876642024caf2a102_80983920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addEtud.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1783966949642024caf2aec1_86132502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1783966949642024caf2aec1_86132502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="wrapper" accept="index.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prenom">
        <select name="centre">
            <option value="none">Centre</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCentre']->value, 'cent');
$_smarty_tpl->tpl_vars['cent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cent']->value) {
$_smarty_tpl->tpl_vars['cent']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
"><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="pilote">
            <option value="none">Pilote</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPilote']->value, 'pil');
$_smarty_tpl->tpl_vars['pil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pil']->value) {
$_smarty_tpl->tpl_vars['pil']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['pil']->value['IdPilote'];?>
"><?php echo $_smarty_tpl->tpl_vars['pil']->value['NomPilote'];?>
 <?php echo $_smarty_tpl->tpl_vars['pil']->value['PrenomPilote'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPromotion']->value, 'promo1');
$_smarty_tpl->tpl_vars['promo1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo1']->value) {
$_smarty_tpl->tpl_vars['promo1']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo1']->value['IdPromo'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" name="addEtud" value="add">Ajouter</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}