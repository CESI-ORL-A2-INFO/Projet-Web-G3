<?php
/* Smarty version 4.2.1, created on 2023-03-28 09:25:18
  from 'C:\www\9h24\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422965e8092b4_41142535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2b7d435a2f0a02c3dec83b350b354f64d165dc' => 
    array (
      0 => 'C:\\www\\9h24\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679988297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422965e8092b4_41142535 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19500870826422965e8061a1_68286349', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_256582306422965e806cf2_45084504', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3681448826422965e807596_40410927', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9433568736422965e808020_18001899', "footer");
?>

    </footer>
    <?php echo '<script'; ?>
 type="text/javascript" src="service-worker.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3727652556422965e808ac6_98362917', "script");
?>

</body><?php }
/* {block "head"} */
class Block_19500870826422965e8061a1_68286349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19500870826422965e8061a1_68286349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_256582306422965e806cf2_45084504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_256582306422965e806cf2_45084504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_3681448826422965e807596_40410927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3681448826422965e807596_40410927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_9433568736422965e808020_18001899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9433568736422965e808020_18001899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_3727652556422965e808ac6_98362917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3727652556422965e808ac6_98362917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "script"} */
}
