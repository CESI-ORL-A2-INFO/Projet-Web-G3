<?php
/* Smarty version 4.2.1, created on 2023-03-16 11:37:50
  from 'C:\www\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6412f17e205114_45904635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe068c2c56d0a52366088a6aed3992bb9f3d54e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1678963069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6412f17e205114_45904635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5465442756412f17e203702_80969845', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_677936456412f17e204b50_64266715', 'navbar');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "include"} */
class Block_9356600266412f17e204103_61767174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "head"} */
class Block_5465442756412f17e203702_80969845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5465442756412f17e203702_80969845',
  ),
  'include' => 
  array (
    0 => 'Block_9356600266412f17e204103_61767174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9356600266412f17e204103_61767174', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block 'navbar'} */
class Block_677936456412f17e204b50_64266715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_677936456412f17e204b50_64266715',
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
        <i class="fa-solid fa-house fa-2x"></i>
        <i class="fa-solid fa-square-plus fa-2x"></i>
        <i class="fa-solid fa-bookmark fa-2x"></i>
        <i class="fa-solid fa-user fa-2x"></i>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
