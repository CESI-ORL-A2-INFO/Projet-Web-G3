<?php
/* Smarty version 4.2.1, created on 2023-03-29 11:20:46
  from 'C:\www\Projet-Web-G3\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642402ee706d49_33416098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3bb4a2a16dc1527d023796df9b88c1ebc5ab9f' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\index.tpl',
      1 => 1680081641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642402ee706d49_33416098 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <meta name="description" content="Site d'offre de stage du CESI.">
    <meta name="theme-color" content="#FFFFFF" />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117240954642402ee7039b7_77334927', "head");
?>

    <title>Home</title>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_643087710642402ee705289_29500174', 'navbar');
?>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1704121320642402ee705835_16786053', 'content');
?>

    </main>
    <footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308413848642402ee706166_89526872', "footer");
?>

    </footer>
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1944044674642402ee706800_60634883', "script");
?>

</body><?php }
/* {block "head"} */
class Block_1117240954642402ee7039b7_77334927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1117240954642402ee7039b7_77334927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_643087710642402ee705289_29500174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_643087710642402ee705289_29500174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navbar'} */
/* {block 'content'} */
class Block_1704121320642402ee705835_16786053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1704121320642402ee705835_16786053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_308413848642402ee706166_89526872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_308413848642402ee706166_89526872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_1944044674642402ee706800_60634883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1944044674642402ee706800_60634883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="service-worker.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "script"} */
}
