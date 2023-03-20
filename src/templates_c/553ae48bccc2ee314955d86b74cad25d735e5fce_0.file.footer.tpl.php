<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:27:47
  from 'D:\www\Projet-Web-G3\src\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414e96318bcb3_02027840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '553ae48bccc2ee314955d86b74cad25d735e5fce' => 
    array (
      0 => 'D:\\www\\Projet-Web-G3\\src\\templates\\footer.tpl',
      1 => 1679091645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414e96318bcb3_02027840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13947405606414e963189c51_51432030', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7870790066414e96318b4b0_64572041', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "navbarcss"} */
class Block_17960393056414e96318a0f9_24030625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "navbarcss"} */
/* {block "head"} */
class Block_13947405606414e963189c51_51432030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13947405606414e963189c51_51432030',
  ),
  'navbarcss' => 
  array (
    0 => 'Block_17960393056414e96318a0f9_24030625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/footer.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17960393056414e96318a0f9_24030625', "navbarcss", $this->tplIndex);
?>

<?php
}
}
/* {/block "head"} */
/* {block "footer"} */
class Block_7870790066414e96318b4b0_64572041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7870790066414e96318b4b0_64572041',
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
