<?php
/* Smarty version 4.2.1, created on 2023-03-25 22:42:54
  from 'C:\www\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641f6adecac1a7_76787926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b165bf4467ea1df1237a0929cdd575c94e495b' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679745910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641f6adecac1a7_76787926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1103453856641f6adeca9e94_63767117', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1025309014641f6adecabc60_08463808', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_1112963275641f6adecaabd8_80148914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_1103453856641f6adeca9e94_63767117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1103453856641f6adeca9e94_63767117',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_1112963275641f6adecaabd8_80148914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1112963275641f6adecaabd8_80148914', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_1025309014641f6adecabc60_08463808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1025309014641f6adecabc60_08463808',
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
            <a href="https://www.facebook.com/CESIingenieurs/" class="face"><i class="fa-brands fa-facebook fa-3x a face"></i></a>
            <a href="https://twitter.com/cesi_officiel?lang=fr" class="twit"><i class="fa-brands fa-twitter fa-3x a twit"></i></a>
            <a href="https://www.instagram.com/cesi_officiel/?hl=fr" class="insta"><i class="fa-brands fa-instagram fa-3x a insta"></i></a>
            <a href="https://fr.linkedin.com/school/cesi-officiel/" class="linked"><i class="fa-brands fa-linkedin fa-3x a linked"></i></a>
        </div>
        <div class="bas">
            <p id="textbas">© 2023 C'Stage</p>
            <a href="index.php?p=CDC" class="bot" id="centre">Centre de confidentialité</a>
            <a href="" class="bot" id="cookie">Cookies</a>
            <a href="index.php?p=CGU" class="bot" id="condition">Conditions d'utilisations</a>
        </div>
    </div>
<?php
}
}
/* {/block "footer"} */
}
