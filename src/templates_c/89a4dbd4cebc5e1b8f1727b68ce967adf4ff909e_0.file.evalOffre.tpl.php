<?php
/* Smarty version 4.2.1, created on 2023-03-21 14:02:11
  from 'C:\www\Projet-Web-G3\src\templates\evalOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419aad3bb5fc0_26723032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a4dbd4cebc5e1b8f1727b68ce967adf4ff909e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\evalOffre.tpl',
      1 => 1679403730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419aad3bb5fc0_26723032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9564112346419aad3bb4196_28274817', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11879131666419aad3bb55a8_47799539', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_9564112346419aad3bb4196_28274817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_9564112346419aad3bb4196_28274817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/evalOffre.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_11879131666419aad3bb55a8_47799539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11879131666419aad3bb55a8_47799539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'content'} */
}
