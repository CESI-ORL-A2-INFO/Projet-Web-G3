<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:50:10
  from 'C:\www\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641437d2350133_13613016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b165bf4467ea1df1237a0929cdd575c94e495b' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679046599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641437d2350133_13613016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1507046666641437d234eb64_53804715', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734877582641437d234fc23_01023789', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_1856659107641437d234f136_77689346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_1507046666641437d234eb64_53804715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1507046666641437d234eb64_53804715',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_1856659107641437d234f136_77689346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1856659107641437d234f136_77689346', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_1734877582641437d234fc23_01023789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1734877582641437d234fc23_01023789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="foot">
        <h2 id="join">Rejoignez nous</h2>
        <p id="message1">Venez nous rejoindre sur le réseau de votre choix pour</p>
        <p id="message2">pouvoir suivre l'actualité CESI.</p>
        <div class="social">
            <i class="fa-brands fa-facebook fa-3x"></i>
            <i class="fa-brands fa-twitter fa-3x"></i>
            <i class="fa-brands fa-instagram fa-3x"></i>
            <i class="fa-brands fa-linkedin fa-3x"></i>
        </div>
    </div>
<?php
}
}
/* {/block "footer"} */
}
