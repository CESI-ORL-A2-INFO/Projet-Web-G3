<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:31:00
  from 'C:\www\Projet-Web-G3\src\templates\profilPilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414ea24f35c45_69904296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a212fee6ee64e2d0499361b244a824a0dfd339' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilPilote.tpl',
      1 => 1679092257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414ea24f35c45_69904296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5879217916414ea24f33162_43347713', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2812524566414ea24f33c42_26695681', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_5879217916414ea24f33162_43347713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_5879217916414ea24f33162_43347713',
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
class Block_2812524566414ea24f33c42_26695681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2812524566414ea24f33c42_26695681',
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
                <input class="champ" id="name" type="text" value="" placeholder="Nom" readonly>
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
