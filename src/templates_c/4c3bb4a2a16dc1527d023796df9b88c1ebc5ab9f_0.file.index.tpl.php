<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:30:12
  from 'C:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421a874d30530_64311486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3bb4a2a16dc1527d023796df9b88c1ebc5ab9f' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679927411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421a874d30530_64311486 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="apple-touch-icon" href="./icons/apple-icon-180.png">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#FFFFFF"/>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_582578526421a874d2b365_46333460', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13573951186421a874d2dc58_72830172', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16384422206421a874d2e661_58726444', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12131913216421a874d2f144_91881442', "footer");
?>

    </footer>
    <?php echo '<script'; ?>
 type="text/javascript" src="service-worker.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3966962796421a874d2fb98_66162819', "script");
?>

</body><?php }
/* {block "head"} */
class Block_582578526421a874d2b365_46333460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_582578526421a874d2b365_46333460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_13573951186421a874d2dc58_72830172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_13573951186421a874d2dc58_72830172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_16384422206421a874d2e661_58726444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16384422206421a874d2e661_58726444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_12131913216421a874d2f144_91881442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12131913216421a874d2f144_91881442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_3966962796421a874d2fb98_66162819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3966962796421a874d2fb98_66162819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "script"} */
}
