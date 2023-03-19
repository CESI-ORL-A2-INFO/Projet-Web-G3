<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:27:43
  from 'D:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414e95f9881f7_99873896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc87f60cd49382de9f9a590a03596eb38d1d021' => 
    array (
      0 => 'D:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679091637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414e95f9881f7_99873896 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10617505946414e95f986a77_69438082', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1680678146414e95f9871f3_99043813', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8920193286414e95f987717_26712875', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4785237056414e95f987d56_58687899', "footer");
?>

    </footer>
</body><?php }
/* {block "head"} */
class Block_10617505946414e95f986a77_69438082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_10617505946414e95f986a77_69438082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_1680678146414e95f9871f3_99043813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_1680678146414e95f9871f3_99043813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_8920193286414e95f987717_26712875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8920193286414e95f987717_26712875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_4785237056414e95f987d56_58687899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4785237056414e95f987d56_58687899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block "footer"} */
}
