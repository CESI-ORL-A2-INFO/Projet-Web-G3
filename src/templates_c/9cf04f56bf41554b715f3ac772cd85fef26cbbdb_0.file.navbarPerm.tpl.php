<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:28:25
  from 'C:\www\Projet-Web-G3\src\templates\navbarPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414e989844f70_85995264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf04f56bf41554b715f3ac772cd85fef26cbbdb' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\navbarPerm.tpl',
      1 => 1679092081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414e989844f70_85995264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3891815916414e989843a19_97304811', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10762899146414e9898449e9_98635796', 'navbar');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_16425174706414e989844040_52300958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_3891815916414e989843a19_97304811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_3891815916414e989843a19_97304811',
  ),
  'include' => 
  array (
    0 => 'Block_16425174706414e989844040_52300958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbarPerm.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16425174706414e989844040_52300958', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_10762899146414e9898449e9_98635796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_10762899146414e9898449e9_98635796',
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
        <a href="./index.php?p=home" id="nom">C'Stage</a>
        <a href="./index.php?p=home" class="icons"><i class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=profilPil" class="icons"><i class="fa-solid fa-user fa-2x"></i></a>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
