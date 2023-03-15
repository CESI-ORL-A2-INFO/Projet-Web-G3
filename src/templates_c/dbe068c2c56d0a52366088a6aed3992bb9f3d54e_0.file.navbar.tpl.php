<?php
/* Smarty version 4.2.1, created on 2023-03-15 10:13:54
  from 'C:\www\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64118c529161f7_62189211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe068c2c56d0a52366088a6aed3992bb9f3d54e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1678871633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64118c529161f7_62189211 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="./navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108953552364118c52914768_16110300', "head");
?>

    <title>Home</title>
</head>

<body>
    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <form action="index.php?" method="get" id="search">
                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11934792864118c52915ce9_10737373', "content");
?>

    </main>
    <footer>

    </footer>
</body>

</html><?php }
/* {block "head"} */
class Block_108953552364118c52914768_16110300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_108953552364118c52914768_16110300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_11934792864118c52915ce9_10737373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11934792864118c52915ce9_10737373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
