<?php
/* Smarty version 4.2.1, created on 2023-03-15 09:46:24
  from 'C:\www\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641185e04286d2_25941563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe068c2c56d0a52366088a6aed3992bb9f3d54e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1678868383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641185e04286d2_25941563 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="./home/home.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1201970584641185e04276f8_12711770', "head");
?>

    <title>Home</title>
</head>

<body>
    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" id="logo"><img src="./logo.png" alt="logo" id="logo"></a>
            <input type="search" id="searchbar" placeholder="Recherche...">
            <form action="" method="get" id="search">
                <button id="butSearch"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php" id="nom">CESIstage</a>
        <i class="fa-solid fa-house fa-2x"></i>
        <i class="fa-solid fa-square-plus fa-2x"></i>
        <i class="fa-solid fa-bookmark fa-2x"></i>
        <i class="fa-solid fa-user fa-2x"></i>
    </header>
    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_866743915641185e0428259_58607319', "content");
?>

    </main>
    <footer>

    </footer>
</body>

</html><?php }
/* {block "head"} */
class Block_1201970584641185e04276f8_12711770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1201970584641185e04276f8_12711770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_866743915641185e0428259_58607319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_866743915641185e0428259_58607319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
