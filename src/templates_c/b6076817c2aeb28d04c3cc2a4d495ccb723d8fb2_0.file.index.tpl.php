<?php
/* Smarty version 4.2.1, created on 2023-03-22 10:12:34
  from 'C:\prosit\Projet-Web-G3-1\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641ac6823a9e07_66666975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6076817c2aeb28d04c3cc2a4d495ccb723d8fb2' => 
    array (
      0 => 'C:\\prosit\\Projet-Web-G3-1\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679476319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ac6823a9e07_66666975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a82ab0d8d5.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1357455854641ac6823a6b39_15709087', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_296003053641ac6823a78f4_38737925', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545244875641ac6823a8304_89592100', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_728255474641ac6823a90c0_81395821', "footer");
?>

    </footer>
</body><?php }
/* {block "head"} */
class Block_1357455854641ac6823a6b39_15709087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1357455854641ac6823a6b39_15709087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_296003053641ac6823a78f4_38737925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_296003053641ac6823a78f4_38737925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_1545244875641ac6823a8304_89592100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1545244875641ac6823a8304_89592100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_728255474641ac6823a90c0_81395821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_728255474641ac6823a90c0_81395821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block "footer"} */
}
