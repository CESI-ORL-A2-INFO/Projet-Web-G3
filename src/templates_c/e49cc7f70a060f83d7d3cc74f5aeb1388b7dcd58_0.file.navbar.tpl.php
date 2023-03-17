<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:58:46
  from 'C:\www\ProjetMobile\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641439d6229744_28360792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49cc7f70a060f83d7d3cc74f5aeb1388b7dcd58' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1679047035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641439d6229744_28360792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1093205833641439d62288f7_45629503', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150948551641439d62293b6_00235058', 'navbar');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_562900556641439d6228d09_70816183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_1093205833641439d62288f7_45629503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_1093205833641439d62288f7_45629503',
  ),
  'include' => 
  array (
    0 => 'Block_562900556641439d6228d09_70816183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_562900556641439d6228d09_70816183', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_150948551641439d62293b6_00235058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_150948551641439d62293b6_00235058',
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
        <a href="./index.php?p=home" class="icons"><i class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=suivi" class="icons"><i class="fa-solid fa-bookmark fa-2x"></i></a>
        <a href="./index.php?p=profilEtud" class="icons"><i class="fa-solid fa-user fa-2x"></i></a>
    </header>
<?php
}
}
/* {/block 'navbar'} */
}
