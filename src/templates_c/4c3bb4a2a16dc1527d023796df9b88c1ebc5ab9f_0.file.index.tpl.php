<?php
/* Smarty version 4.2.1, created on 2023-03-15 11:46:16
  from 'C:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411a1f8721697_71825693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3bb4a2a16dc1527d023796df9b88c1ebc5ab9f' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1678877152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411a1f8721697_71825693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a82ab0d8d5.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10596119806411a1f871ff60_08372611', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12004991866411a1f8720695_04603301', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11231387426411a1f8720bc7_38702346', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5015979096411a1f87211a8_83396927', 'footer');
?>

    </footer>
</body><?php }
/* {block "head"} */
class Block_10596119806411a1f871ff60_08372611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_10596119806411a1f871ff60_08372611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_12004991866411a1f8720695_04603301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_12004991866411a1f8720695_04603301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_11231387426411a1f8720bc7_38702346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11231387426411a1f8720bc7_38702346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_5015979096411a1f87211a8_83396927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5015979096411a1f87211a8_83396927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'footer'} */
}
