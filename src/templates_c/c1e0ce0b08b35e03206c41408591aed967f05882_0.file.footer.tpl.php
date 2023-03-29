<?php
/* Smarty version 4.2.1, created on 2023-03-28 21:42:25
  from 'D:\www\projet\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64234321696d95_98102454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e0ce0b08b35e03206c41408591aed967f05882' => 
    array (
      0 => 'D:\\www\\projet\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1680032228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64234321696d95_98102454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133059086064234321695b22_88937976', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47081862964234321696931_66569557', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_13473530764234321695ff6_90539908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_133059086064234321695b22_88937976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_133059086064234321695b22_88937976',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_13473530764234321695ff6_90539908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13473530764234321695ff6_90539908', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_47081862964234321696931_66569557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_47081862964234321696931_66569557',
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
