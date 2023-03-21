<?php
<<<<<<< HEAD
/* Smarty version 4.2.1, created on 2023-03-21 09:29:52
=======
/* Smarty version 4.2.1, created on 2023-03-20 15:33:23
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  from 'C:\www\ProjetMobile\projet\Projet-Web-G3\src\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<< HEAD
  'unifunc' => 'content_64196b000719d3_55694762',
=======
  'unifunc' => 'content_64186eb333bf24_79184607',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9c8492a1c8deebb71dfa6c3f5861df2fd92abc5' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\projet\\Projet-Web-G3\\src\\templates\\navbar.tpl',
      1 => 1679322772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64196b000719d3_55694762 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64186eb333bf24_79184607 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34727098564196b00070b54_40576069', "navbarcss");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116879856864186eb333a1c4_90894314', "navbarcss");
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19142491864196b00071592_48159603', 'navbar');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189519772164186eb333bad4_63825102', 'navbar');
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "footer.tpl");
}
/* {block "include"} */
<<<<<<< HEAD
class Block_68044018264196b00070eb6_36586924 extends Smarty_Internal_Block
=======
class Block_31941813464186eb333acb1_35909126 extends Smarty_Internal_Block
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "include"} */
/* {block "navbarcss"} */
<<<<<<< HEAD
class Block_34727098564196b00070b54_40576069 extends Smarty_Internal_Block
=======
class Block_116879856864186eb333a1c4_90894314 extends Smarty_Internal_Block
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
{
public $subBlocks = array (
  'navbarcss' => 
  array (
<<<<<<< HEAD
    0 => 'Block_34727098564196b00070b54_40576069',
  ),
  'include' => 
  array (
    0 => 'Block_68044018264196b00070eb6_36586924',
=======
    0 => 'Block_116879856864186eb333a1c4_90894314',
  ),
  'include' => 
  array (
    0 => 'Block_31941813464186eb333acb1_35909126',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/navbar.css">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68044018264196b00070eb6_36586924', "include", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31941813464186eb333acb1_35909126', "include", $this->tplIndex);
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
?>

<?php
}
}
/* {/block "navbarcss"} */
/* {block 'navbar'} */
<<<<<<< HEAD
class Block_19142491864196b00071592_48159603 extends Smarty_Internal_Block
=======
class Block_189519772164186eb333bad4_63825102 extends Smarty_Internal_Block
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
{
public $subBlocks = array (
  'navbar' => 
  array (
<<<<<<< HEAD
    0 => 'Block_19142491864196b00071592_48159603',
=======
    0 => 'Block_189519772164186eb333bad4_63825102',
>>>>>>> 7230173cd9a6de104174790bf1e47a5118545c2e
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <button id="Afficher" value="show">Search</button>
            <form action="index.php?" method="get" id="search">
                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php" id="nom">C'Stage</a>
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
