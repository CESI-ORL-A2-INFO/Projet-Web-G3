<?php
/* Smarty version 4.2.1, created on 2023-03-28 21:43:02
  from 'D:\www\projet\Projet-Web-G3\src\templates\navbarPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423434652d7e7_65105493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee6c5b4c9a0cec7ba51373fb82e190e62d01563' => 
    array (
      0 => 'D:\\www\\projet\\Projet-Web-G3\\src\\templates\\navbarPerm.tpl',
      1 => 1680032228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423434652d7e7_65105493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2046899886423434652c206_03008125', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7791428326423434652d381_02744262', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_19959892876423434652c834_28887089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_2046899886423434652c206_03008125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_2046899886423434652c206_03008125',
  ),
  'include' => 
  array (
    0 => 'Block_19959892876423434652c834_28887089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbarPerm.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19959892876423434652c834_28887089', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_7791428326423434652d381_02744262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_7791428326423434652d381_02744262',
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
        <a href="./index.php?p=home" class="icons" title="Accueil"><i id="house" class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons" title="Recherche"><i id="squareP" class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=profil" class="icons" title="Profil"><i id="Utils" class="fa-solid fa-user fa-2x"></i></a>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
