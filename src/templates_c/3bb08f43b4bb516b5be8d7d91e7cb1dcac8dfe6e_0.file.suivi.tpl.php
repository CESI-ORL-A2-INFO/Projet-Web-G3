<?php
/* Smarty version 4.2.1, created on 2023-03-18 00:42:50
  from 'C:\www\Projet-Web-G3\src\templates\suivi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414fafa20c1d7_02134135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb08f43b4bb516b5be8d7d91e7cb1dcac8dfe6e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\suivi.tpl',
      1 => 1679096501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414fafa20c1d7_02134135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6017138266414fafa20aa14_70541195', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8881500026414fafa20bca9_53324062', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_6017138266414fafa20aa14_70541195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_6017138266414fafa20aa14_70541195',
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
class Block_8881500026414fafa20bca9_53324062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8881500026414fafa20bca9_53324062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'content'} */
}
