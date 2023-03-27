<?php
/* Smarty version 4.2.1, created on 2023-03-27 09:19:29
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\navbarPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64214381d34e25_38219703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1924a1b14d30750ece5bab4a20db5ac5eb05753' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\navbarPerm.tpl',
      1 => 1679901532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64214381d34e25_38219703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62523313564214381d33b45_23143745', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178234980364214381d34973_15586589', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_69763786864214381d34021_71649825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_62523313564214381d33b45_23143745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_62523313564214381d33b45_23143745',
  ),
  'include' => 
  array (
    0 => 'Block_69763786864214381d34021_71649825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbarPerm.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69763786864214381d34021_71649825', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_178234980364214381d34973_15586589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_178234980364214381d34973_15586589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="navbar">
        <div class="wrapleft">
            <button id="Afficher" value="show">Search</button>
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
