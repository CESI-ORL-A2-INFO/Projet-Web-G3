<?php
/* Smarty version 4.2.1, created on 2023-03-27 15:46:10
  from 'C:\www\1111\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64219e22448625_65860972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e3939bb61e86232a846846d121b76e76a61b7c' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679924765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64219e22448625_65860972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199915304564219e22445e02_84463619', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18055831764219e22447d12_21629439', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_103628603964219e224468a6_54096959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_199915304564219e22445e02_84463619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_199915304564219e22445e02_84463619',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_103628603964219e224468a6_54096959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103628603964219e224468a6_54096959', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_18055831764219e22447d12_21629439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18055831764219e22447d12_21629439',
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
            <a href="https://www.facebook.com/CESIingenieurs/" class="face" title="Facebook"><i class="fa-brands fa-facebook fa-3x a face"></i></a>
            <a href="https://twitter.com/cesi_officiel?lang=fr" class="twit" title="Twitter"><i class="fa-brands fa-twitter fa-3x a twit"></i></a>
            <a href="https://www.instagram.com/cesi_officiel/?hl=fr" class="insta" title="Instagram"><i class="fa-brands fa-instagram fa-3x a insta"></i></a>
            <a href="https://fr.linkedin.com/school/cesi-officiel/" class="linked" title="LinkedIn"><i class="fa-brands fa-linkedin fa-3x a linked"></i></a>
        </div>

        <div class="bas">
            <p id="textbas">© 2023 C'Stage</p>
            <a href="index.php?p=CDC" class="bot" id="centre2">Centre de confidentialité</a>
            <a href="index.php?p=cookie" class="bot" id="cookie">Cookies</a>
            <a href="index.php?p=CGU" class="bot" id="condition">Conditions d'utilisations</a>
        </div>
    </div>
<?php
}
}
/* {/block "footer"} */
}
