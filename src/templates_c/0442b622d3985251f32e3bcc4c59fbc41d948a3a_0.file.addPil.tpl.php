<?php
/* Smarty version 4.2.1, created on 2023-03-26 13:03:16
  from 'C:\www\Projet-Web-G3\src\templates\addPil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64202674a939c7_10139652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0442b622d3985251f32e3bcc4c59fbc41d948a3a' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\addPil.tpl',
      1 => 1679828594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64202674a939c7_10139652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23981784964202674a8aef6_64119397', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45033429864202674a8b915_66573511', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_23981784964202674a8aef6_64119397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_23981784964202674a8aef6_64119397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addPil.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_45033429864202674a8b915_66573511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_45033429864202674a8b915_66573511',
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
        <select name="admin">
            <option value="0">N'est pas admin</option>
            <option value="1">Est admin</option>
        </select>
        <button type="text" name="addPil" value="add">Ajouter</button>
<?php
}
}
/* {/block 'content'} */
}
