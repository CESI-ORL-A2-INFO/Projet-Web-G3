<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:58:46
  from 'C:\www\ProjetMobile\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641439d6299849_07777737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594a1787284de8b6c09f9919b596234c81a2edad' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679047035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641439d6299849_07777737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1454881558641439d6298997_25926013', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_530398934641439d62994b3_91348290', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_817680137641439d6298d17_24496333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_1454881558641439d6298997_25926013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1454881558641439d6298997_25926013',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_817680137641439d6298d17_24496333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_817680137641439d6298d17_24496333', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_530398934641439d62994b3_91348290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_530398934641439d62994b3_91348290',
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
