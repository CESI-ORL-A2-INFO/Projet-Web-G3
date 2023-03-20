<?php
/* Smarty version 4.2.1, created on 2023-03-19 15:48:27
  from 'D:\www\Projet-Web-G3\src\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641720bb95c432_55747049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a70fe3bbf8f95a25d79f4a845e1c4b7ea0158e1' => 
    array (
      0 => 'D:\\www\\Projet-Web-G3\\src\\templates\\search.tpl',
      1 => 1679091637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641720bb95c432_55747049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_574641033641720bb95b577_41753108', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50199979641720bb95be19_21914869', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_574641033641720bb95b577_41753108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_574641033641720bb95b577_41753108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/search.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_50199979641720bb95be19_21914869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_50199979641720bb95be19_21914869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'content'} */
}
