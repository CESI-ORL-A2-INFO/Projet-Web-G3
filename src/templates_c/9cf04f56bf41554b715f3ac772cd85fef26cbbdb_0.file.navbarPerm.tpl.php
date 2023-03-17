<?php
/* Smarty version 4.2.1, created on 2023-03-17 09:12:14
  from 'C:\www\Projet-Web-G3\src\templates\navbarPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641420de4e5c01_26394726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf04f56bf41554b715f3ac772cd85fef26cbbdb' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\navbarPerm.tpl',
      1 => 1679040369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641420de4e5c01_26394726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290959540641420de4e4821_26776816', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825479147641420de4e5661_84138770', 'navbar');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "include"} */
class Block_1890000314641420de4e4d24_80314456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "head"} */
class Block_290959540641420de4e4821_26776816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_290959540641420de4e4821_26776816',
  ),
  'include' => 
  array (
    0 => 'Block_1890000314641420de4e4d24_80314456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbarPerm.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890000314641420de4e4d24_80314456', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_1825479147641420de4e5661_84138770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_1825479147641420de4e5661_84138770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <form action="index.php?" method="get" id="search">
                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php" id="nom">C'Stage</a>
        <a href="./index.php?p=homePilote" class="icons"><i class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=profilPil" class="icons"><i class="fa-solid fa-user fa-2x"></i></a>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
