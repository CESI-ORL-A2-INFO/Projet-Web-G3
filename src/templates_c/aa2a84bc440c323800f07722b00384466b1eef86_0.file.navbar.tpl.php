<?php
/* Smarty version 4.2.1, created on 2023-03-22 16:30:43
  from 'C:\prosit\1\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b1f238361a5_40091239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa2a84bc440c323800f07722b00384466b1eef86' => 
    array (
      0 => 'C:\\prosit\\1\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1679499013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b1f238361a5_40091239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1542496186641b1f23834a07_37272023', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154343592641b1f23835aa0_67170772', 'navbar');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_1330856125641b1f23835039_67495743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_1542496186641b1f23834a07_37272023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_1542496186641b1f23834a07_37272023',
  ),
  'include' => 
  array (
    0 => 'Block_1330856125641b1f23835039_67495743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1330856125641b1f23835039_67495743', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_154343592641b1f23835aa0_67170772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_154343592641b1f23835aa0_67170772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php?p=home" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <button id="Afficher" value="show">Search</button>
            <form action="index.php?" method="get" id="search">
                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php?p=home" id="nom">C'Stage</a>
        <a href="./index.php?p=home" class="icons"><i id = "house" class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons"><i id = "squareP" class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=suivi" class="icons"><i id = "bookM" class="fa-solid fa-bookmark fa-2x"></i></a>
        <a href="./index.php?p=profilEtud" class="icons"><i id = "Utils" class="fa-solid fa-user fa-2x"></i></a>
    
        </header>
        <?php echo '<script'; ?>
>
        document.getElementById("Afficher").onclick = function() {
            document.getElementById("searchbar").style.display = "block";
        };
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'navbar'} */
}
