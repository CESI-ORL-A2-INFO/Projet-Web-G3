<?php
/* Smarty version 4.2.1, created on 2023-03-20 15:33:23
  from 'C:\www\ProjetMobile\projet\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64186eb34d80a9_20037985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57564943e46530deb898b4e38ba224e2b7118f67' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\projet\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679322772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64186eb34d80a9_20037985 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8500071364186eb34d6a82_09186550', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155361031864186eb34d71c2_69229471', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92490946464186eb34d7650_59505579', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126072542664186eb34d7c31_14560020', "footer");
?>

    </footer>
</body><?php }
/* {block "head"} */
class Block_8500071364186eb34d6a82_09186550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8500071364186eb34d6a82_09186550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_155361031864186eb34d71c2_69229471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_155361031864186eb34d71c2_69229471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_92490946464186eb34d7650_59505579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_92490946464186eb34d7650_59505579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_126072542664186eb34d7c31_14560020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_126072542664186eb34d7c31_14560020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
        <?php
}
}
/* {/block "footer"} */
}
