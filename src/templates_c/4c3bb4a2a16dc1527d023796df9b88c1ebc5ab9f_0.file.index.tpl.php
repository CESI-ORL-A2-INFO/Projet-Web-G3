<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:35:43
  from 'C:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414346fc43da5_07541591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3bb4a2a16dc1527d023796df9b88c1ebc5ab9f' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679045734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414346fc43da5_07541591 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14352250016414346fc41441_39063821', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7185849436414346fc41fb3_43688668', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5442029846414346fc42942_00954752', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20815202646414346fc434b9_69819568', "footer");
?>

    </footer>
</body><?php }
/* {block "head"} */
class Block_14352250016414346fc41441_39063821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14352250016414346fc41441_39063821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_7185849436414346fc41fb3_43688668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_7185849436414346fc41fb3_43688668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_5442029846414346fc42942_00954752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5442029846414346fc42942_00954752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_20815202646414346fc434b9_69819568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20815202646414346fc434b9_69819568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block "footer"} */
}
