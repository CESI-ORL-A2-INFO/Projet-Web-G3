<?php
/* Smarty version 4.2.1, created on 2023-03-17 11:16:05
  from 'C:\www\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64143de5b7e333_81627740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b165bf4467ea1df1237a0929cdd575c94e495b' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679048146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64143de5b7e333_81627740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99446033264143de5b7cdb6_88843676', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161073952464143de5b7de94_98632608', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_153812709964143de5b7d405_47457032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_99446033264143de5b7cdb6_88843676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_99446033264143de5b7cdb6_88843676',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_153812709964143de5b7d405_47457032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153812709964143de5b7d405_47457032', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_161073952464143de5b7de94_98632608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_161073952464143de5b7de94_98632608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="foot">
        <div class="text">
            <h2 id="join">Rejoignez nous</h2>
            <p id="message1">Venez nous rejoindre sur le réseau de votre choix pour</p>
            <p id="message2">pouvoir suivre l'actualité CESI.</p>
        </div>
        <div class="social">
            <a href="./index.php?p=home" class="face"><i class="fa-brands fa-facebook fa-3x a face"></i></a>
            <a href="./index.php?p=home" class="twit"><i class="fa-brands fa-twitter fa-3x a twit"></i></a>
            <a href="./index.php?p=home" class="insta"><i class="fa-brands fa-instagram fa-3x a insta"></i></a>
            <a href="./index.php?p=home" class="linked"><i class="fa-brands fa-linkedin fa-3x a linked"></i></a>
        </div>
        <div class="bas">
            <p id="textbas">© 2023 C'Stage</p>
            <a href="" class="bot" id="centre">Centre de confidentialité</a>
            <a href="" class="bot" id="cookie">Cookies</a>
            <a href="" class="bot" id="condition">Conditions d'utilisations</a>
        </div>
    </div>
<?php
}
}
/* {/block "footer"} */
}
