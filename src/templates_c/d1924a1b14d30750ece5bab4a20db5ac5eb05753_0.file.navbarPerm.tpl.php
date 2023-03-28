<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:33:18
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\navbarPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421a92e8502e3_15522391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1924a1b14d30750ece5bab4a20db5ac5eb05753' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\navbarPerm.tpl',
      1 => 1679927595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421a92e8502e3_15522391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17747976966421a92e84f243_92635212', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6723924366421a92e84fee3_34209661', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_3556179366421a92e84f749_89931365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_17747976966421a92e84f243_92635212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_17747976966421a92e84f243_92635212',
  ),
  'include' => 
  array (
    0 => 'Block_3556179366421a92e84f749_89931365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbarPerm.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3556179366421a92e84f749_89931365', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_6723924366421a92e84fee3_34209661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_6723924366421a92e84fee3_34209661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php?p=home" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <form action="index.php?" method="get" id="search">

                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php?p=home" id="nom">C.Stage</a>
        <a href="./index.php?p=home" class="icons"><i class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=profil" class="icons"><i class="fa-solid fa-user fa-2x"></i></a>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
