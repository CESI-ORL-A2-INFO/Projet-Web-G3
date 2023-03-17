<?php
/* Smarty version 4.2.1, created on 2023-03-17 09:18:33
  from 'C:\www\Projet-Web-G3\src\templates\profilPilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64142259d03661_69118325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a212fee6ee64e2d0499361b244a824a0dfd339' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilPilote.tpl',
      1 => 1679041113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64142259d03661_69118325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36488469764142259d00f09_66995413', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125452906464142259d01860_63739136', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_36488469764142259d00f09_66995413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_36488469764142259d00f09_66995413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilPilote.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_125452906464142259d01860_63739136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125452906464142259d01860_63739136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h1>Tuteur</h1>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <div>
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom" readonly>
                </div>
                <div>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom" readonly>
                </div>
                <input class="champ" id="Centre" type="text" value="" placeholder="Orléans" readonly>
            </form>
        </div>
    </div>
    <div class="wrapperPromo">

    </div>
<?php
}
}
/* {/block 'content'} */
}
