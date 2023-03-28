<?php
/* Smarty version 4.2.1, created on 2023-03-28 10:10:58
  from 'C:\www\955\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422a112ac04f3_54662398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09d63b3066a0fa9c91f622018e80bbb49771955' => 
    array (
      0 => 'C:\\www\\955\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1679990160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422a112ac04f3_54662398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15727380336422a112abe534_44611402', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9291642316422a112abfc36_39555904', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
class Block_16847470356422a112abed91_57793808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
class Block_15727380336422a112abe534_44611402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_15727380336422a112abe534_44611402',
  ),
  'include' => 
  array (
    0 => 'Block_16847470356422a112abed91_57793808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbar.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16847470356422a112abed91_57793808', "include", $this->tplIndex);
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
class Block_9291642316422a112abfc36_39555904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_9291642316422a112abfc36_39555904',
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
