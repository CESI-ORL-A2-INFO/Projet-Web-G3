<?php
/* Smarty version 4.2.1, created on 2023-03-16 14:22:29
  from 'C:\www\Projet-Web-G3\src\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6413181524e208_18547616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47885b14f80ea7263aef17ad084c62c48b79188' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\search.tpl',
      1 => 1678972880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413181524e208_18547616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6285774466413181524d397_08127793', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11195561866413181524dc98_74188993', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_6285774466413181524d397_08127793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_6285774466413181524d397_08127793',
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
class Block_11195561866413181524dc98_74188993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11195561866413181524dc98_74188993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'content'} */
}
