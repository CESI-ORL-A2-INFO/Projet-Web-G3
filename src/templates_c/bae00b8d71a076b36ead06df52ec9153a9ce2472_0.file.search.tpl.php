<?php
/* Smarty version 4.2.1, created on 2023-03-17 11:27:43
  from 'C:\www\ProjetMobile\Projet-Web-G3\src\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414409f6ed834_45594599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae00b8d71a076b36ead06df52ec9153a9ce2472' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\Projet-Web-G3\\src\\templates\\search.tpl',
      1 => 1679047035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414409f6ed834_45594599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19129702866414409f6ec6b9_71800056', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5468086756414409f6ed2a9_32782365', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_19129702866414409f6ec6b9_71800056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_19129702866414409f6ec6b9_71800056',
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
class Block_5468086756414409f6ed2a9_32782365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5468086756414409f6ed2a9_32782365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'content'} */
}
