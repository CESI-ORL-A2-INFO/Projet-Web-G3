<?php
/* Smarty version 4.2.1, created on 2023-03-17 09:24:48
  from 'C:\www\Projet-Web-G3\src\templates\profilPilPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641423d0ea1c63_42852182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3aa827fae5a8451c0726b2facb41e665ec43c6' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilPilPerm.tpl',
      1 => 1679041486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641423d0ea1c63_42852182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_909195410641423d0e9ea71_64834253', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1398442995641423d0e9f673_03342888', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_909195410641423d0e9ea71_64834253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_909195410641423d0e9ea71_64834253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilPilPerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1398442995641423d0e9f673_03342888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1398442995641423d0e9f673_03342888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Le site qui te fera avancer</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom">
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom">
                <select name="centre" id="promotion">
                    <option value="Orléans" selected>Orléans</option>
                </select>
                <div>
                    <button id="boutonModif" type="submit" name="action" value="mod">Modifier</button>
                    <button id="boutonSuppr" type="submit" name="action" value="sup">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="wrapperStage">

    </div>
<?php
}
}
/* {/block 'content'} */
}
