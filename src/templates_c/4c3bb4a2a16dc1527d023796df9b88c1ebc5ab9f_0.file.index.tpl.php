<?php
/* Smarty version 4.2.1, created on 2023-03-27 15:13:31
  from 'C:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421967b134a40_19285145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3bb4a2a16dc1527d023796df9b88c1ebc5ab9f' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1679922807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421967b134a40_19285145 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12913366846421967b131e01_54492318', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13859460066421967b1331c3_55548569', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13800273846421967b1337f7_02703538', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14218235446421967b133e92_26735429', "footer");
?>

    </footer>
    <?php echo '<script'; ?>
 type="text/javascript" src="service-worker.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9980222906421967b134543_00270608', "script");
?>

</body><?php }
/* {block "head"} */
class Block_12913366846421967b131e01_54492318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_12913366846421967b131e01_54492318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_13859460066421967b1331c3_55548569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_13859460066421967b1331c3_55548569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_13800273846421967b1337f7_02703538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13800273846421967b1337f7_02703538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_14218235446421967b133e92_26735429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14218235446421967b133e92_26735429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_9980222906421967b134543_00270608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9980222906421967b134543_00270608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "script"} */
}
