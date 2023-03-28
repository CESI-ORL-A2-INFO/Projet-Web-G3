<?php
/* Smarty version 4.2.1, created on 2023-03-27 15:43:24
  from 'C:\www\1111\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64219d7c21e9c8_93918704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '703f9e47205fbba0287cd340eaf6b53172a31cb5' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1679924590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64219d7c21e9c8_93918704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155719961464219d7c21d4b6_20838919', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185949051164219d7c21e403_52357004', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_110385534664219d7c21da25_45870158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_155719961464219d7c21d4b6_20838919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_155719961464219d7c21d4b6_20838919',
  ),
  'include' => 
  array (
    0 => 'Block_110385534664219d7c21da25_45870158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110385534664219d7c21da25_45870158', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_185949051164219d7c21e403_52357004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_185949051164219d7c21e403_52357004',
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
        <a href="./index.php?p=home" id="nom">C.Stage</a>

        <a href="./index.php?p=home" class="icons" title="Accueil"><i id="house" class="fa-solid fa-house fa-2x"></i></a>
        <a href="./index.php?p=search" class="icons" title="Recherche"><i id="squareP" class="fa-solid fa-square-plus fa-2x"></i></a>
        <a href="./index.php?p=suivi" class="icons" title="Suivi"><i id="bookM" class="fa-solid fa-bookmark fa-2x"></i></a>
        <a href="./index.php?p=profilEtud" class="icons" title="Profil"><i id="Utils" class="fa-solid fa-user fa-2x"></i></a>

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
